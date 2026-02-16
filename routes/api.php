<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\FormationController;
use App\Http\Controllers\Api\PricingController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SkillController;
use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('about')->group(function () {
    Route::get('/list', [AboutController::class, 'AboutList']);
    Route::post('/store', [AboutController::class, 'AboutStore']);
    Route::get('/edit/{id}', [AboutController::class, 'AboutEdit']);
    Route::put('/update/{id}', [AboutController::class, 'AboutUpdate']);
    Route::delete('/delete/{id}', [AboutController::class, 'AboutDelete']);
});

Route::prefix('contact')->group(function () {
    Route::get('/list', [ContactController::class, 'ContactList']);
    Route::post('/store', [ContactController::class, 'ContactStore']);
    Route::get('/edit/{id}', [ContactController::class, 'ContactEdit']);
    Route::put('/update/{id}', [ContactController::class, 'ContactUpdate']);
    Route::delete('/delete/{id}', [ContactController::class, 'ContactDelete']);
});

Route::prefix('service')->group(function () {
    Route::get('/list', [ServiceController::class, 'ServiceList']);
    Route::post('/store', [ServiceController::class, 'ServiceStore']);
    Route::get('/detail/{id}', [ServiceController::class, 'ServiceDetail']);
    Route::get('/edit/{id}', [ServiceController::class, 'ServiceEdit']);
    Route::put('/update/{id}', [ServiceController::class, 'ServiceUpdate']);
    Route::delete('/delete/{id}', [ServiceController::class, 'ServiceDelete']);
});
Route::prefix('pricing')->group(function () {
    Route::get('/list', [PricingController::class, 'PricingList']);
    Route::post('/store', [PricingController::class, 'PricingStore']);
    Route::get('/category/{id}', [PricingController::class, 'PricingCategory']);
    Route::get('/edit/{id}', [PricingController::class, 'PricingEdit']);
    Route::put('/update/{id}', [PricingController::class, 'PricingUpdate']);
    Route::delete('/delete/{id}', [PricingController::class, 'PricingDelete']);
});

Route::prefix('skill')->group(function () {
    Route::get('/list', [SkillController::class, 'SkillList']);
    Route::post('/store', [SkillController::class, 'SkillStore']);
    Route::get('/edit/{id}', [SkillController::class, 'SkillEdit']);
    Route::put('/update/{id}', [SkillController::class, 'SkillUpdate']);
    Route::delete('/delete/{id}', [SkillController::class, 'SkillDelete']);
});

Route::prefix('formation')->group(function () {
    Route::get('/list', [FormationController::class, 'FormationList']);
    Route::post('/store', [FormationController::class, 'FormationStore']);
    Route::get('/edit/{id}', [FormationController::class, 'FormationEdit']);
    Route::put('/update/{id}', [FormationController::class, 'FormationUpdate']);
    Route::delete('/delete/{id}', [FormationController::class, 'FormationDelete']);
});

Route::prefix('category')->group(function () {
    Route::get('/list', [CategoryController::class, 'CategoryList']);
    Route::post('/store', [CategoryController::class, 'CategoryStore']);
    Route::get('/detail/{id}', [CategoryController::class, 'CategoryDetail']);
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit']);
    Route::put('/update/{id}', [CategoryController::class, 'CategoryUpdate']);
    Route::delete('/delete/{id}', [CategoryController::class, 'CategoryDelete']);
});

Route::prefix('project')->group(function () {
    Route::get('/list', [ProjectController::class, 'ProjectList']);
    Route::get('/detail/{id}', [ProjectController::class, 'ProjectDetail']);
    Route::get('/category/{id}', [ProjectController::class, 'ProjectCategory']);
    Route::post('/store', [ProjectController::class, 'ProjectStore']);
    Route::get('/edit/{id}', [ProjectController::class, 'ProjectEdit']);
    Route::put('/update/{id}', [ProjectController::class, 'ProjectUpdate']);
    Route::delete('/delete/{id}', [ProjectController::class, 'ProjectDelete']);
});

Route::post("/push-subscribes", function(Request $request) {
    
  $user_id=null; 
  PushSubscription::create([
       'user_id' => $user_id,
       'data'=> $request->getContent(),
    ]); 
    return response()->json(['success'=> 'Inscription reussie']);  
});
