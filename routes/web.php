<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staf', [
        "image" => "contoh1.jpg",
        "title" => "staf"
    ]);
});

Route::get('/blog', function () {
    $blog_blog = [
        [
            "title" => "Praktikum",
            "author" => "Syafarul Priwantoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit libero similique distinctio itaque commodi quaerat non, neque deleniti voluptatem architecto tempora doloremque fugit incidunt nostrum? Incidunt, fugit officiis provident porro pariatur corrupti soluta maiores consectetur nihil delectus eligendi voluptatem? Soluta ipsam saepe temporibus dolore est error aperiam itaque perferendis ex quo neque provident enim facere doloremque, pariatur nisi cum consequuntur voluptatum voluptates? Soluta repellat odit officiis sequi ullam unde, illum dolorum ipsum adipisci eaque optio harum exercitationem voluptas voluptatem debitis veniam vel magnam inventore tenetur fugit placeat mollitia? Assumenda corrupti omnis necessitatibus dolore nostrum pariatur perferendis veritatis dolorem aut!"
        ],
    ];
    return view('blog',[
        "title" => "Blog",
        "image" => "contoh1.jpg",
        "blog" => $blog_blog
    ]);
});
