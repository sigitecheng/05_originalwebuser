<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body']; 
    protected $guarded = ['id']; // YANG TAAK BOLEH DIISI OLEH USERS, DAN TABLE DI TANDAI DENGAN GUARDED
    protected $with = ['user', 'category']; // PENAMBAHAN FITUR AGAR OPRIMALISASI QUERY BERJALAN DENGAN BAIK

    public function scopeFilter($query, array $filters)
    {
        //if (request('search'))
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . request('search') . '%')
                //             ->orWhere('excerpt', 'like', '%' . request('search') . '%')
                //              ->orWhere('body', 'like', '%' . request('search') . '%');
                ->orWhere('excerpt', 'like', '%' . $filters['search'] . '%')
                ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }


        // QUERY DENGAN PENGGUNAAN WHEN PADA LARAVEL 
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
