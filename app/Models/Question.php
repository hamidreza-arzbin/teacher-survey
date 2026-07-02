<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    protected $fillable = [
        'title',
    ];

    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
