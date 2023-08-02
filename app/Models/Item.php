<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'description',
        'nomedono',
        'image'

    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
    // public function users(){
    //     return $this->belongsToMany('App\Models\User');
    // }

