<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $primarykey = 'id';
    protected $fillable = ['barber_id', 'month', 'salary'];

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }
}
