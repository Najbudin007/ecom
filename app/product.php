<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class product extends Model
{
    protected $fillable =['name','image','price','description','additional_info','category_id','subcategory_id'];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
