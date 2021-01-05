<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primarykey = 'id_comment';
    protected $fillable = [
    	'nama', 
    	'email', 
    	'rating', 
    	'komen'
    ];
}
