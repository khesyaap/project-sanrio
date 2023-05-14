<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanrio extends Model
{
    use HasFactory;

    protected $table = 'sanrios';
    protected $guarded = ['id'];

    protected $fillable = [
        'name_product', 'price', 'desc', 'rate'
    ];
    
}
