<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="product";
    protected $primarykey ="pid";
    protected $fillable =[
        "pname",
        "pdesc",
        "enable",
        "pprice",
        "pimg",
        "cid",// is forien key
        "quanlity",
    ];
}
