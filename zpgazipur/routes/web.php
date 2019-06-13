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
Route::get('/viewallnotice','UserController@viewAllNotice')->name('user.viewAllNotice');
Route::get('/notice/{id}','UserController@viewNotice')->name('user.viewNotice');
Route::get('/allview/{menuid}/{subid}','UserController@allView')->name('user.allView');
Route::get('/allcategoryview/{id}','UserController@allCategoryView')->name('user.allCategoryView');
Route::get('/designation/{id}','UserController@designationView')->name('user.designationView');
Route::get('/menu','UserController@menu');
Route::get('/student/admission','UserController@studentForm')->name('user.studentForm');
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

Route::get('/admin/postlist','AdminController@allPostList')->name('admin.allPostList');
Route::get('/admin/postedit/{id}','AdminController@postEdit')->name('admin.postEdit');
Route::post('/admin/postedit/{id}','AdminController@postUpdate')->name('admin.postUpdate');
Route::get('/admin/postdelete','AdminController@postDelete')->name('admin.postDelete');

Route::get('/admin/allpost','AdminController@allPostAdd')->name('admin.allPostAdd');
Route::post('/admin/allpost','AdminController@postSave')->name('admin.postSave');

Route::get('/admin/imageslider','AdminController@imageForm')->name('admin.imageForm');
Route::post('/admin/imageslider','AdminController@imageStore')->name('admin.imageStore');

Route::get('/admin/add-designation','AdminController@addDesignation')->name('admin.addDesignation');
Route::post('/admin/add-designation','AdminController@storeDesignation')->name('admin.storeDesignation');
Route::get('/admin/viewdesignation','AdminController@viewDesignation')->name('admin.viewDesignation');

Route::get('/admin/editdesignation/{id}','AdminController@editDesignation')->name('admin.editDesignation');
Route::post('/admin/editdesignation/{id}','AdminController@updateDesignation')->name('admin.updateDesignation');

Route::get('/admin/addcategory','AdminController@addCategory')->name('admin.addCategory');
Route::post('/admin/addcategory','AdminController@storeCategory')->name('admin.storeCategory');

Route::get('/admin/otherpages','AdminController@otherPageCategory')->name('admin.otherPageCategory');
Route::post('/admin/otherpages','AdminController@storeOtherPageCategory')->name('admin.storeOtherPageCategory');

Route::get('/admin/menucategory','AdminController@navMenu')->name('admin.navMenu');
Route::post('/admin/menucategory','AdminController@storeNavMenu')->name('admin.storeNavMenu');

Route::get('/admin/menusubcategory','AdminController@navSubMenu')->name('admin.navSubMenu');
Route::post('/admin/menusubcategory','AdminController@StorenavSubMenu')->name('admin.StorenavSubMenu');

Route::get('/admin/courselist','AdminController@courselist')->name('admin.courselist');

Route::get('/admin/courseadd','AdminController@courseAdd')->name('admin.courseAdd');
Route::post('/admin/courseadd','AdminController@storeCourseAdd')->name('admin.storeCourseAdd');

Route::get('/admin/courseedit/{id}','AdminController@courseEdit')->name('admin.courseEdit');
Route::post('/admin/courseedit/{id}','AdminController@courseUpdate')->name('admin.courseUpdate');

Route::get('/admin/courseDelete','AdminController@courseDelete')->name('admin.courseDelete');