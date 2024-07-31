<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\Comment_categoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\Global_chatController;
use App\Http\Controllers\KeywordsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['midlleware' => ['auth:sanctum']], function () {

    ######  API User ######
    Route::controller(UsersController::class)->group(function () {
        Route::post('/forgetpassword', 'forgetpassword');
        Route::post('/changepassword', 'changepassword');
        Route::post('/changename', 'changename');
        Route::get('/profile/{id}', 'profileshow');
    });
    ######## Certificates  #########
    Route::controller(CertificatesController::class)->group(function (){
        Route::post('/addcertificate', 'addcertificate');
        Route::get('/viewcertificate', 'view_certificates');

    });
    ########   API CATEGORY  ##########
    Route::controller(CategoryController::class)->group(function (){
        Route::get('/category/getall', 'getall');
        Route::post('/add','add');
    });

    ######   API comments   ######
    Route::controller(CommentsController::class)->group(function (){
        Route::post('/add_comment', 'add_comment');
        Route::get('/view_comment', 'view_comment');
    });
    #####    API Certifcate  #####
    Route::controller(CertificatesController::class)->group(function (){         Route::post('view_certificates','view_certificates');
        Route::post('addcertificate','addcertificate');
    });
    #####  API Keyword  ####
    Route::controller(KeywordsController::class)->group(function (){
        Route::post('/getbycategory', 'getbycategory');
        Route::post('/searchbyword','searchbyword');
        Route::post('searchfortest','searchfortest');
    });
    #####   API Courses #####
    Route::controller(CoursesController::class)->group(function ()
    {
        Route::post('/course/add','addcourse');
        Route::post('/course/get','getcourse');
        Route::post('/course/byid', 'coursebyid');
        Route::post('/get_course', 'get_course');
    });
    #####  API Content ####
    Route::controller(ContentsController::class)->group(function (){
        Route::post('/addcontent','add');
        Route::get('/download/{filename}','dawonlouds');
        Route::post('/get_contant','get_contant');
    });

    ##### API Report #####
    Route::controller(ReportsController::class)->group(function (){

        Route::post('/add_report', 'add_report');
        Route::get('/view_report', 'view_report');
        Route::post('/deleat_user', 'deleat_user');
    });
    Route::controller(Global_chatController::class)->group(function ()
    {
        Route::get('/view_chat_globel', 'view_chat_globel');
        Route::post('/add_chat', 'add_chat');
        Route::get('/view_chat_report', 'view_chat_report');
    });
    ######  API Exercises  #######
    Route::controller(ExercisesController::class)->group(function (){
        Route::post('/add_Exercises', 'add_Exercises');
    });
    ###### API question  ######
    Route::controller(TestsController::class)->group(function ()
    {
        Route::get('/question', 'question');
    });
    ###### API Viwe  #######
    Route::controller(ViewController::class)->group(function()
    {
        Route::post('/view', 'view');
    });
    ######  API View Coment Category  ######
    Route::controller(Comment_categoryController::class)->group(function()
    {
        Route::get('/view_comment', 'dawonlouds');
    });
});
########  API Login and Regester  #########
Route::post('/login', 'App\Http\Controllers\UsersController@login');
Route::post('/register', 'App\Http\Controllers\UsersController@register');;
