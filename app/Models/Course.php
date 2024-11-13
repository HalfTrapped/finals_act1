<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function userCourse(): HasOne{
        return $this->HasOne(Course::class);
    }
}