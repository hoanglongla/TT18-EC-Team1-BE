<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static USER_NOT_EXIST()
 * @method static static USER_FAIL_VALIDATION()
 * @method static static USER_ADD_FAIL()
 * @method static static USER_UPDATE_FAIL()
 * @method static static USER_DELETE_FAIL()
 * @method static static USER_INCORRECT_REPASSWORD()
 * @method static static USER_OLD_PASSWORD_INCORRECT()
 * @method static static PERMISSION_DENIED()
 * @method static static TAIL_FAIL_VALIDATION()
 * @method static static TAIL_ADD_FAIL()
 * @method static static TAIL_NOT_FOUND()
 * @method static static TAIL_DELETE_FAIL()
 * @method static static TAIL_UPDATE_FAIL()
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

    const USER_INCORRECT_REPASSWORD = 130006;
    const USER_OLD_PASSWORD_INCORRECT = 130007;
    const PERMISSION_DENIED = 130008;



    const TAIL_FAIL_VALIDATION  = 140001;
    const TAIL_ADD_FAIL  = 140002;
    const TAIL_NOT_FOUND = 140003;
    const TAIL_DELETE_FAIL =  140004;
    const TAIL_UPDATE_FAIL = 140005;

    const CATEGORY_NOT_EXIST = 150001;
    const CATEGORY_FAIL_VALIDATION = 150002;
    const CATEGORY_ADD_FAIL = 150003;
    const CATEGORY_DELETE_FAIL = 150004;
    const CATEGORY_UPDATE_FAIL = 150005;

    const PRODUCT_NOT_EXIST = 160001;

}
