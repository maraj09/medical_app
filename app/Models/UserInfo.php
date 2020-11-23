<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'phone_no',
        'address',
        'city',
        'country',
        'zip_code',
        'user_name',
        'avatar',
        'dr_specialization',
        'bio',
        'chamber_addr',
        'job',
        'service_area',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
