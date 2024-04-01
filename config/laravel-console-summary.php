<?php

/*
 * This file is part of james.xue/sms-bombing.
 *
 * (c) xiaoxuan6 <1527736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Hide Commands
    |--------------------------------------------------------------------------
    |
    | This option allows to hide certain commands from the summary output.
    | They will still be available in your application. Wildcards are supported
    |
    | Examples: "make:*", "list"
    |
    */

    'hide' => [
        'list',
        'make:*',
        'test',
        'app:*'
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Binary Name
    |--------------------------------------------------------------------------
    |
    | This option allows to override the Artisan binary name that is used
    | in the command usage output.
    |
    */

    'binary' => null,

];
