<?php

namespace App\Models;

use App\Events\QuotationCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shipping_address',
        'notes',
    ];

    protected $dispatchesEvents = [
        'created' => QuotationCreated::class,
    ];

    public function budgets(): HasMany
    {
        return $this->hasMany(Budget::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function costumer(): BelongsTo
    {
        return $this->belongsTo(User::class, foreignKey: 'costumer_id');
    }
}
