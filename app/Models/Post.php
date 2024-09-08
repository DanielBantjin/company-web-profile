<?php
// app/Models/Post.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // Sesuaikan dengan nama tabel Anda di database

    protected $primaryKey = 'PostID'; // Sesuaikan dengan nama kolom utama Anda di tabel
    
    // Define the attributes that are mass assignable
    protected $fillable = ['title', 'content', 'category', 'tags', 'image_url'];
}
