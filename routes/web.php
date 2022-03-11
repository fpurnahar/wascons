<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|c
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/#contact', [WebController::class, 'index'])->name('home.contact');
Route::post('/download/catalog', [WebController::class, 'contactDownloadCatalog'])->name('catalog.download');
Route::get('/portfolio/detail/{id}', [WebController::class, 'getViewProject'])->name('portfolio.detail');
Route::get('/download/catalog', [WebController::class, 'getDownloadCatalog'])->name('download.catalog');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('information_company/list', [DashboardController::class, 'getInformationCompany'])->name('list.company.infmation');
        Route::get('information_company/edit/{id}', [DashboardController::class, 'editInformationCompany'])->name('edit.company.infmation');
        Route::patch('information_company/update/{id}', [DashboardController::class, 'updateInformationCompany'])->name('update.company.infmation');
    });
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('aboute/list', [DashboardController::class, 'indexAbout'])->name('list');
        Route::get('aboute/edit/{id}', [DashboardController::class, 'editAbout'])->name('edit');
        Route::patch('aboute/update/{id}', [DashboardController::class, 'updateAbout'])->name('update');
    });
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('layanan/list', [DashboardController::class, 'indexLayanan'])->name('list.layanan');
        Route::get('layanan/edit/{id}', [DashboardController::class, 'editLayanan'])->name('edit.layanan');
        Route::patch('layanan/update/{id}', [DashboardController::class, 'updateLayanan'])->name('update.layanan');
    });
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('services/list', [DashboardController::class, 'indexServices'])->name('list.services');
        Route::get('services/edit/{id}', [DashboardController::class, 'editServices'])->name('edit.services');
        Route::patch('services/update/{id}', [DashboardController::class, 'updateServices'])->name('update.services');
    });
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('portfolio/list', [DashboardController::class, 'indexPortfolio'])->name('list.portfolio');
        Route::get('portfolio/create', [DashboardController::class, 'createPortfolio'])->name('create.portfolio');
        Route::get('portfolio/edit/{id}', [DashboardController::class, 'editPortfolio'])->name('edit.portfolio');
        Route::post('portfolio/store', [DashboardController::class, 'storePortfolio'])->name('store.portfolio');
        Route::patch('portfolio/update/{id}', [DashboardController::class, 'updatePortfolio'])->name('update.portfolio');
        Route::delete('portfolio/destroy/{id}', [DashboardController::class, 'destroyPortfolio'])->name('destroy.portfolio');
    });
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('client-banner/list', [DashboardController::class, 'indexClientBanner'])->name('list.client.banner');
        Route::get('client-banner/create', [DashboardController::class, 'createClientBanner'])->name('create.client.banner');
        Route::get('client-banner/edit/{id}', [DashboardController::class, 'editClientBanner'])->name('edit.client.banner');
        Route::post('client-banner/store', [DashboardController::class, 'storeClientBanner'])->name('store.client.banner');
        Route::patch('client-banner/update/{id}', [DashboardController::class, 'updateClientBanner'])->name('update.client.banner');
        Route::delete('client-banner/destroy/{id}', [DashboardController::class, 'destroyClientBanner'])->name('destroy.client.banner');
    });
    Route::prefix('admin/dashboard')->group(function () {
        Route::get('list/user/catalog/list', [DashboardController::class, 'getUserDownloadCatalog'])->name('list.user.catalog');
    });
});
