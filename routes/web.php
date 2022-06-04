<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Log;








//show all blogs
Route::get('/',[BlogController::class,'index']);

//showing each blog 
Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])->where('blog','[A-z\d\-_]+');


Route::get('/register',[AuthController::class,'create']);

Route::post('/register',[AuthController::class,'store']);

Route::post('/logout',[AuthController::class,'logout']);





























// Route::get('/users/{user:username}',function(User $user){

//     return view('blogs',
//     [
//         'blogs'=>$user->blogs,
        
//     ]);
// });

