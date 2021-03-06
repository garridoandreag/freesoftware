<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    use HasFactory;

    protected $table = 'directorate';
    protected $primaryKey = 'id';
    
    protected $fillable = ['name','logo','status'];

    public function branchs()
    {
        return $this->hasMany(Branch::class);
    }

}
