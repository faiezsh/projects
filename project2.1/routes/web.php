<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', 'UsersController');
Route::resource('certificates', 'CertificatesController');
Route::resource('tests', 'TestsController');
Route::resource('keywords', 'KeywordsController');
Route::resource('test_answers', 'Test_answersController');
Route::resource('test_choises', 'Test_choisesController');
Route::resource('certificate_word', 'Certificate_wordController');
Route::resource('courses', 'CoursesController');
Route::resource('course_word', 'Course_wordController');
Route::resource('contents', 'ContentsController');
Route::resource('exercises', 'ExercisesController');
Route::resource('exercises_answer', 'Exercises_answerController');
Route::resource('exercises_choice', 'Exercises_choiceController');
Route::resource('view', 'ViewController');
Route::resource('chat', 'ChatController');
Route::resource('chat_obj', 'Chat_objController');
Route::resource('global_chat', 'Global_chatController');
Route::resource('global_chat_catagory', 'Global_chat_catagoryController');
Route::resource('comments', 'CommentsController');
Route::resource('comment_category', 'Comment_categoryController');
Route::resource('reports', 'ReportsController');
