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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','UserController@index')->name('user.index');
Route::get('/notice/{id}','UserController@viewNotice')->name('user.viewNotice');
Route::get('/allview/{menuid}/{subid}','UserController@allView')->name('user.allView');
Route::get('/menu','UserController@menu');
// Route::get('/layouts','UserController@layouts');




// Admin Panel

Route::get('/admin/index','AdminController@index')->name('admin.index');
Route::get('/admin/noticelist','AdminController@noticeList')->name('admin.noticeList');
Route::get('/admin/noticeform','AdminController@noticeForm')->name('admin.noticeForm');
Route::post('/admin/noticeform','AdminController@addNotice')->name('admin.addNotice');
Route::get('/admin/file/download/{name}','AdminController@downFile')->name('admin.downFile');

Route::get('/admin/editnoticeform/{id}','AdminController@editNotice')->name('admin.editNotice');
Route::post('/admin/editnoticeform/{id}','AdminController@updateNotice')->name('admin.updateNotice');

Route::get('/admin/deleteNotice','AdminController@noticeDelete')->name('admin.noticeDelete');

Route::get('/admin/allpost','AdminController@allPost')->name('admin.allPost');
Route::post('/admin/allpost','AdminController@postSave')->name('admin.postSave');
