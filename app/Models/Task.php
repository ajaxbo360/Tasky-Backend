<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'due_date',
        'description',
        'status'
    ];
    // all of the relationships to be touched

    protected $touches = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
