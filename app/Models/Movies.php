<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $primaryKey = "id";
    protected $fillable = ['title','description','file'];

    public $incrementing = true;
    public $timestamps = true;
}
