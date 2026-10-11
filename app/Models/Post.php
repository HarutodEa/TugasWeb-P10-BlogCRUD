<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk mengizinkan penyimpanan massal
    protected $fillable = ['title', 'body'];
}