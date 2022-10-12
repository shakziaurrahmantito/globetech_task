<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminUser extends Model
{
    use HasFactory;

    //-----------Many to Many relation-------------
    public function role(){
        return $this->beLongsToMany(role::class, adminUser_role::class);
    }
}
