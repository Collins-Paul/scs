<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'complaint_id',
        'user_id',
        'feedback_text',
        'created_at',
    ];


}
