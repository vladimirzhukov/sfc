<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    public function parentCategory()
    {
        return $this->belongsTo(BusinessCategory::class, 'parent_id');
    }
}
