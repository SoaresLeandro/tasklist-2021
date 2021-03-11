<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'note'
    ];

    protected $table = 'taskgroups';
    
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'taskgroup_id');
    }
}
