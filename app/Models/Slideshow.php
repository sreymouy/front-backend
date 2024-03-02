<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    use HasFactory;
    protected $table = "slideshow";
    protected $primarykey = "ssid";
    protected $fillable = [ //(not write primary key)
    "title",
    "subtitle",
    "text",
    "enable",
    "img",
    "ssorder",

   ];
}
