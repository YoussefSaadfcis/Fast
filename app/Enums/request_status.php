<?php

namespace App\Enums;

enum shipment_status: string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case CLOSED = 'closed';
}
