<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'jenis',
        'logo',
        'deskripsi_usaha',
        'alamat',
        'contact',
    ];

    /**
     * Get the user that owns the usaha.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the accounts for the usaha.
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    /**
     * Get the services for the usaha.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get the assets for the usaha.
     */
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    /**
     * Get the customers for the usaha.
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    /**
     * Get the transactions for the usaha.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * Get the journals for the usaha.
     */
    public function journals()
    {
        return $this->hasMany(Journal::class);
    }

    /**
     * Get the credits for the usaha.
     */
    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    /**
     * Get the receivables for the usaha.
     */
    public function receivables()
    {
        return $this->hasMany(Receivable::class);
    }

    /**
     * Get the loans for the usaha.
     */
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
