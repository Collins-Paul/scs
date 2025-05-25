<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resolvedBy()
    {
        return $this->belongsTo(User::class, 'resolved_by');
    }

    public function closedBy()
    {
        return $this->belongsTo(User::class, 'closed_by');
    }

    public function complaintsResponses()
    {
        return $this->hasMany(ComplaintResponse::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'attachment',
        'priority',
        'resolution',
        'resolved_by',
        'resolved_at',
        'closed_by',
        'closed_at',
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
        'closed_at' => 'datetime',
    ];
}
