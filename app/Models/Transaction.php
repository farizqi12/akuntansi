<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'transaction_number',
        'user_id',
        'customer_id',
        'transaction_date',
        'transaction_type',
        'amount',
        'status',
        'description',
        'is_posted',
        'created_by',
    ];

    /**
     * Get the usaha that owns the transaction.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the user that created the transaction.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the customer for the transaction.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the creator of the transaction.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the journals for the transaction.
     */
    public function journals()
    {
        return $this->hasMany(Journal::class);
    }

    /**
     * Get the credits for the transaction.
     */
    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    /**
     * Get the transaction items for the transaction.
     */
    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
