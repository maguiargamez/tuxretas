<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'league_id',
        'name',
        'public_name',
        'short_code',
        'sequence',
        'promotion_zone',
        'relegation_zone',
        'featured_position',
        'hide_ranking',
        'hide_players',
        'hide_field',
        'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'league_id' => 'integer',
        'promotion_zone' => 'integer',
        'relegation_zone' => 'integer',
        'featured_position' => 'boolean',
        'hide_ranking' => 'boolean',
        'hide_players' => 'boolean',
        'hide_field' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class);
    }
}
