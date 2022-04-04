<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'tagline';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'services_id',
        'tagline',
    ];

    // one to many 

    //one to many 

    /**
     * Get the Service that owns the AdvantageService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }
}
