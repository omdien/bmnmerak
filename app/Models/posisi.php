<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posisi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ruangan()
    {
        return $this->belongsTo(ruangan::class);
    }

    public function masterbmn()
    {
        return $this->belongsTo(masterbmn::class);
    }
}
