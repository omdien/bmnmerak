<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function masterbmn()
    {
        return $this->hasMany(masterbmn::class);
    }
}
