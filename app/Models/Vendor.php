<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = 'vendor';

    protected $fillable = ['name','registeredname', 'nit'];

    public $sortable = ['name','registeredname', 'nit'];
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
}
