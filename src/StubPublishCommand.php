<?php

namespace ZepFietje\NovaStubs;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

class StubPublishCommand extends Command
{
    protected $signature = 'nova:stubs {--force : Overwrite any existing files}';

    protected $description = 'Publish all stubs that are available for customization';

    public function handle(): void
    {
        if (! is_dir($stubsPath = $this->laravel->basePath('stubs/nova'))) {
            (new Filesystem)->makeDirectory($stubsPath, 0755, true);
        }

        collect(File::files(__DIR__.'/../stubs/nova'))->each(function (SplFileInfo $file) use ($stubsPath) {
            $from = $file->getPathname();
            $to = "$stubsPath/{$file->getFilename()}";

            if (! file_exists($to) || $this->option('force')) {
                file_put_contents($to, file_get_contents($from));
            }
        });

        $this->info('Nova stubs published successfully.');
    }
}
