<?php

declare(strict_types=1);

use Rector\Php74\Rector\Assign\NullCoalescingOperatorRector;

return Rector\Config\RectorConfig::configure()
    ->withParallel(maxNumberOfProcess: 6)
    ->withPhpSets()
    ->withPaths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->withSkip([
        NullCoalescingOperatorRector::class,
    ])
    ->withCache(
        cacheDirectory: 'build/rector',
        cacheClass: Rector\Caching\ValueObject\Storage\FileCacheStorage::class,
    );
