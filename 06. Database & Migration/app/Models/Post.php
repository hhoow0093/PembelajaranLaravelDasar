<?php
// membuat class posts untuk menyimpan data pada article supaya gampang diakses
// secara default, models dalam database mereperesentasimkan salah satu unit dalam table, sehingga suatu table ketika dibuat ada pada
// folder database/migration
// memanfaatkan namespace dan autoloader
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => "Judul Artikel 1",
                'author' => "Howard",
                'body' => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Temporibus doloremque dolores amet eveniet ut, iste aliquam sequi, 
                            dolor in laboriosam exercitationem repudiandae optio ex suscipit quis 
                            blanditiis nostrum numquam sit."
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => "Judul Artikel 2",
                'author' => "Howard",
                'body' => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Neque ex quo eaque inventore, tempora deserunt eius suscipit aspernatur ipsum! 
                            Placeat debitis in numquam incidunt rem. 
                            Repellendus laboriosam quos beatae nulla."
            ]
        ];
    
    }

    public static function find($slug): array //memastikan return type sebuah function adalah array
    {
        // menggunakan callback function
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post["slug"] ==   $slug;
        // });

        // menggunakan arrow function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(!$post){
            //halaman 404 jika array kosong
            abort(404);
        }else{
            return $post;
        }

    }
}
?>