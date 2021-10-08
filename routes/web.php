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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muhamad F",
        "gambar" => "57528446.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhamad F",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem impedit, consequatur possimus repudiandae nostrum excepturi hic beatae. Aut dicta earum inventore accusamus alias. Nemo, harum aperiam in aliquam aspernatur nihil recusandae amet reiciendis, temporibus accusamus pariatur. Praesentium eum, numquam optio ad quia incidunt natus id temporibus! Ducimus laborum sapiente, mollitia, deserunt inventore dignissimos magnam error 
                        cupiditate voluptatibus soluta, necessitatibus numquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad F",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos corrupti, ducimus maxime molestiae iure vero voluptatibus reiciendis libero accusantium facere."
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


//halaman single posts
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhamad F",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem impedit, consequatur possimus repudiandae nostrum excepturi hic beatae. Aut dicta earum inventore accusamus alias. Nemo, harum aperiam in aliquam aspernatur nihil recusandae amet reiciendis, temporibus accusamus pariatur. Praesentium eum, numquam optio ad quia incidunt natus id temporibus! Ducimus laborum sapiente, mollitia, deserunt inventore dignissimos magnam error 
                        cupiditate voluptatibus soluta, necessitatibus numquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad F",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos corrupti, ducimus maxime molestiae iure vero voluptatibus reiciendis libero accusantium facere."
        ]
    ];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});