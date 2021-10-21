<?php
/**
 * Created by PhpStorm.
 * User: Hiệp Nguyễn
 * Date: 21/10/2021
 * Time: 20:07
 */


namespace Nguyenhiep\LogShorter;


use Nguyenhiep\LogShorter\Libs\LogManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LogServiceProvider extends PackageServiceProvider
{
    public function registeringPackage()
    {
        $this->app->singleton('log', function ($app) {
            return new LogManager($app);
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name("log-shorter")
            ->hasConfigFile("log-shorter");
    }
}