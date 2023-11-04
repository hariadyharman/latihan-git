<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

});

Route::get('/utama', function () {
    return view('utama',["title"=>"Utama"]);

});


Route::get('/home', function () {
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
"title"=>"Biodata",
"name"=>"Azwa Nisyiatul Rizky",
"email"=> "azwa_nisya@gmail.com",
"image"=>"azwa.jpg"

    ]);
});


Route::get('/blog', [PostController::class, 'index']);
//halaman single post

Route::get('blog/{slug}', [PostController::class,'show']);

// $new_post= [];
// foreach( $blog_posts as $post) {
// if ($post["slug"] === $slug)
// {

//     $new_post=$post;
// }
// }

