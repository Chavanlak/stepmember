<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberregis extends Model
{
    protected $table = 'memberregis';
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
    // protected $primaryKey = "unid";
    protected $fillable = [

        'MemName_T', 'MemLastName_T','MemberID'

    ];
    use HasFactory;
}
