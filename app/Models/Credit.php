<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'customer_id',
        'transaction_id',
        'transaction_date',
        'total_amount',
        'down_payment',
        'remaining_amount',
        'status',
        'notes',
    ];

    /**
     * Get the usaha that owns the credit.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the customer for the credit.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the transaction for the credit.
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Get the receivables for the credit.
     */
    public function receivables()
    {
        return $this->hasMany(Receivable::class);
    }
}
