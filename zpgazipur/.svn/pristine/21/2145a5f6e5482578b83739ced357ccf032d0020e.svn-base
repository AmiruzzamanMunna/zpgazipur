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
Route::get('/student/precourse','UserController@preCourse')->name('user.preCourse');
Route::get('/student/admission','UserController@studentForm')->name('user.studentForm');
Route::post('/student/admission','UserController@studentFormSave')->name('user.studentFormSave');
Route::get('/student/waiver','UserController@studentWaiverForm')->name('user.studentWaiverForm');
Route::post('/student/waiver','UserController@studentWaiverFormSave')->name('user.studentWaiverFormSave');
Route::get('/search/result','UserController@searchResult')->name('user.searchResult');
Route::get('/student/approved/{name}','UserController@approvedStudent')->name('user.approvedStudent');
Route::get('/gallary','UserController@gallary')->name('user.gallary');
Route::get('/address/{id}','UserController@address')->name('user.address');
Route::get('/pdfview/{id}','UserController@pdfview')->name('user.pdfview');

Route::get('/file/download/{name}','AdminController@downFile')->name('admin.downFile');
// Route::get('/layouts','UserController@layouts');




// Admin Panel

Route::get('/admin/login','LoginController@loginPage')->name('login.loginPage');
Route::post('/admin/login','LoginController@loginCheck')->name('login.loginCheck');

