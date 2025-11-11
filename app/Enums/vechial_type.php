<?php

namespace App\Enums;

enum shipment_status: string
{
    case MOTORCYCLE = 'motorcycle';
    case BIKE = 'bike';
    case CAR = 'car';
    case without = 'without';
}
