<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
class image extends Model
{
   // use HasFactory;
    protected $fillable = [
        'url',
        'imagable_id',
        'imagable_type',
        'type',
        'is_thumbnail',
        'created_at',
        'updated_at',
    ];
}
