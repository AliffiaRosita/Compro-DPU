<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    /**
     * Get all of the promotion for the Categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotion()
    {
        return $this->hasMany(Promotion::class, 'category_id', 'id');
    }
}
