<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanTransaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'loan_id',
        'journal_id',
        'transaction_date',
        'type',
        'amount',
        'description',
    ];

    /**
     * Get the loan for the loan transaction.
     */
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    /**
     * Get the journal for the loan transaction.
     */
    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
