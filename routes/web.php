<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController; 
use App\Http\Controllers\DanceController;

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

/* Home Page */
Route::get('/', function () {
    return view('index');
});

/* Events & Galleries Menu - Dance Group Page */
Route::get('dance-studios-chennai', function () {
    return view('dance-studios-chennai');
});
Route::get('dance-schools-chennai', function () {
    return view('dance-schools-chennai');
});
Route::get('dance-classes-chennai', function () {
    return view('dance-classes-chennai');
});

/* Courses Menu - Dance Group Pages */
Route::get('dance-academy-chennai', function () {
    return view('dance-academy-chennai');
});
Route::get('dance-classes-for-kids', function () {
    return view('dance-classes-for-kids');
});
Route::get('dance-classes-for-adults', function () {
    return view('dance-classes-for-adults');
});
Route::get('dance-schools', function () {
    return view('dance-schools');
});
Route::get('dance-academy', function () {
    return view('dance-academy');
});
Route::get('dance-classes', function () {
    return view('dance-classes');
});

/* Other - Dance Group Pages */
Route::get('faculties-training-academy', function () {
    return view('faculties-training-academy');
});
Route::get('dance-academy-in-chennai', function () {
    return view('dance-academy-in-chennai');
});
Route::get('dance-classes-for-kids-in-chennai', function () {
    return view('dance-classes-for-kids-in-chennai');
});
Route::get('dance-classes-for-adults-in-chennai', function () {
    return view('dance-classes-for-adults-in-chennai');
});

Route::get('dance-classes-in-chennai', function () {
    return view('dance-classes-in-chennai');
});
Route::get('dance-schools-in-chennai', function () {
    return view('dance-schools-in-chennai');
});
Route::get('dance-studios-in-chennai', function () {
    return view('dance-studios-in-chennai');
});

Route::get('events-ticket-booking', function () {
    return view('events-ticket-booking');
});

/* Studio Pages */
Route::get('studios-kilpauk', function () {
    return view('studios-kilpauk');
});
Route::get('studios-mylapore', function () {
    return view('studios-mylapore');
});
Route::get('studios-velachery', function () {
    return view('studios-velachery');
});
Route::get('studios-cuddalore', function () {
    return view('studios-cuddalore');
});
Route::get('studios-tambaram', function () {
    return view('studios-tambaram');
});
Route::get('studios-mogappair', function () {
    return view('studios-mogappair');
});
Route::get('studios-thoraipakkam', function () {
    return view('studios-thoraipakkam');
});
Route::get('studios-avadi', function () {
    return view('studios-avadi');
});
Route::get('studios-keelkattalai', function () {
    return view('studios-keelkattalai');
});
Route::get('studios-mugalivakkam', function () {
    return view('studios-mugalivakkam');
});
Route::get('studios-neelankarai', function () {
    return view('studios-neelankarai');
});
Route::get('studios-kolathur', function () {
    return view('studios-kolathur');
});
Route::get('studios-pallikaranai', function () {
    return view('studios-pallikaranai');
});
Route::get('studios-sholinganallur', function () {
    return view('studios-sholinganallur');
});
Route::get('studios-old-perungalathur', function () {
    return view('studios-old-perungalathur');
});
Route::get('studios-guduvanchery', function () {
    return view('studios-guduvanchery');
});
Route::get('studios-ramapuram', function () {
    return view('studios-ramapuram');
});
Route::get('studios-pondicherry', function () {
    return view('studios-pondicherry');
});
Route::get('studios-saidapet', function () {
    return view('studios-saidapet');
});


/* Contact Form Submission */ 
Route::post('/contactusmail', [ContactUsController::class, 'contactusMail'])->name('contactusmail.store');
Route::post('/registerstudentmail', [ContactUsController::class, 'RegisterStudentMail'])->name('registerstudentmail.store');

/* Dance Studios Controller  */
Route::get('/get-studios', [DanceController::class, 'getStudiosList'])->name('studios.list');


/* ================== Clear Cache Routes ================== */
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

//Clear All 
Route::get('/clear', function() {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   Artisan::call('route:clear');
   return "All Cleared!";
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});