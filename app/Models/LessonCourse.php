<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonCourse extends Model
{
    use SoftDeletes, StatusLabelAttribute;

    protected $table = 'lesson_courses';

    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'link_video',
        'description',
        'user_id',
        'lesson_id',
        'is_active',
        'is_exercise',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'is_active' => 'boolean',
        'is_exercise' => 'boolean',
        'lesson_id' => 'integer',
    ];

    protected $appends = [
        'status_label'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(BookLessons::class, 'lesson_id', 'id');
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
        if (empty($this->lesson)) {
            return '';
        }
        return '<a href="' . route('admin.book.lesson.course.edit', ['id' => $this->lesson->book_id, 'lessonId' => $this->lesson_id, 'courseId' => $this->id]) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

//    /**
//     * @return string
//     */
//    public function getShowButtonAttribute(): string
//    {
//        if (empty($this->lesson)) {
//            return '';
//        }
//        return '<a href="' . route('admin.book.lesson.course.index', ['id' => $this->lesson->book_id, 'lessonId' => $this->lesson_id, 'courseId' => $this->id]) . '" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>';
//    }


    /**
     * @return string
     */
    public function getDeleteButtonAttribute(): string
    {
        if (empty($this->lesson)) {
            return '';
        }
        return '<a href="' . route('admin.book.lesson.course.destroy', ['id' => $this->lesson->book_id, 'lessonId' => $this->lesson_id, 'courseId' => $this->id]) . '"
                 data-trans-button-cancel="Hủy"
                 data-trans-button-confirm="Xóa"
                 data-trans-title="Chắc chắn bạn muốn xóa?"
                 class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>';
    }
}
