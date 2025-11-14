<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'account_code',
        'account_name',
        'account_type',
        'opening_balance',
        'balance',
        'is_active',
    ];

    /**
     * Get the usaha that owns the account.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the journals for the account.
     */
    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
}
