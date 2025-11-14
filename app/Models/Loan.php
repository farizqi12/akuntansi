<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'lender_name',
        'type',
        'address',
        'phone_number',
        'email',
        'balance',
        'account_id',
    ];

    /**
     * Get the usaha that owns the loan.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the account for the loan.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the loan transactions for the loan.
     */
    public function loanTransactions()
    {
        return $this->hasMany(LoanTransaction::class);
    }
}
