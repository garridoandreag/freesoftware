<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branch';

    protected $primaryKey = 'id';
    
    protected $fillable = ['name','address','directorate_id','status'];
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

    //one to many
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
