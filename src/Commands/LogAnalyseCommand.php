<?php

declare(strict_types=1);

namespace Aagjalpankaj\Lalo\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class LogAnalyseCommand extends Command
{
    protected $signature = 'lalo:analyse';

    protected $description = 'Analyze log usage';

    public function handle(): void
    {
        $extensionPath = base_path('vendor/aagjalpankaj/lalo/phpstan.neon');

        $command = [
            'vendor/bin/phpstan',
            'analyse',
            'app',
            '--configuration='.$extensionPath,
            '--ansi',
        ];

        $process = new Process($command, base_path());
        $process->setTimeout(null);

        //        $this->info('Running: '.implode(' ', $command));
        $this->newLine();

        $process->run(function ($type, $buffer): void {
            $this->output->write($buffer);
        });
    }
}
