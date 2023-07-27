<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    use HasFactory;
    protected $table = 'employee';

    protected $fillable = [
        'emp_fullname',
        'emp_address',
        'emp_dob',
        'emp_mobile',

    ];

    public function products()
    {
        return $this->hasMany(Degrees::class, 'category_id', 'id');
    }
}
