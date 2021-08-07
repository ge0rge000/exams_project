<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\User;
use App\Models\Password;
use App\Models\Resco;
use App\Models\Question;


class Exam extends Model
{
    use HasFactory;
    protected $table="exams";
    protected $fillable=[ 'id_subject','id_teacher','year_type'];

    public function teachers()
    {
        return $this->belongsTo(User::class,'id_teacher');
    }
    public function questions()
    {
        return $this->hasMany(Question::class,'exam_id');
    }
    public function password()
    {
        return $this->hasOne(Password::class,'exam_id');
    }


    public function result()
    {
        return $this->hasMany(Resco::class,'exam_id');
    }

}
