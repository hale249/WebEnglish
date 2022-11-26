<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionOptions extends Model
{
    protected $table = 'question_options';

    protected $fillable = [
        'question_id',
        'option',
        'is_right_option',
    ];

    protected $casts = [
        'is_right_option' => 'boolean'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(QuizQuestions::class, 'question_id', 'id');
    }
}
