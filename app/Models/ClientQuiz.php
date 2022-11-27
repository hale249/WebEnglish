<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientQuiz extends Model
{
    protected $table = 'client_quiz';

    protected $fillable = [
        'client_id',
        'quiz_id',
        'success',
        'fail',
    ];

    public function quiz(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }
}
