<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SelfieSubmissionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/login', [AuthController::class, 'login']);
Route::any('/test', [AuthController::class, 'test']);

Route::get('/', [Controller::class, 'home']);
Route::get('/selfie-contest', [Controller::class, 'selfieContest']);
Route::any('/selfie-contest/submit', [Controller::class, 'selfieContestSubmit']);

Route::any('/vote', [Controller::class, 'selfieContestVote']);
Route::any('/all-selfie-data', [Controller::class, 'selfieData']);

Route::get('/photo-contest', [Controller::class, 'photoContest']);
Route::post('/photo-contest/submit', [Controller::class, 'photoContestSubmit']);
Route::get('/campaign-over', [Controller::class, 'over']);


Route::any('/photo-upload', [Controller::class, 'photoUpload']);


Route::get('/migrate', function ($class) {

    try {
        // \Artisan::call('migrate');


    } catch (\Exception $exception) {
        return $exception->getMessage();
    }

    return "Migrate";
    dd('migrated!');
});


Route::any('/apply-submit', [Controller::class, 'applySubmit']);
Route::any('/success', [Controller::class, 'success']);
Route::any('/404', [Controller::class, 'error']);
Route::any('/contact', [Controller::class, 'contact']);
Route::get('/privacy-policy', [Controller::class, 'privacy']);


Route::get('/applicant/create', [ApplicantsController::class, 'create']);
Route::post('/applicant/store', [ApplicantsController::class, 'store']);
Route::get('/applicant/login', [ApplicantsController::class, 'login']);

Route::post('/applicant/login-do', [ApplicantsController::class, 'loginDo']);

Route::get('/applicant/forget-password', [ApplicantsController::class, 'forgetPassword']);
Route::post('/applicant/sent-password', [ApplicantsController::class, 'sentPassword']);

Route::group(['middleware' => 'applicant'], function () {

    Route::any('/apply', [Controller::class, 'apply']);
    Route::get('/applicant/application', [ApplicantsController::class, 'applicantApplication']);
    Route::get('/applicant/logout', [ApplicantsController::class, 'logout']);
});


Route::group(['prefix' => "admin"], function () {
    Route::redirect('/login', '/login');
    Route::post('/login-check', [AuthController::class, 'loginCheck']);
    Route::any('/me-login', [AuthController::class, 'meLogin']);
    Route::get('/password-recover', [AuthController::class, 'passwordRecover']);
    Route::post('/password-reset', [AuthController::class, 'passwordReset']);


});


Route::group(['prefix' => "admin", 'middleware' => ['admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    Route::get('/drawing', [AdminController::class, 'drawing']);
    Route::get('/drawing/status-update/{id}/{status}', [AdminController::class, 'drawingStatus']);


    //Manage Slider Start
    Route::get('/slider/create/{id}', [SliderController::class, 'create']);
    Route::post('/slider/store', [SliderController::class, 'store']);
    Route::any('/sliders', [SliderController::class, 'create']);
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit']);
    Route::post('/slider/update', [SliderController::class, 'update']);
    Route::get('/slider/delete/{id}', [SliderController::class, 'destroy']);
    //Manage Video End
    //  //Manage Video Start
    Route::get('/video/create/{id}', [VideoController::class, 'create']);
    Route::post('/video/store', [VideoController::class, 'store']);
    Route::any('/videos', [VideoController::class, 'create']);
    Route::get('/video/edit/{id}', [VideoController::class, 'edit']);
    Route::post('/video/update', [VideoController::class, 'update']);
    Route::get('/video/delete/{id}', [VideoController::class, 'destroy']);
    //Manage Video End


    //News
    Route::get('/news/create', [NewsController::class, 'create']);
    Route::post('/news/store', [NewsController::class, 'store']);
    Route::any('/news', [NewsController::class, 'show']);
    Route::get('/news/edit/{id}', [NewsController::class, 'edit']);
    Route::post('/news/update', [NewsController::class, 'update']);
    Route::get('/news/delete/{id}', [NewsController::class, 'destroy']);

    //News
    Route::get('/photo/create', [PhotoController::class, 'create']);
    Route::post('/photo/store', [PhotoController::class, 'store']);
    Route::any('/photos', [PhotoController::class, 'show']);
    Route::get('/photo/edit/{id}', [PhotoController::class, 'edit']);
    Route::post('/photo/update', [PhotoController::class, 'update']);
    Route::get('/photo/delete/{id}', [PhotoController::class, 'destroy']);

    Route::get('/settings', [AdminController::class, 'settings']);
    Route::post('/settings/update', [AdminController::class, 'settingUpdate']);
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::post('/profile/update', [AdminController::class, 'profileUpdate']);





    Route::get('/manage-photo', [SelfieSubmissionController::class, 'managePhoto']);
    Route::post('/manage-photo/store', [SelfieSubmissionController::class, 'managePhotoStore']);
    Route::any('/manage-photo/edit/{id}', [SelfieSubmissionController::class, 'managePhotoUpdate']);
    Route::post('/manage-photo/update', [SelfieSubmissionController::class, 'managePhotoUpdateStore']);

    Route::get('/manage-photo/status-update/{id}/{status}', [SelfieSubmissionController::class, 'managePhotoStatus']);


    Route::get('/selfie-submission', [SelfieSubmissionController::class, 'index']);
    Route::get('/selfie-submission/excel-download', [SelfieSubmissionController::class, 'excelDownload']);
    Route::get('/selfie-submission/details/{id}', [SelfieSubmissionController::class, 'selfieDetails']);
    Route::get('/photo-submission', [SelfieSubmissionController::class, 'photoSubmission']);
    Route::get('/photo-submission/status-update/{id}/{status}', [SelfieSubmissionController::class, 'photoSubmissionStatusUpdate']);

    Route::get('/selfie/status-update/{id}/{status}', [SelfieSubmissionController::class, 'statusUpdate']);

    Route::get('/logout', [AdminController::class, 'logout']);
});


Route::get('/migrate', function () {


    Artisan::call('migrate');
});
Route::get('/clear', function () {


    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});


Route::get('/testt', function () {

    notify()->success('Hi  welcome to codelapan');
    notify()->smiley('success', 'You are successfully reconnected');
    notify()->emotify('success', 'You are awesome, your data was successfully created');
    notify()->success('Welcome to Laravel Notify ⚡️') or notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');


    //notify()->success('Laravel Notify is awesome!');
    return view('test');
});

Route::get('/getData', [Controller::class, 'getData']);
Route::get('/districts/{id}', [Controller::class, 'getUpzila']);





