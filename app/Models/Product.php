<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_name','title','description','cost_price','price'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function item(){
        return $this->hasMany(SaleItem::class);
    }

    public static function arrayForProductList(){
        $arr = [];
        $all = Product::all();
        foreach($all as $i){
            $arr[$i->id] = $i->title;
        }
        return $arr;
    }
}
