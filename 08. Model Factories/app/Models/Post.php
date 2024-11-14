<?php
// membuat class posts untuk menyimpan data pada article supaya gampang diakses
// secara default, models dalam database mereperesentasimkan salah satu unit dalam table, sehingga suatu table ketika dibuat ada pada
// folder database/migration
// memanfaatkan namespace dan autoloader
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // secara default, laravel sudah tahu isi database j=kita dengan syarat:
    // pada saat buat class model, nama class harus singular, akan tetapi nama tabel harus plural.
    // jika tidak memenuhi syarat dan gak mau error, maka kita harus menggunakan ini: 
    // protected $table ='blog_posts';
    // protected $primaryKey = 'blog_id';

    use HasFactory;

    protected $fillable = ['title', 'author', 'body', 'slug'];
}
