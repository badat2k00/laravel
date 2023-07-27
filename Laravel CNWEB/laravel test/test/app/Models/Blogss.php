<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogss extends Model
{
    use HasFactory;

    protected $table = 'blogss';

    protected $fillable = [
        'title',
        'content',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(Userss::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Commentss::class, 'blog_id');
    }
}