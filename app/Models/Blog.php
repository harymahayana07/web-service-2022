<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // model blog tugas 3
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id','author','title','body','keyword'];
}
