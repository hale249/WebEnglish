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

    /**
     * @return string
     */
    public function getActionButtonsAttribute(): string
    {
        return '
        <div class="btn-group btn-group-sm" role="group" aria-label="Hành động">
          ' . $this->edit_button . '
          ' . $this->delete_button . '
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.quiz.question.edit', ['id' => $this->book_id, 'lessonId' => $this->id]) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(): string
    {
        return '<a href="' . route('admin.book.lesson.destroy', ['id' => $this->book_id, 'lessonId' => $this->id]) . '"
                 data-trans-button-cancel="Hủy"
                 data-trans-button-confirm="Xóa"
                 data-trans-title="Chắc chắn bạn muốn xóa?"
                 class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>';
    }
}
