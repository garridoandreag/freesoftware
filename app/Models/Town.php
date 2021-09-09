<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $table = 'town';

    //one to many
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    //one to many
    public function branchoffices()
    {
        return $this->hasMany(Branchoffice::class);
    }
    

    //one to many (inverse)
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
