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
    const PRODUCT_FAIL_VALIDATION = 160002;
    const PRODUCT_ADD_FAIL = 160003;
    const PRODUCT_DELETE_FAIL = 160004;
    const PRODUCT_UPDATE_FAIL =160005;


    const SERVICE_NOT_EXIST = 170001;
    const SERVICE_FAIL_VALIDATION = 170002;
    const SERVICE_ADD_FAIL = 170003;
    const SERVICE_DELETE_FAIL = 170004;
    const SERVICE_UPDATE_FAIL =170005;



    const BOOK_SERVICE_NOT_EXIST = 180001;
    const BOOK_SERVICE_FAIL_VALIDATION = 180002;
    const BOOK_SERVICE_ADD_FAIL = 180003;
    const BOOK_SERVICE_DELETE_FAIL = 180004;
    const BOOK_SERVICE_UPDATE_FAIL =180005;



    const ORDER_NOT_EXIST = 190001;
    const ORDER_FAIL_VALIDATION = 190002;
    const ORDER_ADD_FAIL = 190003;
    const ORDER_DELETE_FAIL = 190004;
    const ORDER_UPDATE_FAIL =190005;


    const PAYMENT_NOT_EXIST = 200001;
    const PAYMENT_FAIL_VALIDATION = 200002;
    const PAYMENT_ADD_FAIL = 200003;
    const PAYMENT_DELETE_FAIL = 200004;
    const PAYMENT_UPDATE_FAIL =200005;



}
