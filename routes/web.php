<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Log;








//show all blogs
Route::get('/',[BlogController::class,'index']);

//showing each blog 
Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])->where('blog','[A-z\d\-_]+');



Route::post('/blogs/{blog:slug}/comments', [CommentController::class,'store']);

Route::get('/register',[AuthController::class,'register'])->middleware('guest');

Route::post('/register',[AuthController::class,'store'])->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/login', [AuthController::class,'login'])->middleware('guest');

Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');

Route::post('/blogs/{blog:slug}/subscription',[BlogController::class,'subscriptionHandler']);


//admin routes



//admin routes
Route::middleware('can:admin')->group(function () {
    Route::get('/admin/blogs', [\App\Http\Controllers\AdminBlogController::class, 'index']);
    Route::get('/admin/blogs/create', [\App\Http\Controllers\AdminBlogController::class, 'create']);
    Route::post('/admin/blogs/store', [\App\Http\Controllers\AdminBlogController::class, 'store']);
    Route::delete('/admin/blogs/{blog:slug}/delete', [\App\Http\Controllers\AdminBlogController::class, 'destroy']);
    Route::get('/admin/blogs/{blog:slug}/edit', [\App\Http\Controllers\AdminBlogController::class, 'edit']);
    Route::patch('/admin/blogs/{blog:slug}/update', [\App\Http\Controllers\AdminBlogController::class, 'update']);
});





// Route::get('/users/{user:username}',function(User $user){

//     return view('blogs',
//     [
//         'blogs'=>$user->blogs,
        
//     ]);
// });

