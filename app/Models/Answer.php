<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {
    protected $fillable = [
        'survey_id',
        'question_id',
        'score',
    ];

    public function survey() {
        return $this->belongsTo(Survey::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
