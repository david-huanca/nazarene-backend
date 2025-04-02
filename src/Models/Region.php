<?php

namespace Nazarene\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasDescriptionAndStatus;

class Region extends Model
{
    use HasFactory, HasDescriptionAndStatus;

    protected $fillable = ['name', 'isSubRegion', 'parent_id'];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
} 