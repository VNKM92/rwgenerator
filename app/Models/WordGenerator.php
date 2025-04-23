<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class WordGenerator extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($data) {
            $slug = Str::slug($data->name);
            $originalSlug = $slug;
            $count = 1;

            while (static::where('slug', $slug)->where('id', '!=', $data->id)->exists()) {
                $slug = "$originalSlug-$count";
                $count++;
            }

            $data->slug = $slug;
        });
    }
}
