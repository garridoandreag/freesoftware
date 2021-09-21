<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';

    protected $primaryKey = 'id';
    
    protected $fillable = ['name','status'];

    //one to many
    public function departments()
    {
        return $this->hasMany(Department::class);
    }

}
