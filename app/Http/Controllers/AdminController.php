<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use App\Category; 
use App\Gender; 
use App\Profile; 
use App\Post;
use App\Media;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Adminpanel(){
       return view('admin.index');
   }
     public function ProfileView(){
        $user_id = Auth::user()->id;
        $isprofile =Profile::where('user_id',$user_id)->first();

       if( is_null($isprofile)){
       $data['genders'] = Gender::all();
       return view('admin.profile.profile',$data);
   }else{
      $data['profile'] = DB::table('profiles')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('profiles.*','medias.file_path')
        ->first();
        $data['genders'] = Gender::all();

       return view('admin.profile.profileview',$data);
   
   }
     	
   }
   public function ProfileEdit($id){
    $data['profile'] = DB::table('profiles')
        ->join('medias','profiles.profile_pic','=','medias.id')
        ->select('profiles.*','medias.file_path')
        ->where('profiles.id','=',$id)
        ->first();
        $data['genders'] = Gender::all();
       return view('admin.profile.profileedit',$data);
   }
   public function ProfileCreate(Request $request){

    $validator = Validator::make($request->all(), [
        'name'=>'required|max:250',
        'gender'=>'required',
        'designation'=>'required',
        'skill'=>'required',
        'speech'=>'required',
        'phone'=>'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
    if($validator->fails()){
     return back()->withErrors($validator)->withInput();
    }else{
        if ($files = $request->file('photo')) {
            $destinationPath = 'profile/'; // upload path
            $profileImage ='profile/'.date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
         }

        $url = $profileImage;
        Media::create([
            "file_path" => $url
        ]);
        $medias_id = DB::getPdo()->lastInsertId();
       


     $name = $request->name;
     $gender = $request->gender;
     $designation = $request->designation;
     $phone = $request->phone;
     $skill = $request->skill;
     $speech = $request->speech;
     $image = $medias_id;
     $user_id = Auth::user()->id;
    profile::create([
        "user_id" => $user_id,
        "profile_name" => $name,
        "gender" => $gender,
        "designation" => $designation,
        "phone" => $phone,
        "skills" => $skill,
        "speech" => $speech,
        "profile_pic" => $image,
    ]);
    
    }
    return Redirect::to('/home');
   }
}
