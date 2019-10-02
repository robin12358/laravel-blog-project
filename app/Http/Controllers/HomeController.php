<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
use App\Question;
use App\Subject;
use Auth;
class HomeController extends Controller
{

    public function index()
    {

        $data['posts'] = DB::table('posts')
        ->join('profiles','posts.user_id','=','profiles.user_id')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('posts.*','profiles.profile_name','medias.file_path')
        ->get();
        $data['categories'] = Category::all();
        return view('frontend.home',$data);
    }
    public function singlepost($id){
        if(Auth::check()){
        $user_id =Auth::user()->id;
        $data['visitor'] = DB::table('profiles')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('profiles.profile_name','medias.file_path')
        ->where('Profiles.user_id','=',$user_id)
        ->first();
        }
       
        $data['post'] = DB::table('posts')
        ->join('profiles','posts.user_id','=','profiles.user_id')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('posts.*','profiles.profile_name','medias.file_path')
        ->where('posts.id','=',$id)
        ->first();
        $data['comments'] = DB::table('comments')
        ->join('profiles','comments.user_id','=','profiles.user_id')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('comments.comment','profiles.profile_name','medias.file_path')
        ->where('comments.post_id','=',$id)
        ->get();
      
        $data['categories'] = Category::all();
        return view('frontend.publicpostview',$data);
    
    }
    public function CategoryPost($id){
        $data['posts'] = DB::table('posts')
        ->join('profiles','posts.user_id','=','profiles.user_id')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('posts.*','profiles.profile_name','medias.file_path')
        ->where('posts.id','=',$id)
        ->get();
        $data['categories'] = Category::all();
   
        return view('frontend.searchresult',$data);
    }
    public function Question(){
        $data['questions']=Question::all();
        $data['subjects']=Subject::all();
         return view('frontend.questions',$data);
    }
    public function SingleQuestion($id){
         if(Auth::check()){
        $user_id = Auth::user()->id;
        $data['visitor'] = DB::table('profiles')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('profiles.profile_name','medias.file_path')
        ->where('Profiles.user_id','=',$user_id)
        ->first();
        }
        $data['question'] = DB::table('questions')
        ->join('medias','questions.q_pic','=','medias.id')
        ->select('questions.*','medias.file_path')
        ->where('questions.id','=',$id)
        ->first();
        $data['subjects']=Subject::all();
        return view('frontend.questionview',$data);
    }
}
