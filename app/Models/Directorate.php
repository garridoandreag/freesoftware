<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    use HasFactory;

    protected $table = 'directorate';
    protected $primaryKey = 'id';

    public function directoratebranchs()
    {
        return $this->hasMany(Directoratebranch::class);
    }

}
