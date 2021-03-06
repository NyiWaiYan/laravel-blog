<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // protected $fillable=['title','intro','body'];
    protected $guarded=['id']; //empty guarded >> freely to fill the columns

 protected $with=['category','author'];
    





 //$filter is receving passing data

        public function scopeFilter($query,$filter)//Blog::latest()->filter()
        {
           
            $query->when($filter['search']??false,function($query,$search){

            $query->where(function($query) use($search){
                $query->where('title','LIKE','%'.$search.'%')
                        ->orWhere('body','LIKE','%'.$search.'%');

            });

         });

         $query->when($filter['category']??false,function($query,$slug){

          $query->whereHas('category',function ($query) use ($slug){
            $query->where('slug',$slug);
          });

         });



         $query->when($filter['username']??false,function($query,$username){

            $query->whereHas('author',function ($query) use ($username){
              $query->where('username',$username);
            });
  
           });
} 

        public function category()
        {
            //has one 
            //has many
            //belongsTo
            //belongsToMany



            
            return $this->belongsTo(Category::class);
            // $this is $blog // eg $blog->belongsTo();
            //category is MODAL // this syntax is getting namespace
        }



        
public function author(){
    return $this->belongsTo(User::class,'user_id');
}



}
;




