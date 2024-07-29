<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $table = "library";
    protected $fillable =[
        'Title',
        'Author',
        'Description',
        'ISBN',
        'Published Year',
    ];

    protected $appends = ['Title', 'Author'];
    public function getTitleAttribute()
    {
        return $this->title . ' ' . $this->author;
    }
    
    public function getBirthdayAttributes()
    {
        $birthdate = $this->attributes['birthdate'];
        if($birthdate) {
            return Carbon::parse($birthdate)->format('F d, Y');
        }
        return'';
    }

    public function grades()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
