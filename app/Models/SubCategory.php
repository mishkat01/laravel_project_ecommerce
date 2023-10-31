<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //all feilds are fillable;
    protected $guarded =[];
    public function category(){
        //in subcategory field name category_id matches the  Category table  id
        return $this->belongsTo(Category::class,'category_id','id');
    }
    use HasFactory;
}
