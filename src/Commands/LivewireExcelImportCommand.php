<?php

namespace Soap\LivewireExcelImport\Commands;

use Illuminate\Console\Command;

class LivewireExcelImportCommand extends Command
{
    public $signature = 'livewire-excel-import';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
