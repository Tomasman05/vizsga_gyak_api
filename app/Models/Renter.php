<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;
    protected $fillable=[
        "writer","type","title","lender_id"
    ];

    public $timestamps=false;

    public function lender()
    {
        return $this->belongsTo(Lender::class);
    }
}
