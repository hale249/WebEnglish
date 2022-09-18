<?php

namespace App\Models;

use App\Models\Traits\Attributes\StatusLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SkillCourses extends Model
{
    use StatusLabelAttribute;

    protected $table = 'skill_courses';

    protected $fillable = [
        'name',
        'skill_id',
        'is_active',
        'description',
        'link_video'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'skill_id' => 'integer',
    ];

    protected $appends = [
        'status_label'
    ];

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
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
        return '<a href="' . route('admin.skill.course.edit', ['skillId' => $this->skill_id, 'id' => $this->id ]) . '" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }
}
