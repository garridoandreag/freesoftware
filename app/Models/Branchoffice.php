<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchoffice extends Model
{
    use HasFactory;

    protected $table = 'branchoffice';
    protected $primaryKey = 'id';
    
    protected $fillable = ['name','addnit','nit','zone', 'address','vendor_id', 'town_id'];

    //one to many
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    //one to many (inverse)
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    //one to many (inverse)
    public function town()
    {
        return $this->belongsTo(Town::class);
    }


}
