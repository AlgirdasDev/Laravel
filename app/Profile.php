<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/dGmIbvU4Pa7aYrgSrU3p4s4ZZhedcKGRsjx43mhI.gif';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
