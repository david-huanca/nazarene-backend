<?php

namespace Nazarene\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasDescriptionAndStatus;

class District extends Model
{
    use HasFactory, HasDescriptionAndStatus;

    protected $fillable = ['name', 'area_id'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function churches()
    {
        return $this->hasMany(Church::class);
    }
} 