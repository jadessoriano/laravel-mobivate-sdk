<?php

declare(strict_types=1);

test('it will not use debugging functions.')
    ->expect(['dd', 'dump', 'ray', 'rd', 'die', 'eval', 'sleep', 'debug', 'var_dump', 'env'])
    ->not->toBeUsed();
