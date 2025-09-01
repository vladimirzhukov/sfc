<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StartupCategory extends Model
{
    public function parentCategory()
    {
        return $this->belongsTo(StartupCategory::class, 'parent_id');
    }
}
