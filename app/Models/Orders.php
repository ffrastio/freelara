<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'services_id',
        'freelancer_id',
        'buyer_id',
        'order_status_id',
        'file',
        'note',
        'expired'
    ];

    // one to many

    /**
     * Get the user that owns the Orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userBuyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    /**
     * Get the user that owns the Orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userFreelancer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'freelancer_id', 'id');
    }

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

    public function orderStatus(): BelongsTo
    {
        return $this->belongsTo(orderStatus::class, 'order_status_id', 'id');
    }
}
