<?php

namespace Nazarene\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasDescriptionAndStatus;

class Member extends Model
{
    use HasFactory, HasDescriptionAndStatus;

    protected $fillable = ['name', 'email', 'phone', 'church_id', 'ministry_id'];

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function ministry()
    {
        return $this->belongsTo(Ministry::class);
    }
} 