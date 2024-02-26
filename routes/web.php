<?php

use App\Http\Controllers\ExportPDF;
use App\Http\Controllers\TaskExportPDF;
use App\Http\Controllers\UserExportPDF;
use App\Livewire\Admin\Auth\ChangePassword;
use App\Livewire\Admin\Auth\Login;
use App\Livewire\User\Auth\Login as AuthLogin;
use App\Livewire\Admin\Category;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Task;
use App\Livewire\Admin\UpdateProfile;
use App\Livewire\Admin\User;

Route::get('/', AuthLogin::class)->name('user.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/tasks', Task::class)->name('users.tasks');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', AuthLogin::class)->name('users.login');
});

Route::middleware(['guest:admin'])->group(function () {
   Route::get('/admin', Login::class)->name('admin.login');
});

// Route::get('/admin',Login::class)->name('admin.login');

Route::middleware(['auth:admin'])->group(function () {
   Route::prefix('/admin')->group(function(){
      Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
      Route::get('/category', Category::class)->name('admin.category');
      Route::get('/task', Task::class)->name('admin.tasks');
      Route::get('/user',User::class)->name('admin.users');
      Route::get('/pdf', [ExportPDF::class, 'exportPDF'])->name('admin.exportPDF');
      
      Route::get('/task/pdf', [TaskExportPDF::class, 'exportPDF'])->name('admin.taskexportPDF');
      Route::get('/user/pdf', [UserExportPDF::class, 'exportPDF'])->name('admin.userexportPDF');
      Route::get('/change-password', ChangePassword::class)->name('admin.changePassword');
      Route::get('/update-profile', UpdateProfile::class)->name('admin.updateProfile');
   });
});


