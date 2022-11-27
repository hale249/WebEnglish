<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientQuizFinish extends Model
{
    protected $table = 'client_quiz_finish';

    protected $fillable = [
        'client_quiz_id',
        'question_id',
        'client_answer',
        'correct_answer',
    ];
}
