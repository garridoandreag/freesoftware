<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaint';
    protected $primaryKey = 'id';

    protected $fillable = ['summary','description','code','anonymous','nit','autor','vendor_id','department_id','town_id','branchoffice_id','status','branch_id','category_id'];

    public $sortable = ['summary','description','code','anonymous','nit','autor','vendor_id','department_id','town_id','branchoffice_id','status','branch_id','category_id'];
    

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

    //one to many (inverse)
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    //one to many (inverse)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
