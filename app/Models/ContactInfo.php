<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = ['email', 'phone', 'address', 'logo', 'facebook', 'twitter', 'instagram', 'linkedin'];

    public static function latest()
    {
        return self::first() ?? self::create([
            'email' => 'support@sidem-benin.com',
            'phone' => '+229 01 XX XX XX XX',
            'address' => 'Cotonou, Benin',
            'logo' => null,
            'facebook' => null,
            'twitter' => null,
            'instagram' => null,
            'linkedin' => null
        ]);
    }
}
