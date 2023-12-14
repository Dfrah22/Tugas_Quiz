<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "tb_pelanggan";

    protected $primaryKey = "id";

    protected $guarded = [];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'pel_id_gol', 'id');
    }
}
