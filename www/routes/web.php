<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\Admin\DashBoardController::class, 'lang']);

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home');
Route::get('/disclaimer', [\App\Http\Controllers\Frontend\HomeController::class, 'disclaimer'])->name('frontend.disclaimer');
Route::get('/privacy-policy', [\App\Http\Controllers\Frontend\HomeController::class, 'privacyPolicy'])->name('frontend.privacy.policy');

Route::get('/who-we-are/directors-desk', [\App\Http\Controllers\Frontend\WhoWeAreController::class, 'directorsDesk'])->name('frontend.who.we.are.directors.desk');
Route::get('/who-we-are/sea-advantage', [\App\Http\Controllers\Frontend\WhoWeAreController::class, 'seaAdvantage'])->name('frontend.who.we.are.sea.advantage');

Route::get('/result', [\App\Http\Controllers\Frontend\ResultController::class, 'index'])->name('frontend.result');

Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('frontend.contact');
Route::post('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'store'])->name('frontend.contact.store');

Route::get('/courses/seminars', [\App\Http\Controllers\Frontend\CoursesController::class, 'seminarsIndex'])->name('frontend.courses.seminars');
Route::get('/courses/crash-course', [\App\Http\Controllers\Frontend\CoursesController::class, 'crashCourseIndex'])->name('frontend.courses.crash.course');
Route::get('/courses/test-series', [\App\Http\Controllers\Frontend\CoursesController::class, 'testSeriesIndex'])->name('frontend.courses.test.series');
Route::get('/courses/professional-courses/chartered-accountancy-c-a', [\App\Http\Controllers\Frontend\CoursesController::class, 'charteredAccountancyIndex'])->name('frontend.courses.chartered.accountancy.c.a');
Route::get('/courses/professional-courses/company-secretary-c-s', [\App\Http\Controllers\Frontend\CoursesController::class, 'companySecretaryIndex'])->name('frontend.courses.company.secretary.c.s');
Route::get('/courses/professional-courses/m-com', [\App\Http\Controllers\Frontend\CoursesController::class, 'mComIndex'])->name('frontend.courses.m.com');
Route::get('/courses/graduate-courses/b-com', [\App\Http\Controllers\Frontend\CoursesController::class, 'bComIndex'])->name('frontend.courses.b.com');
Route::get('/courses/graduate-courses/b-m-s', [\App\Http\Controllers\Frontend\CoursesController::class, 'bMSIndex'])->name('frontend.courses.b.m.s');
Route::get('/courses/graduate-courses/b-a-f', [\App\Http\Controllers\Frontend\CoursesController::class, 'bAFIndex'])->name('frontend.courses.b.a.f');
Route::get('/courses/graduate-courses/b-b-i', [\App\Http\Controllers\Frontend\CoursesController::class, 'bBIIndex'])->name('frontend.courses.b.b.i');
Route::get('/courses/graduate-courses/b-f-m', [\App\Http\Controllers\Frontend\CoursesController::class, 'bFMIndex'])->name('frontend.courses.b.f.m');
Route::get('/courses/undergraduate-courses/f-y-j-c', [\App\Http\Controllers\Frontend\CoursesController::class, 'fYJCIndex'])->name('frontend.courses.f.y.j.c');
Route::get('/courses/undergraduate-courses/s-y-j-c', [\App\Http\Controllers\Frontend\CoursesController::class, 'sYJCIndex'])->name('frontend.courses.s.y.j.c');
Route::get('/courses/undergraduate-courses/isc-commerce', [\App\Http\Controllers\Frontend\CoursesController::class, 'iscCommerceIndex'])->name('frontend.courses.isc.commerce');

Route::get('/sea-connect/question-papers', [\App\Http\Controllers\Frontend\SEAConnectController::class, 'questionPapersIndex'])->name('frontend.sea.connect.question.papers');
Route::get('/sea-connect/solutions', [\App\Http\Controllers\Frontend\SEAConnectController::class, 'solutionsIndex'])->name('frontend.sea.connect.solutions');
Route::get('/sea-connect/assignments', [\App\Http\Controllers\Frontend\SEAConnectController::class, 'assignmentsIndex'])->name('frontend.sea.connect.assignments');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [App\Http\Controllers\Admin\DashBoardController::class, 'root'])->name('root');

    // User Profile Controller
    Route::resource('profiles', \App\Http\Controllers\Admin\UserProfileController::class);
    Route::get('/profile', [\App\Http\Controllers\Admin\UserProfileController::class, 'index'])->name('profile.index');
    Route::post('/change/password', [\App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('change.password');

    // User Controller Route
    Route::resource('usermanagements', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/usermanagement/status/{id}', [\App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('usermanagements.status');

    // Email Template Controller
    Route::resource('emailtemplates', \App\Http\Controllers\Admin\EmailTemplateController::class);
    Route::get('/email-template', [\App\Http\Controllers\Admin\EmailTemplateController::class, 'index'])->name('emailtemplate.index');

    // Role Controller
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\RoleController::class, 'changeStatus'])->name('role.status');

    // Assignment Controller
    Route::resource('assignments', \App\Http\Controllers\Admin\AssignmentController::class);

    // Solution Controller
    Route::resource('solutions', \App\Http\Controllers\Admin\SolutionController::class);

    // Contact Controller
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class);
});
