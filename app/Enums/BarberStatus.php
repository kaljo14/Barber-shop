<?php
namespace App\Enums;

enum BarberStatus: string{
    case Pending = 'pending';
    case Avaliable = 'avaliable';
    case Unavaliable = 'unavaliable';
}