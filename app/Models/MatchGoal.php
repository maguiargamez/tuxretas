<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchGoal extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'player_id',
        'player_name',
        'number',
        'position',
        'minute',
        'is_penalty',
        'penalty_shoots',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'match_id' => 'integer',
        'player_id' => 'integer',
        'number' => 'integer',
        'minute' => 'integer',
        'is_penalty' => 'boolean',
        'penalty_shoots' => 'boolean',
    ];

    public function match(): BelongsTo
    {
        return $this->belongsTo(Match::class);
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
