<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class League extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'municipality_id' => 'integer',
        'is_active' => 'boolean',
    ];

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
