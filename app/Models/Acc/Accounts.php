<?php

namespace App\Models\Acc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $fillable=[
        'dateAplication',
        'description',
        'typeAccount',
        'amount',
        'requestID',
        'accountID',
    ];
}
