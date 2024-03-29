<?php

declare(strict_types=1);

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
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
    ]);

    $rectorConfig->importNames();
    $rectorConfig->importShortClasses(false);
    $rectorConfig->removeUnusedImports();

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_81,
        SetList::INSTANCEOF,
        SetList::TYPE_DECLARATION,
        SetList::EARLY_RETURN,
        SetList::PHP_81,
    ]);
};
