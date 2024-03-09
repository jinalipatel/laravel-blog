<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'platform';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname','email','phonenumber','gender','age','address'];
    use HasFactory;
}
