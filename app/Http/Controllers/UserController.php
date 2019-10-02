<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use App\Subject;
use App\Media;
use App\Question;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
    //================= Subject ==============
    public function Subjects(){
       
        $data['subject'] = Subject::all();
         return view('admin.subject',$data);
     }
     public function Subject(Request $request){
         $name = $request->name;
         $validator = Validator::make($request->all(), [
             'name' => 'required|max:30'
         ]);
    
      if($validator->fails()){
          return redirect(route('admin.subjects.list'))
          ->withErrors($validator)
          ->withInput();
      }else{
          Subject::create([
              "subject_name" => $name,
          ]);
      }
      return redirect(route('admin.subjects.list'));
     }
     public function Subjectdel($id){
         Subject::where('id',$id)
         ->delete();
         return redirect(route('admin.subjects.list'));
     }

     //================= Question =======================


   public function Questions(){
    $user_id = Auth::user()->id;
    $data['questions'] = DB::table('questions')
    ->join('medias','questions.q_pic','=','medias.id')
    ->select('questions.*','medias.file_path')
    ->where(['questions.q_user_id'=>$user_id])
    ->get();
    return view('admin.question.list',$data);
    }
    public function Addquestion(){
    $data['subject'] = Subject::all();
    return view('admin.question.add',$data);

    }
     public function QuestionStore(Request $request){
    $validator = Validator::make($request->all(), [
        'title'=>'required|max:250',
        'subject'=>'required',
        'body'=>'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    if($validator->fails()){
     return back()->withErrors($validator)->withInput();
    }else{
        if ($files = $request->file('photo')) {
            $destinationPath = 'question/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
         }
        $url = $profileImage;
        Media::create([
            "file_path" => $url
        ]);
        $medias_id = DB::getPdo()->lastInsertId();
     $title = $request->title;
     $subject = $request->subject;
     $detail = $request->body;
     $image = $medias_id;
     $user_id = Auth::user()->id;
    question::create([
        "q_user_id" => $user_id,
        "q_title" => $title,
        "q_subject" => $subject,
        "q_body" => $detail,
        "q_pic" => $image,
    ]);
    }
    return Redirect::to('/questions');
    }
     public function Questionview($id){
     	$data['question'] = DB::table('questions')
        ->join('medias','medias.id','=','questions.q_pic')
        ->join('subjects','questions.q_subject','=','subjects.id')
        ->select('questions.*','subjects.subject_name','medias.file_path')
        ->where(['questions.id'=>$id])
        ->first();
      return view('admin.question.view',$data);

    }
    public function QuestionEdit($id){
        $loguer =Auth::user()->id;
    $data['question'] = DB::table('questions')
        ->join('medias','medias.id','=','questions.q_pic')
        ->join('subjects','questions.q_subject','=','subjects.id')
        ->select('questions.*','subjects.subject_name','medias.file_path')
        ->where(['questions.id'=>$id])
        ->first();
    $data['subject'] = Subject::all();
            if($data['question']->q_user_id !== $loguer){
                return back();
            }
            else{
                return view('admin.question.edit',$data);
            }
    
    
    }
    public function QuestionUpdate(Request $request,$id){
            $this->validate($request,[
            'title'=>'required|max:250',
        'subject'=>'required',
        'body'=>'required',
                 ]);
         $questions = new question;
         $questions->question_title = $request->input('title');
         $questions->user_id = Auth::user()->id;
         $questions->details = $request->input('body');
         $questions->subject= $request->input('subject');
         $data = array(
            'q_title' => $questions->question_title ,
            'q_subject' => $questions->subject ,
            'q_user_id' => $questions->user_id ,
            'q_body' => $questions->details ,
         );
         question::where('id', $id)
         ->update($data);
         $questions->update();
          return redirect(route('admin.question.list'));
    }
     public function QuestionDel($id){
     Question::where('id',$id)
            ->delete();
     return redirect(route('admin.question.list'));
    }

}
