<?php

namespace Nazarene\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasDescriptionAndStatus;

class Area extends Model
{
    use HasFactory, HasDescriptionAndStatus;

    protected $fillable = ['name', 'region_id'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
} 