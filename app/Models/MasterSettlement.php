<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSettlement extends Model{
    use HasFactory;

    protected $fillable=[
        'fk_id_master',
        'fk_id_settlement',
        'status',
    ];
}
