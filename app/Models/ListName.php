<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListName extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function items(){
        return $this->belongsToMany(Item::class);
    }
}
