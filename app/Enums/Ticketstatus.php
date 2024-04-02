<?php
namespace App\Enums;

enum Ticketstatus:string
{
   case OPEN='open';
   case RESOLVED='resolved';
   case REJECTED='rejected';
}
