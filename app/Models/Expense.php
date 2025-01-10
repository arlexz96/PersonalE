<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['name', 'amount', 'description', 'category_id'];

    // An expense belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
