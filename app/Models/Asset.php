<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usaha_id',
        'asset_name',
        'asset_group',
        'acquisition_value',
        'useful_life',
        'residual_value',
        'depreciation_value',
        'book_value',
    ];

    /**
     * Get the usaha that owns the asset.
     */
    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }
}
