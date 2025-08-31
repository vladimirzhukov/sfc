<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    public function parentCategory()
    {
        return $this->belongsTo(EventCategory::class, 'parent_id');
    }
}
