<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getDurasiFormatAttribute()
    {
        return sprintf('%dh %dm', $this->durasi / 60, $this->durasi % 60);
    }

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
