<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    use HasFactory;
    protected $fillable=[
        "name","born"
    ];
    
    public $timestamps=false;
    
    public function renter(){
        return $this->hasMany(Rent::class);
    }
}
