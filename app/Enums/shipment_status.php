<?php

namespace App\Enums;

enum shipment_status: string
{
    case PENDING = 'pending';
    case ASSIGNED = 'assigned';
    case DELIVERED = 'delivered';
    case CANCELLED = 'cancelled';
}
