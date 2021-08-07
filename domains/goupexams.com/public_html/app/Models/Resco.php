<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\User;
use App\Models\Question;
class Resco extends Model
{
    use HasFactory;
    protected $table="rescos";
    protected $fillable=[ 'choices','questionsids','exam_id','user_id','result'];

    protected $casts=[
        'result'=>'array',
        'questionsids'=>'array'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    
}
