<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_class', 'semester', 'period_day',
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class, 'classroom_student');
    }
}
