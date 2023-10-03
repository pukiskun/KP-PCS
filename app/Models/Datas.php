<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategoris::class);
    }

    public function division()
    {
        return $this->belongsTo(Divisions::class);
    }

}
