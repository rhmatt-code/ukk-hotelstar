<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\facilitiesroom;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'tiperoom',
        'jumlahkamar',
        'image',
        'price',
    ];
    protected $table = "rooms";

    public function facilitiesroom()
    {
        return $this->hasMany(facilitiesroom::class);
    }
}
