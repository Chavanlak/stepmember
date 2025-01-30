<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsr_memberchob extends Model
{
    protected $connection = 'secondary';
    protected $primaryKey = 'IdMember';
    public $timestamps = false;
    // protected $table = 'tsr_memberchob';
    protected $table = 'memberinput';
    use HasFactory;
}
