<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookLessons extends Model
{
    use SoftDeletes, StatusLabelAttribute, Slug;

    protected $table = 'book_lessons';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'user_id',
        'book_id',
        'is_active',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'is_active' => 'boolean',
        'book_id' => 'integer',
    ];

    protected $appends = [
        'status_label'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute(): string
    {
        return '
        <div class="btn-group btn-group-sm" role="group" aria-label="Hành động">
          ' . $this->show_button . '
          ' . $this->edit_button . '
          ' . $this->delete_button . '
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.book.lesson.edit', ['id' => $this->book_id, 'lessonId' => $this->id]) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute(): string
    {
        return '<a href="' . route('admin.book.lesson.course.index', ['id' => $this->book_id, 'lessonId' => $this->id]) . '" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>';
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
