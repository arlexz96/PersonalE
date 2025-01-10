<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // A category has many expenses
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
