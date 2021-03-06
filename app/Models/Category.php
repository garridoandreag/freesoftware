<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ['name','status'];

    //one to many
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
