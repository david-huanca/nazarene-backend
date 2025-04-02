<?php

namespace Nazarene\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasDescriptionAndStatus;

class Ministry extends Model
{
    use HasFactory, HasDescriptionAndStatus;

    protected $fillable = ['name'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
} 