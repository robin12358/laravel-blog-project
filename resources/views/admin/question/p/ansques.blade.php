@extends('layouts.app')
<style type="text/css">
.avatars{ width:50px;
height: 50px;
  border-radius:100%;
           max-width:100px;}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if(session('response'))
                  <div class="alert alert-success">{{session('response')}}</div>
                  @endif
            <div class="card">
                <div class="card-header">Question View</div>

                <!-- Page Content -->
    <div class="container">

<div class="row">

@if(count($questions)>0)
               @foreach($questions->all() as $question)
               @endforeach
               @else
                <p>No Post Available !</p>
                @endif
  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    

    <!-- Author -->
    <div class="mx-1 my-2">
    <div class="media mb-4">
    <img src="{{$question->profile_pic}}" class="avatars mx-2" alt="">
           
      <div class="media-body">
        <h5 class="mt-0">{{$question->name}}</h5>
       <p></p>
       <hr/>
      </div>
    </div>
    </div>
   
    
    <hr>

    <!-- Date/Time -->
    <h1 class="mt-4">{{$question->q_title}}</h1>
    <hr>

    <!-- Preview Image -->
   <p class="card-text">{{($question->q_body) }}</p>

    <hr>

    <!-- Post Content -->
    
     <img class="card-img-top my-1 mx-1" src="{{$question->q_pic}}" style="width:20rem; height:20rem;" alt="Card image cap">
    <blockquote class="blockquote">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in
        <cite title="Source Title">Source Title</cite>
      </footer>
    </blockquote>
    <hr>
    
    <!-- Comments Form -->
    <div class="card my-4">
    @if(Auth::user())
    <h5 class="card-header">Leave Your Answer:</h5>
      <div class="card-body">
        <form method="POST" action="{{ url("/answer/{$question->id}")}}">
         {{csrf_field()}}
         <div class="form-group">
            <textarea id="a_body" name="a_body" class="form-control" rows="3" required autofocus></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    @else
    
      @endif
      
    </div>
     @if(count($answers)>0)
              @foreach($answers->all() as $answer)
               <div class="media mb-4">
               <img src="{{$answer->profile_pic}}" class="avatars mx-2" alt="">
           
      <div class="media-body">
        <h5 class="mt-0">{{$answer->name}}</h5>
       <p>{{$answer->a_body}}</p>
       <hr/>
      </div>
    </div>
               @endforeach
               @else
                <p>No Comment Available !</p>
                @endif
    <!-- Single Comment -->
    

   

  </div>

  <!-- Sidebar Widgets Column -->
 

</div>
<!-- /.row -->

</div>
<!-- /.container -->


            </div>
        </div>
    </div>
</div>
@endsection
