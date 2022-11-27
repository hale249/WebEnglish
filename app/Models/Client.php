<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'clients';

    protected $guard = 'client';

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active'
    ];

    /**
     * @return string
     */
    public function getActionButtonsAttribute(): string
    {
        return '
        <div class="btn-group btn-group-sm" role="group" aria-label="Client Actions">
          '.$this->show_button.'
          '.$this->edit_button.'
          '.$this->change_password_button.'
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="'.route('admin.clients.edit', $this->id).'" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

    public function getChangePasswordButtonAttribute(): string
    {
        return '<a href="'.route('admin.clients.show_form_change_password', $this->id).'" data-toggle="tooltip" data-placement="top" title="Change Password" class="btn btn-warning btn-sm text-white"><i class="fas fa-unlock"></i></a>';
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute(): string
    {
        return '<a href="' . route('admin.clients.show', $this->id) . '" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>';
    }
}
