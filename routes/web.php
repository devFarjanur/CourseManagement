<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// Admin group middleware

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/Profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/Profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');



    // admin course

    Route::get('/admin/course', [AdminController::class, 'AdminCourse'])->name('admin.course');
    Route::get('/admin/course/addcourse', [AdminController::class, 'AdminAddCourse'])->name('admin.add.course');
    Route::post('/admin/course/store', [AdminController::class,'AdminCourseStore'])->name('admin.course.store');
    Route::get('/admin/course/show', [AdminController::class,'AdminCourseShow'])->name('admin.course.show');

    // admin instructor

    Route::get('/admin/instructor', [AdminController::class, 'AdminInstructor'])->name('admin.instructor');
    Route::get('/admin/instructor/addinstructor', [AdminController::class, 'AdminAddInstructor'])->name('admin.add.instructor');
    Route::post('/admin/instructor/store', [AdminController::class, 'AdminInstructorStore'])->name('admin.instructor.store');
    Route::get('/admin/instructor/show', [AdminController::class, 'AdminInstructorStore'])->name('admin.instructor.show');



});  // End Admin group middleware


// user group middleware

Route::middleware(['auth', 'role:user'])->group(function () {


    Route::get('/course', [UserController::class, 'LayoutsCourse'])->name('layouts.course');
    

});  // End user group middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
