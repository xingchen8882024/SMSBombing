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

use LaravelZero\Framework\Components\Updater\Strategy\GithubStrategy;

return [

    /*
    |--------------------------------------------------------------------------
    | Self-updater Strategy
    |--------------------------------------------------------------------------
    |
    | Here you may specify which update strategy class you wish to use when
    | updating your application via the "self-update" command. This must
    | be a class that implements the StrategyInterface from Humbug.
    |
    */

    'strategy' => GithubStrategy::class,

];
