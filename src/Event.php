<?php

/*
 * This file is part of james.xue/sms-bombing.
 *
 * (c) xiaoxuan6 <15227736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 */

namespace Vinhson\SMSBombing;

use Symfony\Component\EventDispatcher\EventDispatcher;

class Event
{
    private static ?EventDispatcher $instance = null;

    /**
     * @return EventDispatcher
     */
    public static function getEventDispatcher(): EventDispatcher
    {
        if (! self::$instance instanceof EventDispatcher) {
            self::$instance = new EventDispatcher();
        }

        return self::$instance;
    }
}
