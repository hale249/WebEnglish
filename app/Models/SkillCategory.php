<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SkillCategory extends Model
{
    use StatusLabelAttribute;

    const PRONUNCIATION  = 'PRONUNCIATION'; // Phát âm tiếng anh
    const GRAMMAR = 'GRAMMAR'; // Ngữ pháp
    const VOCABULARY = 'VOCABULARY'; // Từ vựng
    const WRITE = 'WRITE'; // viết


    protected $table = 'skill_categories';

    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'description'
    ];

    protected $casts = [
        'is_active' => 'boolean',
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
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="' . route('admin.skill.category.edit', $this->id) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }
}
