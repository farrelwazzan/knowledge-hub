<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KnowledgeEntry extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'source_url',
        'notes',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
