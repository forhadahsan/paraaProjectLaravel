<?php

use App\Http\Controllers\Admin\CadseController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\PageLocatorController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\StoriesController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectDocumentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CarrierController;
use App\Http\Controllers\Admin\CreditController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageLocatorController::class, 'projects']);

Route::get('project-news/{slug}', [PageLocatorController::class, 'projectNewsDetails']);

Route::get('projects/{slug}', [PageLocatorController::class, 'projectDetails']);
Route::get('pages/stories/{slug}', [PageLocatorController::class, 'storyDetails']);

Route::get('pages/stories', [PageLocatorController::class, 'stories']);
Route::get('pages/cadses/{id?}', [PageLocatorController::class, 'cadses']);
Route::get('pages/careers', [PageLocatorController::class, 'careers']);
Route::get('pages/careers/{slug}', [PageLocatorController::class, 'careersDetails']);
Route::get('pages/teams', [PageLocatorController::class, 'teams']);
Route::get('pages/about-us', [PageLocatorController::class, 'aboutUs']);
Route::get('pages/shala', [PageLocatorController::class, 'shala']);


Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function(){
  Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

  //websites
  Route::resource('websites',WebsiteController::class);
  //Cadse
  Route::resource('cadses',CadseController::class);
  // team
  Route::resource('teams',TeamController::class);
  // stories
  Route::resource('stories',StoriesController::class);
  // projects
  Route::resource('projects',ProjectController::class);
  // projects_documents
  Route::resource('documents',ProjectDocumentController::class);

  // projects_documents
  Route::resource('news',NewsController::class);
  // gallerys pages
  Route::resource('galleries',GalleryController::class);
  // Career Pages
  Route::resource('carriers',CarrierController::class);
  // credits pages
  Route::resource('credits',CreditController::class);
  // projectid 
  Route::resource('projectcategory',ProjectCategoryController::class);

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
