<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'note'
    ];

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function taskGroup()
    {
        return $this->hasOne(TaskGroup::class, 'taskgroup_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
