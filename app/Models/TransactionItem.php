<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'transaction_id',
        'service_id',
        'price',
        'quantity',
        'unit',
        'subtotal',
    ];

    /**
     * Get the transaction for the transaction item.
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Get the service for the transaction item.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
