<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'journal_number',
        'transaction_id',
        'account_id',
        'journal_date',
        'debit_amount',
        'credit_amount',
        'description',
        'is_posted',
        'created_by',
        'updated_by',
    ];

    /**
     * Get the usaha that owns the journal.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the transaction for the journal.
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Get the account for the journal.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the user that created the journal.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user that updated the journal.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
