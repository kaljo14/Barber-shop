<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\BarberStatus;

class Barber extends Model
{
    use HasFactory;
    protected $table = 'barbers';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'status', 'description', 'image'];

    protected $casts = [
        'status' => BarberStatus::class
    ];
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
