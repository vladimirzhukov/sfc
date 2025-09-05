<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public function parentCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'parent_id');
    }
}
