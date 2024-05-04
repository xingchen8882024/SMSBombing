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

$class = new class () {
    public function __invoke()
    {
        $arr = json_decode(file_get_contents('api.json'), true);

        $items = '';
        foreach ($arr as $key => $value) {
            if (! empty($value['url'])) {
                $parse = parse_url($value['url']);
                $items .= sprintf('[%s](%s)', $parse['scheme'] . '://' . $parse['host'], $parse['scheme'] . '://' . $parse['host']) . PHP_EOL;
            }
        }

        file_put_contents('./Links.md', $items);

        echo 'file put done.';
    }
};

$class();
