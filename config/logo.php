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

use LaravelZero\Framework\Components\Logo\FigletString;

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled
    |--------------------------------------------------------------------------
    |
    | This value determines if the app name should be represented as an
    | ASCII logo. This file provides a sane default location for all
    | information concerning the logo and is display customization.
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Logo Name
    |--------------------------------------------------------------------------
    |
    | This value determines the text that is rendered for the logo.
    | It defaults to the app name, but it can be any other text
    | value if the logo should be different to the app name.
    |
    */
    'name' => config('app.name'),

    /*
    |--------------------------------------------------------------------------
    | Default Font
    |--------------------------------------------------------------------------
    |
    | This option defines the font which should be used for rendering.
    | By default, one default font is shipped. However, you are free
    | to download and use additional fonts: http://www.figlet.org.
    |
    */

    'font' => FigletString::DEFAULT_FONT,

    /*
    |--------------------------------------------------------------------------
    | Output Width
    |--------------------------------------------------------------------------
    |
    | This option defines the maximum width of the output string. This is
    | used for word-wrap as well as justification. Be careful when using
    | small values, because they may result in an undefined behavior.
    |
    */

    'outputWidth' => 80,

    /*
    |--------------------------------------------------------------------------
    | Justification
    |--------------------------------------------------------------------------
    |
    | This option defines the justification of the logo text. By default,
    | justification is provided, which will work well on most of your
    | console apps. Of course, you are free to change this value.
    |
    */

    'justification' => null,

    /*
    |--------------------------------------------------------------------------
    | Right To Left
    |--------------------------------------------------------------------------
    |
    | This option defines the option in which the text is written. By, default
    | the setting of the font-file is used. When justification is not defined,
    | a text written from right-to-left is automatically right-aligned.
    |
    | Possible values: "right-to-left", "left-to-right", null
    |
    */

    'rightToLeft' => null,

];
