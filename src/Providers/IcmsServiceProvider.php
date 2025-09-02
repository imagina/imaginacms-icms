<?php

namespace Imagina\Icms\Providers;

use Illuminate\Support\ServiceProvider;
use Imagina\Icms\Console\PublishCommand;

class IcmsServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    $this->commands([
      PublishCommand::class,
    ]);
  }
}
