<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'users_id',
        'title',
        'description',
        'delevery_time',
        'revision_time',
        'price',
        'note',
    ];

    //one to Many

    /**
     * Get the user that owns the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    /**
     * Get all of the advantageUser for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advantageUser(): HasMany
    {
        return $this->hasMany(advantageUser::class, 'services_id', 'id');
    }

    /**
     * Get all of the advantageService for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advantageService(): HasMany
    {
        return $this->hasMany(advantageService::class, 'services_id', 'id');
    }

    /**
     * Get all of the thumbnailService for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function thumbnailService(): HasMany
    {
        return $this->hasMany(thumbnailService::class, 'services_id', 'id');
    }

    /**
     * Get all of the Tagline for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Tagline(): HasMany
    {
        return $this->hasMany(Tagline::class, 'services_id', 'id');
    }

    /**
     * Get all of the Order for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'services_id', 'id');
    }
}
