<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'description', 'price', 'category_id'];
   
    // relasi table dari order
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    // relasi table dari product dengan category_id(foreign_key)
    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}
