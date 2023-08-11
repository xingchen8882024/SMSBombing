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

namespace Vinhson\SMSBombing\Events;

use Symfony\Component\Console\Event\ConsoleEvent;

class PhoneValid extends ConsoleEvent
{
    protected bool $result = true;

    protected string $message = '无效的手机号';

    public function parse(): void
    {
        $phone = $this->getInput()->getArgument('phone');

        if (! preg_match('/^1[3-9]\d{9}$/', $phone) or ! is_numeric($phone)) {
            $this->result = false;
        }

        // todo:: 后续验证手机号真实性
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
