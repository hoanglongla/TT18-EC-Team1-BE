<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static SUB_ADMIN()
 * @method static static SALE_STAFF()
 * @method static static SERVICE_STAFF()
 * @method static static CUSTOMER()
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRole extends Enum
{
    const ADMIN = 0;
    const SUB_ADMIN = 1;
    const SALE_STAFF = 2;
    const SERVICE_STAFF =3;
    const CUSTOMER = 10; 
}
