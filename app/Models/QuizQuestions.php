<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizQuestions extends Model
{
    use SoftDeletes, StatusLabelAttribute;

    protected $table = 'quiz_questions';

    protected $fillable = [
        'quiz_id',
        'question',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'quiz_id' => 'integer',
    ];

    protected $appends = [
        'status_label'
    ];

    public function options(): HasMany
    {
        return $this->hasMany(QuestionOptions::class, 'question_id', 'id');
    }
}
