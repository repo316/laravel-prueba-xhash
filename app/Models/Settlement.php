<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model{
    use HasFactory;

    protected $fillable=[
        'key_data',
        'name',
        'zone_type',
        'fk_id_settlement_type',
    ];

    public function settlementType(){
        return $this->belongsTo(SettlementType::class);
    }
}
