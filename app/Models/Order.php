<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'customer_id', 'product_id', 'status'];

    // relasi table dari customer dengan customer_id(foreign_key)
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    // relasi table dari product dengan product_id(foreign_key)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
