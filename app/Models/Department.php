<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';

    protected $primaryKey = 'id';
    
    protected $fillable = ['name','region_id','status'];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    //one to many
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    //one to many
    public function towns()
    {
        return $this->hasMany(Town::class);
    }

    
}
