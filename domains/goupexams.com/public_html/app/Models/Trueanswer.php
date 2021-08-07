<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Resco;

class Trueanswer extends Model
{
    use HasFactory;

    protected $table="trueanswers";
    protected $fillable=[ 'question_id','ans'];
    public function question(){

        return $this->belongsTo(Question::class,'question_id');
    }
   
}
