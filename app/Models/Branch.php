<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branch';

    //one to many (inverse)
    public function directorate()
    {
        return $this->belongsTo(Directorate::class);
    }

    //one to many
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}