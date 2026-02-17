<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FormationController;
use App\Http\Controllers\Backend\PricingController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\PushController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

// HomePage Route
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/project/list', [HomeController::class, 'ProjectList']);

Route::get('/project/{id}/detail', [HomeController::class, 'ProjectDetail']);

Route::get('/category/{id}/{slug}', [HomeController::class, 'ProjectCategory']);

//Contact Route
Route::prefix('contact')->group(function () {

    Route::get('/', function () {
        return view('frontend.pages.contact.contact');
    });

    Route::post('/add', [HomeController::class, 'ctrStoreContactMessage'])->name('add.contact.store');
});

//User Auth Route
Route::prefix('user')->name('user.')->group(function () {

    Route::get('/login', [UserController::class, 'UserLoginView'])->name('login');
    Route::post('/check', [UserController::class, 'check'])->name('check');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard/view/page', [UserController::class, 'UserViewAccount'])->name('view.account');
    });
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.home');
    })->name('dashboard');
});

// A propost Routes
Route::prefix('about')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [AboutController::class, 'AboutView'])->name('all.about');
        Route::post('/store', [AboutController::class, 'AboutStore'])->name('about.store');
        Route::get('/edit/{id}', [AboutController::class, 'AboutEdit'])->name('about.edit');
        Route::post('/update', [AboutController::class, 'AboutUpdate'])->name('about.update');
    });
});

Route::prefix('project')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [ProjectController::class, 'projectView'])->name('all.project');
        Route::get('/add', [ProjectController::class, 'projectAdd'])->name('add.project');
        Route::post('/store', [ProjectController::class, 'projectStore'])->name('project.store');
        Route::get('/edit/{id}', [ProjectController::class, 'projectEdit'])->name('project.edit');
        Route::post('/update', [ProjectController::class, 'ProjectUpdate'])->name('project.update');
    });
});

Route::prefix('skill')->name('skill.')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [SkillController::class, 'SkillView'])->name('list');
        Route::post('/store', [SkillController::class, 'SkillStore'])->name('store');
        Route::get('/edit/{id}', [SkillController::class, 'SkillEdit'])->name('edit');
        Route::post('/update', [SkillController::class, 'SkillUpdate'])->name('update');
        Route::delete('/delete/{id}', [SkillController::class, 'SkillDelete'])->name('delete');
    });
});

Route::prefix('formation')->name('formation.')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [FormationController::class, 'FormationView'])->name('list');
        Route::post('/store', [FormationController::class, 'FormationStore'])->name('store');
        Route::get('/edit/{id}', [FormationController::class, 'FormationEdit'])->name('edit');
        Route::post('/update', [FormationController::class, 'FormationUpdate'])->name('update');
        Route::delete('/delete/{id}', [FormationController::class, 'FormationDelete'])->name('delete');
    });
});
Route::prefix('service')->name('service.')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [ServiceController::class, 'ServiceView'])->name('list');
        Route::post('/store', [ServiceController::class, 'ServiceStore'])->name('store');
        Route::get('/edit/{id}', [ServiceController::class, 'ServiceEdit'])->name('edit');
        Route::post('/update', [ServiceController::class, 'ServiceUpdate'])->name('update');
        Route::delete('/delete/{id}', [ServiceController::class, 'ServiceDelete'])->name('delete');
    });
});
Route::prefix('pricing')->name('pricing.')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [PricingController::class, 'PricingView'])->name('list');
        Route::post('/store', [PricingController::class, 'PricingStore'])->name('store');
        Route::get('/edit/{id}', [PricingController::class, 'PricingEdit'])->name('edit');
        Route::post('/update', [PricingController::class, 'PricingUpdate'])->name('update');
        Route::delete('/delete/{id}', [PricingController::class, 'PricingDelete'])->name('delete');
    });
});
// Categories Routes
Route::prefix('category')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
        Route::get('/view', [CategoryController::class, 'ctrCategoryView'])->name('all.category');
        Route::post('/store', [CategoryController::class, 'ctrCategoryStore'])->name('category.store');
        Route::get('/edit/{id}/item', [CategoryController::class, 'ctrCategoryEdit'])->name('category.edit');
        Route::post('/update', [CategoryController::class, 'ctrCategoryUpdate'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'ctrCategoryDelete'])->name('category.delete');

        // SubCategories Routes
        Route::get('/sub/view', [SubCategoryController::class, 'ctrSubCategoryView'])->name('all.subcategory');
        Route::post('/sub/store', [SubCategoryController::class, 'ctrSubCategoryStore'])->name('subcategory.store');
        Route::get('/sub/edit/{id}', [SubCategoryController::class, 'ctrSubCategoryEdit'])->name('subcategory.edit');
        Route::post('/sub/update', [SubCategoryController::class, 'ctrSubCategoryUpdate'])->name('subcategory.update');
        Route::get('/sub/delete/{id}', [SubCategoryController::class, 'ctrSubCategoryDelete'])->name('subcategory.delete');
    });
});

// Notifications Routes
Route::prefix('notification')->group(function () {
    Route::get('/view', [PushController::class, 'AdminnotifView'])->name('notif.view');
    Route::post('/store', [PushController::class, 'AdminnotifStore'])->name('notif.store');
    Route::get('/delete/{id}', [PushController::class, 'AdminnotifDelete'])->name('notif.delete');
});

// CkEditor Upload Image Route
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\UniSharp\LaravelFilemanager\Lfm::routes()';
});
