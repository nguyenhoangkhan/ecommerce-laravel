<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{

    protected $fillable = [
        'name',
        'code',
        'value',
    ];

    use HasFactory;

}
