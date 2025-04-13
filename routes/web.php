<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/news/{id?}', function ($id = null) {
//     $news = [1,2,3,4,5,6];
//     if($id) {
//         echo "News ID: $id";
//     }else {
//         echo "all news ".'<br>';
//         foreach ($news as $new) {
//             echo  $new ."<br>";
//         }
//     }
// });


Route::prefix('site2')->controller(SiteOneController::class)->group(function() {
    Route::get('/home','home');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/msg/{id}','msg');
});
