<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use App\Category;
use App\Post;
use App\Like;
use App\Comment;
use App\Media;
use Validator;
use Illuminate\Http\Request;


class PostController extends Controller
{

    //================= Category ==============
    public function Categories(){
       
        $data['category'] = Category::all();
         return view('admin.categories',$data);
     }
     public function Category(Request $request){
         $name = $request->name;
         $validator = Validator::make($request->all(), [
             'name' => 'required|max:30'
         ]);
    
      if($validator->fails()){
          return redirect(route('admin.categories.list'))
          ->withErrors($validator)
          ->withInput();
      }else{
          Category::create([
              "category_name" => $name,
          ]);
      }
      return redirect(route('admin.categories.list'));
     }
     public function Categorydel($id){
         Category::where('id',$id)
         ->delete();
         return redirect(route('admin.categories.list'));
     }

    //================= Post =======================


   public function Posts(){
    $user_id = Auth::user()->id;
    $data['posts'] = DB::table('posts')
        ->join('medias','medias.id','=','posts.image')
        ->join('categories','posts.category','=','categories.id')
        ->select('posts.*','categories.category_name','medias.file_path')
        ->where(['posts.user_id'=>$user_id])
        ->get();
    return view('admin.post.list',$data);
    }
    public function Addpost(){
    $data['category'] = Category::all();
    return view('admin.post.add',$data);

    }
     public function PostStore(Request $request){
    $validator = Validator::make($request->all(), [
        'title'=>'required|max:250',
        'category'=>'required',
        'body'=>'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    if($validator->fails()){
     return back()->withErrors($validator)->withInput();
    }else{
        if ($files = $request->file('photo')) {
            $destinationPath = 'image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
         }
        $url = $profileImage;
        Media::create([
            "file_path" => $url
        ]);
        $medias_id = DB::getPdo()->lastInsertId();
     $title = $request->title;
     $category = $request->category;
     $detail = $request->body;
     $image = $medias_id;
     $user_id = Auth::user()->id;
    post::create([
        "user_id" => $user_id,
        "post_title" => $title,
        "category" => $category,
        "details" => $detail,
        "image" => $image,
    ]);
    }
    return Redirect::to('/posts');
    }
     public function Postview($id){
     	$data['post'] = DB::table('posts')
        ->join('medias','medias.id','=','posts.image')
        ->join('categories','posts.category','=','categories.id')
        ->select('posts.*','categories.category_name','medias.file_path')
        ->where(['posts.id'=>$id])
        ->first();
      return view('admin.post.view',$data);

    }
    public function PostEdit($id){
        $loguer =Auth::user()->id;
    $data['post'] = DB::table('posts')
        ->join('medias','medias.id','=','posts.image')
        ->join('categories','posts.category','=','categories.id')
        ->select('posts.*','categories.category_name','medias.file_path')
        ->where(['posts.id'=>$id])
        ->first();
    $data['category'] = Category::all();
            if($data['post']->user_id == $loguer){
                return back();
            }
            else{
                return view('admin.post.edit',$data);
            }
    
    
    }
    public function PostUpdate(Request $request,$id){
            $this->validate($request,[
            'title'=>'required|max:250',
        'category'=>'required',
        'body'=>'required',
                 ]);
         $posts = new post;
         $posts->post_title = $request->input('title');
         $posts->user_id = Auth::user()->id;
         $posts->details = $request->input('body');
         $posts->category= $request->input('category');
         $data = array(
            'post_title' => $posts->post_title ,
            'category' => $posts->category ,
            'user_id' => $posts->user_id ,
            'details' => $posts->details ,
         );
         post::where('id', $id)
         ->update($data);
         $posts->update();
          return redirect(route('admin.post.list'));
    }
     public function PostDel($id){
     Post::where('id',$id)
            ->delete();
     return redirect(route('admin.post.list'));
    }



    public function Like($id){
        $loggedin_user = Auth::user()->id;
        $like_user = Like::where(['user_id' => $loggedin_user,'post_id' =>$id])->first();
        if(empty($like_user->user_id)){
            $user_id = Auth::user()->id;
            $post_id = $id;
            $like = new Like;
            $like->user_id = $user_id;
            $like->post_id = $id;
            $like->save();
            return Redirect::to('/bloghome');
        }else{
       return Redirect::to('/bloghome');
             }
        }
    public function Comment(Request $request,$id){

    $validator = Validator::make($request->all(), [
        'comment'=>'required|min:1',
    ]);
    
    if($validator->fails()){
     return back()->withErrors($validator)->withInput();
    }else{
     $comment = $request->comment;
     $post_id = $id;
     $user_id = Auth::user()->id;
    comment::create([
        "user_id" => $user_id,
        "post_id" => $post_id,
        "comment" => $comment,
    ]);
}
     return redirect(route('singlepost',$id));
    }
}
