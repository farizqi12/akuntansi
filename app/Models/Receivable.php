<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receivable extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'credit_id',
        'payment_date',
        'payment_amount',
        'payment_method',
        'notes',
    ];

    /**
     * Get the usaha that owns the receivable.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the credit for the receivable.
     */
    public function credit()
    {
        return $this->belongsTo(Credit::class);
    }
}
