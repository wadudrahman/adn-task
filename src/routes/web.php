<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/registration', [AuthController::class, 'showRegistrationView'])->name('registration.get');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.post');
Route::get('/login', [AuthController::class, 'showLoginView'])->name('login.get');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboardView'])->name('dashboard');
    Route::get('/campaign', [CampaignController::class, 'showCreateCampaignView'])->name('campaign.create.get');
    Route::post('/campaign', [CampaignController::class, 'createCampaign'])->name('campaign.create.post');
    Route::get('/campaign/edit/{campaignId}', [CampaignController::class, 'showEditCampaign'])->name('campaign.edit.get');
    Route::post('/campaign/edit/{campaignId}', [CampaignController::class, 'editCampaign'])->name('campaign.edit.post');
    Route::delete('/campaign/delete/{campaignId}', [CampaignController::class, 'editCampaign'])->name('campaign.delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

