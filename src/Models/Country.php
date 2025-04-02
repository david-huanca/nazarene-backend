<?php

namespace Nazarene\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasDescriptionAndStatus;

class Country extends Model
{
    use HasFactory, HasDescriptionAndStatus;

    protected $fillable = ['name', 'code'];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }
} 