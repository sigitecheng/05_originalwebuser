<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body']; 
    protected $guarded = ['id']; // YANG TAAK BOLEH DIISI OLEH USERS, DAN TABLE DI TANDAI DENGAN GUARDED
    protected $with = ['user', 'category']; // PENAMBAHAN FITUR AGAR OPRIMALISASI QUERY BERJALAN DENGAN BAIK

    public function scopeFilter($query, array $filters)
    {
        //if (request('search'))
        // ============================================
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . request('search') . '%')
        //         //             ->orWhere('excerpt', 'like', '%' . request('search') . '%')
        //              ->orWhere('body', 'like', '%' . request('search') . '%');
        // ============================================
        //         ->orWhere('excerpt', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }


        // QUERY DENGAN PENGGUNAAN WHEN PADA LARAVEL CARA 1 JIKA QUERY YANG DIBUTUHKAN BERNILAI FALSE 
        // @query->when($filters['search'] ?? false)

        // QUERY DENGAN PENGGUNAAN WHEN PADA LARAVEL CARA 2 JIKA QUERY YANG DIBUTUHKAN BERNILAI TRUE ADA NILAI NYA  

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . request('search') . '%')
                //             ->orWhere('excerpt', 'like', '%' . request('search') . '%')
                //              ->orWhere('body', 'like', '%' . request('search') . '%');
                ->orWhere('excerpt', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search  . '%');
        });

        // VERSI LOOPING CALLING BACK 
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });


        // VERSI LOOPING ARROW FUNCTION
        $query->when(
            $filters['user'] ?? false,
            fn ($query, $user) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $user)
            )
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // PENCARIAN DENGAN TIDAK MENGGUNAKAN ID 
    public function getRouteKeyName()
    {
        return 'slug';
    }



    // FITUR OTOMATIS UNTUK PEMBUATAN SLUG PADA FORM 
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
