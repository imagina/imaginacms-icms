<?php

namespace Imagina\Icms\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
  protected $signature = 'icms:publish';
  protected $description = 'Publish CMS (Quasar dist) to public/iadmin';

  public function handle(): void
  {
    $target = dirname(__DIR__, 2) . '/dist';
    $link = public_path('iadmin');

    if (file_exists($link)) {
      $this->warn("Removing old symlinks: $link");
      unlink($link);
    }

    symlink($target, $link);

    $this->info("🔗 ICMS published at /iadmin");
  }
}
