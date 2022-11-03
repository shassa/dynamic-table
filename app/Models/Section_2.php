<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section_2 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['id','name','birthdate','created_at','position'];

}
