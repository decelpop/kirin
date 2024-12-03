<?php

namespace App\Models;

use App\Events\OrderCancelled;
use App\Events\OrderCreated;
use App\Events\OrderUpdated;
use Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Representation of incoming manufacturing request
 * Equivalents in other domains:
 * - Etsy -> Receipt
 */
class Order
{
    /** @use HasFactory<OrderFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    ];

    /**
     * The event map for the model.
     *
     * @var array<string, class-string>
     */
    protected $dispatchesEvents = [
        'created' => OrderCreated::class,
        'updated' => OrderUpdated::class,
        'cancelled' => OrderCancelled::class,
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
        ];
    }
}
