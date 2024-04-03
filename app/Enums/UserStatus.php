<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE = 'Active';
    case INACTIVE = 'Inactive';
    case RESIGNED  = 'Resigned';
    case RETIRED = 'Retired';
    case TERMINATED = 'Terminated';
    case TRANSFERED = 'Transfered';
    case DROPPED = 'Dropped';
    case GRADUATED = 'Graduated';
    case DISCOUNTINUED = 'Discountinued';
}
