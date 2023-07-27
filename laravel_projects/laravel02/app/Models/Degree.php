<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Degrees extends Model
{
    use HasFactory;

    protected $table = 'degrees';

    protected $fillable = [
        'deg_name',
        'deg_classification',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'degrees_id', 'id');
    }
    
  
}