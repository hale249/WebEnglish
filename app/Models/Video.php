<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    use StatusLabelAttribute;
    protected $table = 'videos';

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'link_video',
        'image',
        'content_translate',
        'user_id',
        'category_id',
        'is_active',
    ];

    protected $appends = [
        'status_label'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'category_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

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
          ' . $this->delete_button . '
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.video.edit', $this->id) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(): string
    {
        return '<a href="' . route('admin.video.destroy', $this->id) . '"
                 data-trans-button-cancel="Hủy"
                 data-trans-button-confirm="Xóa"
                 data-trans-title="Chắc chắn bạn muốn xóa?"
                 class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>';
    }
}
