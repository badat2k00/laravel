<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentss extends Model
{
    use HasFactory;

    protected $table = 'commentss';

    protected $fillable = [
        'content',
        'blog_id',
        'author_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Blogss::class, 'blog_id');
    }

    public function author()
    {
        return $this->belongsTo(Userss::class, 'author_id');
    }
}