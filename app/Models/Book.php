<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes, StatusLabelAttribute;

    protected $table = 'books';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'is_active',
        'is_new',
        'class_number',
        'image'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'is_active' => 'boolean',
        'is_new' => 'boolean',
        'class_number' => 'integer'
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
          ' . $this->edit_button . '
          ' . $this->show_button . '
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.book.edit', $this->id) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute(): string
    {
        return '<a href="' . route('admin.book.lesson.index', $this->id) . '" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>';
    }
}
