<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'service_name',
        'price',
        'description',
    ];

    /**
     * Get the usaha that owns the service.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    /**
     * Get the transaction items for the service.
     */
    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
