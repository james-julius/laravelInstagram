<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/y2XaFhNZ4IYtABRxLSeV7DWuh2zajSmCJKq1kUyj.webp';
        return "/storage/" . $imagePath; 
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }
}
