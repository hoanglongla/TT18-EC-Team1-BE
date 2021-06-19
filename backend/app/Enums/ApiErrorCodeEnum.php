<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ApiErrorCodeEnum extends Enum
{
    const USER_NOT_EXIST = 130001;
    const USER_FAIL_VALIDATION = 130002;
    const USER_ADD_FAIL = 130003;
    const USER_UPDATE_FAIL = 130004;
    const USER_DELETE_FAIL = 130005;

    const TAIL_FAIL_VALIDATION  = 140001;
    const TAIL_ADD_FAIL  = 140002;
    const TAIL_NOT_FOUND = 140003;
    const TAIL_DELETE_FAIL =  140004;
    const TAIL_UPDATE_FAIL = 140005;


}
