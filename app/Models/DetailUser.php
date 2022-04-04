<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'detail_users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'users_id',
        'photo',
        'contact_number',
        'role',
        'biography',
    ];

    // one to one

    /**
     * Get the user that owns the DetailUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }


    // one to many

    /**
     * Get all of the comments for the DetailUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experienceUser(): HasMany
    {
        return $this->hasMany(experienceUser::class, 'detail_users_id', 'id');
    }
}
