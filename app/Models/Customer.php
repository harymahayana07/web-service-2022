<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'phone', 'email', 'address'];

    // relasi table dari order
    public function order(){
        return $this->hasMany(Order::class);
    }
}
