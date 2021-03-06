<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $primarykey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'reser_date',
        'barber_id',
        'email',
        'category_id'
    ];
    protected $dates = [
        'reser_date',

    ];
    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
