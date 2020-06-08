<?php

namespace AsanovR\DiolMailToReplacer;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/diol-mail-to-replacer.php' => config_path('diol-mail-to-replacer.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/diol-mail-to-replacer.php', 'diol-mail-to-replacer.php'
        );

        $this->app->register(EventServiceProvider::class);
    }
}
