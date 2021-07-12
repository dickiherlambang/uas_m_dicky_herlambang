<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sysuser extends Model
{
    protected $table = 'sysusers';
    protected $fillable = [
        'uname',
        'namalengkap',
        'email',
        'upass'
    ];
}
