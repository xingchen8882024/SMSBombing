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

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\{LevelSetList, SetList};

return [
    'php-cs-fixer' => [
        'header' => <<<HEADER
This file is part of james.xue/sms-bombing.

(c) xiaoxuan6 <1527736751@qq.com>

This source file is subject to the MIT license that is bundled
with this source code in the file LICENSE.

HEADER,

        'in' => [
            __DIR__,
            __DIR__ . DIRECTORY_SEPARATOR . 'app',
            __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap',
            __DIR__ . DIRECTORY_SEPARATOR . 'config',
        ],

        /**
         * Adds rules that filenames must not match.
         *
         * You can use patterns (delimited with / sign) or simple strings.
         *
         *     $finder->notPath('some/special/dir')
         *     $finder->notPath('/some\/special\/dir/') // same as above
         *     $finder->notPath(['some/file.txt', 'another/file.log'])
         */
        'not-path' => [

        ],

        /**
         * Excludes directories.
         *
         * Directories passed as argument must be relative to the ones defined with the `in()` method. For example:
         *
         *     $finder->in(__DIR__)->exclude('ruby');
         */
        'exclude' => [
            __DIR__ . '/vendor',
        ],


        /**
         * Adds rules that files must match.
         *
         * You can use patterns (delimited with / sign), globs or simple strings.
         *
         *     $finder->name('/\.php$/')
         *     $finder->name('*.php') // same as above, without dot files
         *     $finder->name('test.php')
         *     $finder->name(['test.py', 'test.php'])
         */
        'name' => [
            '*.php',
            'generateMd.php',
        ],

        /**
         * Adds rules that files must not match.
         */
        'not-name' => [

        ]
    ],

    'rector' => [
        'path' => [
            __DIR__ . DIRECTORY_SEPARATOR . 'app',
            __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap',
            __DIR__ . DIRECTORY_SEPARATOR . 'config',
        ],

        'sets' => [
            LevelSetList::UP_TO_PHP_81,
            SetList::INSTANCEOF,
            SetList::TYPE_DECLARATION,
            SetList::EARLY_RETURN,
            SetList::PHP_81,
        ],

        'callable' => function (RectorConfig $rectorConfig) {
            $rectorConfig->fileExtensions(['.php']);
        }
    ]
];
