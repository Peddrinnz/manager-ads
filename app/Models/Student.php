<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf', 'name', 'date_of_birth' => 'date',
    ];
    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_student');
    }
}
