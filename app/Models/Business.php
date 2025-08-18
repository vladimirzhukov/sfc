<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\CommonMarkConverter;

class Business extends Model
{
    public function getDescriptionHtmlAttribute()
    {
        if (empty($this->description)) {
            return '';
        }
        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
        return $converter->convert($this->description)->getContent();
    }
}
