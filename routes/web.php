<?php

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
});

Auth::routes();
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Doctor
Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'doctor'])->name('adddoctor');
Route::post('/savedoctor', [App\Http\Controllers\DoctorController::class, 'save_doctor'])->name('save_doctor');
Route::get('/deletedoctor/{id}', [App\Http\Controllers\DoctorController::class, 'delete_doctor'])->name('deleteDoctor');
Route::post('/update_doctor/{id}', [App\Http\Controllers\DoctorController::class, 'update_doctor'])->name('update_doctor');
// Patient
Route::get('/patient', [App\Http\Controllers\PatientController::class, 'patientlist'])->name('patient');

// Symptoms
Route::get('/symptom', [App\Http\Controllers\SymptomController::class, 'symptoms'])->name('addsymptoms');
Route::post('/save', [App\Http\Controllers\SymptomController::class, 'save_symptoms'])->name('save_symptoms');
Route::post('/update_symptom/{id}', [App\Http\Controllers\SymptomController::class, 'update_symptom'])->name('update_symptom');
Route::get('/deletesymptom/{id}', [App\Http\Controllers\SymptomController::class, 'delete_symptom'])->name('deleteSymptom');

// Prediction
Route::group(['prefix' => 'prediction'], function () {
    Route::get('/', [App\Http\Controllers\PredictionController::class, 'symptomprediction'])->name('prediction');
    Route::post('/fetch-predicted-diseases', [App\Http\Controllers\PredictionController::class, 'predictedDiseases'])->name('fetch-predicted-diseases');
});
// Disease
Route::group(['prefix' => 'disease'], function () {
    Route::get('/', [App\Http\Controllers\PredictionController::class, 'disease_index'])->name('disease_home');
    Route::post('/save', [App\Http\Controllers\PredictionController::class, 'save_disease'])->name('save_Disease');
    Route::post('/delete', [App\Http\Controllers\PredictionController::class, 'delete_disease'])->name('delete_disease');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/change-password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [App\Http\Controllers\UserController::class, 'changePasswordSave'])->name('postChangePassword');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
