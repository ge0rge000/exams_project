<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
class Password extends Model
{
    use HasFactory;

    protected $table="passwords";
    protected $fillable=[ 'id_exam','passwords'];

    protected $casts = [
        'passwords' => 'array',
    ];
    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }
}