Route::group(['middleware'=>['adminSess']],function(){
	Route::get('/admin/logout','LoginController@logout')->name('login.logout');

	Route::get('/admin/adminlist','AdminController@adminList')->name('admin.adminList');
	Route::get('/admin/add/admin','AdminController@addAdmin')->name('admin.addAdmin');
	Route::post('/admin/add/admin','AdminController@adminStore')->name('admin.adminStore');

	Route::get('/admin/edit/{id}','AdminController@editAdmin')->name('admin.editAdmin');
	Route::post('/admin/edit/{id}','AdminController@adminUpdate')->name('admin.adminUpdate');

	Route::get('/admin','AdminController@index')->name('admin.index');
	Route::get('/admin/noticelist','AdminController@noticeList')->name('admin.noticeList');
	Route::get('/admin/noticeform','AdminController@noticeForm')->name('admin.noticeForm');
	Route::post('/admin/noticeform','AdminController@addNotice')->name('admin.addNotice');

	Route::get('/admin/editnoticeform/{id}','AdminController@editNotice')->name('admin.editNotice');
	Route::post('/admin/editnoticeform/{id}','AdminController@updateNotice')->name('admin.updateNotice');

	Route::get('/admin/deleteNotice','AdminController@noticeDelete')->name('admin.noticeDelete');

	Route::get('/admin/postlist','AdminController@allPostList')->name('admin.allPostList');
	Route::get('/admin/postedit/{id}','AdminController@postEdit')->name('admin.postEdit');
	Route::post('/admin/postedit/{id}','AdminController@postUpdate')->name('admin.postUpdate');
	Route::get('/admin/postdelete','AdminController@postDelete')->name('admin.postDelete');

	Route::get('/admin/allpost','AdminController@allPostAdd')->name('admin.allPostAdd');
	Route::post('/admin/allpost','AdminController@postSave')->name('admin.postSave');

	Route::get('/admin/imagelist','AdminController@imageList')->name('admin.imageList');
	Route::get('/admin/imageslider','AdminController@imageForm')->name('admin.imageForm');
	Route::post('/admin/imageslider','AdminController@imageStore')->name('admin.imageStore');
	Route::get('/admin/imagedelete','AdminController@imageDelete')->name('admin.imageDelete');

	Route::get('/admin/gallary','AdminController@gallaryImage')->name('admin.gallaryImage');
	Route::get('/admin/addgallary','AdminController@addgallary')->name('admin.addgallary');
	Route::post('/admin/addgallary','AdminController@addGallarySave')->name('admin.addGallarySave');
	Route::get('/admin/gallary/delete','AdminController@gallaryImageDelete')->name('admin.gallaryImageDelete');

	Route::get('/admin/add-designation','AdminController@addDesignation')->name('admin.addDesignation');
	Route::post('/admin/add-designation','AdminController@storeDesignation')->name('admin.storeDesignation');
	Route::get('/admin/viewdesignation','AdminController@viewDesignation')->name('admin.viewDesignation');

	Route::get('/admin/editdesignation/{id}','AdminController@editDesignation')->name('admin.editDesignation');
	Route::post('/admin/editdesignation/{id}','AdminController@updateDesignation')->name('admin.updateDesignation');

	Route::get('/admin/addcategory','AdminController@addCategory')->name('admin.addCategory');
	Route::post('/admin/addcategory','AdminController@storeCategory')->name('admin.storeCategory');

	Route::get('/admin/otherpagelist','AdminController@otherPageList')->name('admin.otherPageList');
	Route::get('/admin/otherpages','AdminController@otherPageCategory')->name('admin.otherPageCategory');
	Route::post('/admin/otherpages','AdminController@storeOtherPageCategory')->name('admin.storeOtherPageCategory');
	Route::get('/admin/otherpageedit/{id}','AdminController@editOtherPage')->name('admin.editOtherPage');
	Route::post('/admin/otherpageedit/{id}','AdminController@editOtherPageUpdate')->name('admin.editOtherPageUpdate');
	Route::get('/admin/otherpagedelete','AdminController@otherPageDelete')->name('admin.otherPageDelete');

	Route::get('/admin/menucategory','AdminController@navMenu')->name('admin.navMenu');
	Route::post('/admin/menucategory','AdminController@storeNavMenu')->name('admin.storeNavMenu');

	Route::get('/admin/menusubcategory','AdminController@navSubMenu')->name('admin.navSubMenu');
	Route::post('/admin/menusubcategory','AdminController@StorenavSubMenu')->name('admin.StorenavSubMenu');

	Route::get('/admin/courselist','AdminController@courselist')->name('admin.courselist');
	Route::get('/admin/coursefilter','AdminController@courseFilter')->name('admin.courseFilter');

	Route::get('/admin/courseadd','AdminController@courseAdd')->name('admin.courseAdd');
	Route::post('/admin/courseadd','AdminController@storeCourseAdd')->name('admin.storeCourseAdd');

	Route::get('/admin/courseedit/{id}','AdminController@courseEdit')->name('admin.courseEdit');
	Route::post('/admin/courseedit/{id}','AdminController@courseUpdate')->name('admin.courseUpdate');

	Route::delete('/admin/courseDelete','AdminController@courseDelete')->name('admin.courseDelete');

	Route::get('/admin/studentcourselist','AdminController@studentCourseList')->name('admin.studentCourseList');
	Route::get('/admin/student/approved','AdminController@approved')->name('admin.approved');
	Route::get('/admin/student/pending','AdminController@pending')->name('admin.pending');
	Route::get('/admin/student/cancel','AdminController@cancel')->name('admin.cancel');

	Route::get('/admin/studentcourseview/{id}','AdminController@studentCourseView')->name('admin.studentCourseView');
	Route::post('/admin/studentcourseview/{id}','AdminController@studentCourseViewUpdate')->name('admin.studentCourseViewUpdate');

	Route::get('/admin/filter','AdminController@filter')->name('admin.filter');
	Route::get('/admin/courseFiter','AdminController@courseFiter')->name('admin.courseFiter');
	Route::get('/admin/studentNameFilter','AdminController@studentNameFilter')->name('admin.studentNameFilter');

	Route::get('/admin/sessionlist','AdminController@sessionList')->name('admin.sessionList');
	Route::get('/admin/sessionadd','AdminController@sessionAdd')->name('admin.sessionAdd');
	Route::post('/admin/sessionadd','AdminController@sessionStore')->name('admin.sessionStore');
	Route::get('/admin/sessionedit/{id}','AdminController@sessionEdit')->name('admin.sessionEdit');
	Route::post('/admin/sessionedit/{id}','AdminController@sessionUpdate')->name('admin.sessionUpdate');

	Route::get('/admin/statusdelivered/{id}','StatusController@statusApproved')->name('admin.statusApproved');
	Route::get('/admin/statusdeclined/{id}','StatusController@statusDeclined')->name('admin.statusDeclined');

	Route::get('/admin/stufflist','StuffContoller@stuffList')->name('stuff.stuffList');
	Route::get('/admin/addstuff','StuffContoller@addStuff')->name('stuff.addStuff');
	Route::post('/admin/addstuff','StuffContoller@addStuffStore')->name('stuff.addStuffStore');
	Route::get('/admin/stuffedit/{id}','StuffContoller@editStuff')->name('stuff.editStuff');
	Route::post('/admin/stuffedit/{id}','StuffContoller@updateStuff')->name('stuff.updateStuff');
	Route::get('/admin/random','StuffContoller@random');

	Route::get('/admin/applicationList','ApplicationController@applicationList')->name('application.applicationList');
	Route::get('/admin/addapplication','ApplicationController@addApplication')->name('application.addApplication');
	Route::post('/admin/addapplication','ApplicationController@applicationStore')->name('application.applicationStore');

	Route::get('/admin/application/delete','ApplicationController@deleteApplication')->name('application.deleteApplication');
	Route::get('/admin/applicationdetails/{id}','ApplicationController@applicationDetails')->name('application.applicationDetails');
	Route::post('/admin/send/','ApplicationController@testSend')->name('application.testSend');

	Route::get('/admin/statusdelivered/{id}','StatusController@statusApproved')->name('admin.statusApproved');
	Route::get('/admin/statusdeclined/{id}','StatusController@statusDeclined')->name('admin.statusDeclined');

	Route::get('/admin/stufflist','StuffContoller@stuffList')->name('stuff.stuffList');
	Route::get('/admin/addstuff','StuffContoller@addStuff')->name('stuff.addStuff');
	Route::post('/admin/addstuff','StuffContoller@addStuffStore')->name('stuff.addStuffStore');
	Route::get('/admin/random','StuffContoller@random');

	Route::get('/admin/applicationList','ApplicationController@applicationList')->name('application.applicationList');
	Route::get('/admin/addapplication','ApplicationController@addApplication')->name('application.addApplication');
	Route::post('/admin/addapplication','ApplicationController@applicationStore')->name('application.applicationStore');

	Route::get('/admin/application/delete','ApplicationController@deleteApplication')->name('application.deleteApplication');
	Route::get('/admin/applicationdetails/{id}','ApplicationController@applicationDetails')->name('application.applicationDetails');
	Route::post('/admin/filesend','ApplicationController@fileSend')->name('application.fileSend');
});




