<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $fillable = ['id','name','email','specialist','phone','mobile','clinic_number','district','city','address','created_at','created_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;

    public function scopeSelections($query){
        return $query->select('id','name','email','specialist','phone','district','mobile','clinic_number','city','address');
    }
}
