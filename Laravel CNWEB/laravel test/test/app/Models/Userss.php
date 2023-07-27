<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    use HasFactory;
    protected $table = 'userss';
    protected $fillable = [
        'username',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    public function blogs()
    {
        return $this->hasMany(Blogss::class, 'AuthorID');
    }

    public function comments()
    {
        return $this->hasMany(Commentss::class, 'AuthorID');
    }
}
