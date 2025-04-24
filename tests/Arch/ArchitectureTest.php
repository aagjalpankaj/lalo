<?php

declare(strict_types=1);

arch('commands')
    ->expect('Aagjalpankaj\Lalo\Commands')
    ->toHaveSuffix('Command');

arch('formatters')
    ->expect('Aagjalpankaj\Lalo\Formatters')
    ->toHaveSuffix('Formatter')
    ->toImplement('Monolog\Formatter\FormatterInterface');

arch('middlewares')
    ->expect('Aagjalpankaj\Lalo\Middlewares')
    ->toHaveSuffix('Middleware');

arch('processors')
    ->expect('Aagjalpankaj\Lalo\Processors')
    ->toHaveSuffix('Processor');

arch('validators')
    ->expect('Aagjalpankaj\Lalo\Validators')
    ->toHaveSuffix('Validator');
