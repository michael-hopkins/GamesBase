<?php namespace Hopkins\GamesBase\Providers;

use Illuminate\Support\ServiceProvider;

class GamesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/gamesbase.php' => config_path('gamesbase.php')
        ]);
    }

    public function register()
    {
        $player = $this->app['config']->get('gamesbase.player_location','\Hopkins\GamesBase\Models\Player');
        $this->app->bind('\Hopkins\GamesBase\Interfaces\PlayerInterface',$player);
    }
}
