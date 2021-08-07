<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trueanswer;
use App\Models\Resco;
use App\Models\Exam;

class Question extends Model
{
    use HasFactory;

    protected $table="questions";
    protected $fillable=[ 'exam_id','question','a','b','c','d'];


    public function trueanswer(){

        return $this->hasOne(Trueanswer::class,'question_id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }

}
