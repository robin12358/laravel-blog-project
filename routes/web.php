<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/bloghome','HomeController@index')->name('home.index');
Route::get('/categorypost/{id}','HomeController@CategoryPost')->name('home.category.post');
Route::get('/singlepost/{id}','HomeController@SinglePost')->name('singlepost');
Route::get('/questionlist','HomeController@Question')->name('home.questionlist');
Route::get('/singlequestion/{id}','HomeController@SingleQuestion')->name('singlequestion');

Auth::routes();

Route::get('/home', 'AdminController@Adminpanel')->name('admin');

   
Route::get('/posts','PostController@Posts')->name('admin.post.list');
Route::get('/addpost','PostController@Addpost')->name('admin.post.add');
Route::post('/postadd','PostController@PostStore')->name('admin.post.store');
Route::get('/postview/{id}','PostController@PostView')->name('admin.post.view');
Route::get('/postedit/{id}','PostController@PostEdit')->name('admin.post.edit');
Route::post('/postupdate/{id}','PostController@PostUpdate')->name('admin.post.update');
Route::get('/postdel/{id}','PostController@PostDel')->name('admin.post.delete');

Route::get('/postlike/{id}','PostController@Like')->name('post.like');
Route::post('/postcomment/{id}','PostController@Comment')->name('post.comment');


Route::get('/profileview','AdminController@ProfileView')->name('admin.profile.view');
Route::post('/profilecreate','AdminController@ProfileCreate')->name('admin.profile.create');
Route::get('/profileedit/{id}','AdminController@ProfileEdit')->name('admin.profile.edit');
Route::post('/profileupdate/{id}','AdminController@ProfileEdit')->name('admin.profile.update');

Route::get('/categories','PostController@Categories')->name('admin.categories.list');
Route::post('/category','PostController@Category')->name('admin.category.store');
Route::get('/categorydel/{id}','PostController@Categorydel')->name('admin.category.delete');

Route::get('/subjects','UserController@Subjects')->name('admin.subjects.list');
Route::post('/subject','UserController@Subject')->name('admin.subject.store');
Route::get('/subjectdel/{id}','UserController@Subjectdel')->name('admin.subject.delete');

Route::get('/questions','UserController@Questions')->name('admin.question.list');
Route::get('/addquestion','UserController@AddQuestion')->name('admin.question.add');
Route::post('/questionadd','UserController@QuestionStore')->name('admin.question.store');
Route::get('/questionview/{id}','UserController@QuestionView')->name('admin.question.view');
Route::get('/questionedit/{id}','UserController@QuestionEdit')->name('admin.question.edit');
Route::post('/questionupdate/{id}','UserController@QuestionUpdate')->name('admin.question.update');
Route::get('/questiondel/{id}','UserController@QuestionDel')->name('admin.question.delete');

