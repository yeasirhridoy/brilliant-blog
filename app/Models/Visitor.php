<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Visitor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function visitable(): MorphTo
    {
        return $this->morphTo();
    }
}
