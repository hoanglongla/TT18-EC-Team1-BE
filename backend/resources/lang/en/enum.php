<?php

use App\Enums\ApiErrorCodeEnum;

return [

    ApiErrorCodeEnum::class => [
        ApiErrorCodeEnum::USER_NOT_EXIST => 'User not exist in system',


        ApiErrorCodeEnum::TAIL_ADD_FAIL  => "Tail add fail",
        ApiErrorCodeEnum::TAIL_FAIL_VALIDATION => "Tail validate fail",
    ],

];
