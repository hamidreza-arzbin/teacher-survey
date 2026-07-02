<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {
    protected $fillable = [
        'user_id',
        'teacher_id',
        'comment',
    ];

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
