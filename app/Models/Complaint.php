<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaint';
    protected $primaryKey = 'id';

    //one to many (inverse)
    public function branchoffice()
    {
        return $this->belongsTo(Branchoffice::class);
    }

    //one to many (inverse)
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    //one to many (inverse)
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    //one to many (inverse)
    public function town()
    {
        return $this->belongsTo(Town::class);
    }

}
