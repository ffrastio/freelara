<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienceUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'experience_users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'detail_users_id',
        'experience',
    ];

    // one to many

    /**
     * Get the detailUser that owns the ExperienceUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detailUser(): BelongsTo
    {
        return $this->belongsTo(detailUser::class, 'detail_users_id', 'id');
    }
}
