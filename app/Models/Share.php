<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;
    protected $fillable = [
        'share_holders_id',
        'share_name',
        'duration',
        'installation_type',
        'total_amount',
        'installation_start_date',
        'payment_mode',
        'office_staff'
    ];
}
