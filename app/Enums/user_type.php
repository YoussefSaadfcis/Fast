<?php

namespace App\Enums;

enum user_type:string
{
    case PILOT = 'pilot';
    case SHOP = 'shop';
    case ADMIN = 'admin';
}
