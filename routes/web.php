<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/auth-login',[AdminController::class,'login']);
Route::get('/auth-register',[AdminController::class,'register']);
Route::get('/charts',[AdminController::class,'charts']);
Route::get('/error-403',[AdminController::class,'error1']);
Route::get('/error-404',[AdminController::class,'error2']);
Route::get('/error-405',[AdminController::class,'error3']);
Route::get('/error-500',[AdminController::class,'error4']);
// Route::get('/form-basic',[AdminController::class,'form']);
Route::get('/form-wizard',[AdminController::class,'form_wizard']);
Route::get('/grid',[AdminController::class,'grid']);
Route::get('/fontawesome-icons',[AdminController::class,'icon_fontawesome']);
Route::get('/material-icons',[AdminController::class,'icon_material']);
Route::get('/',[AdminController::class,'index']);
Route::get('/index-page2',[AdminController::class,'index2']);
Route::get('/buttons',[AdminController::class,'pages_buttons']);
Route::get('/calendar',[AdminController::class,'pages_calendar']);
Route::get('/pages-chat',[AdminController::class,'pages_chat']);
Route::get('/pages-elements',[AdminController::class,'elements']);
Route::get('/pages-gallery',[AdminController::class,'gallery']);
Route::get('/pages-invoice',[AdminController::class,'invoice']);
Route::get('/tables',[AdminController::class,'pages_tables']);
Route::get('/widgets',[AdminController::class,'pages_widgets']);




Route::get('/class-form',[AdminController::class,'class_name']);
Route::post('/class-upload',[AdminController::class,'class_upload']);
Route::get('/class-show',[AdminController::class,'class_show']);
Route::get('/class-delete/{id}',[AdminController::class,'class_delete']);
Route::get('/class-update/{id}',[AdminController::class,'class_update']);
Route::post('/class-edit/{id}',[AdminController::class,'class_edit']);


Route::get('/section',[AdminController::class,'section']);
Route::post('/section-upload',[AdminController::class,'section_upload']);
Route::get('/section-delete/{id}',[AdminController::class,'section_delete']);
Route::get('/section-update/{id}',[AdminController::class,'section_update']);
Route::post('/section-edit/{id}',[AdminController::class,'section_edit']);


Route::get('/fee_category',[AdminController::class,'fee_category']);
Route::post('/fee_category-upload',[AdminController::class,'fee_category_upload']);
Route::get('/fee_category-delete/{id}',[AdminController::class,'fee_category_delete']);
Route::get('/fee_category-update/{id}',[AdminController::class,'fee_category_update']);
Route::post('/fee_category-edit/{id}',[AdminController::class,'fee_category_edit']);



Route::get('/fee_types',[AdminController::class,'fee_types']);
Route::post('/fee_types-upload',[AdminController::class,'fee_types_upload']);
Route::get('/fee_types-delete/{id}',[AdminController::class,'fee_types_delete']);
Route::get('/fee_types-update/{id}',[AdminController::class,'fee_types_update']);
Route::post('/fee_types-edit/{id}',[AdminController::class,'fee_types_edit']);



Route::get('/fee_master',[AdminController::class,'fee_master']);
Route::post('/fee_master-upload',[AdminController::class,'fee_master_upload']);
Route::get('/fee_master-delete/{id}',[AdminController::class,'fee_master_delete']);
Route::get('/fee_master-update/{id}',[AdminController::class,'fee_master_update']);
Route::post('/fee_master-edit/{id}',[AdminController::class,'fee_master_edit']);


Route::get('/admission_type',[AdminController::class,'admission_type']);
Route::post('/admission_type-upload',[AdminController::class,'admission_type_upload']);
Route::get('/admission_type-delete/{id}',[AdminController::class,'admission_type_delete']);
Route::get('/admission_type-update/{id}',[AdminController::class,'admission_type_update']);
Route::post('/admission_type-edit/{id}',[AdminController::class,'admission_type_edit']);


Route::get('/new_admission',[AdminController::class,'new_admission']);
Route::post('/new_admission-upload',[AdminController::class,'new_admission_upload']);
Route::get('/new_admission-delete/{id}',[AdminController::class,'new_admission_delete']);
Route::get('/new_admission-update/{id}',[AdminController::class,'new_admission_update']);
Route::post('/new_admission-edit/{id}',[AdminController::class,'new_admission_edit']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
