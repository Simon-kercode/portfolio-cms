<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function quoteRequests() {
        return $this->belongsToMany(QuoteRequest::class);
    }
}
