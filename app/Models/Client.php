<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'date_of_birth',
        'sex',
        'photo',
        'email',
        'phone',
        'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_of_birth' => 'date',
        'sex' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function leagues(): HasMany
    {
        return $this->hasMany(League::class);
    }

    public function scopeSearch($query, $term)
    {
        //$term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query
                ->where('firstname', 'like', '%'.$term.'%');
        });
    }
}
