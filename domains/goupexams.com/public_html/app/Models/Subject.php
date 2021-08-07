<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Subject extends Model
{
    use HasFactory;
    protected $table="subjects";
    protected $fillable=[ 'name_subject'];



    public function teachers()
    {
        return $this->hasMany(User::class,'subject_id');
    }
}
