<?php

namespace App\Http\Controllers;

use App\Models\Blog;


class BlogController extends Controller
{
    
    function index() {
             

       
    return view('blogs.index',[
     
    'blogs'=>Blog::latest()->filter(request(['search','category','username']))
    ->Paginate(6)
    ->withQueryString(),  
    // 'categories'=>Category::all(),

    ]);
}

public function show(Blog $blog ) {
  
        return view('blogs.show',
        [
            'blog'=>$blog,
            'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
        ]
    );    
 }




}

