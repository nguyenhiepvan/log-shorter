#Installation
```shell
composer require nguyenhiep/log-shorter
```


# Publish config

```
php artisan vendor:publish --tag=log-shorter-config
```

#Before
```php
[2021-10-21 20:50:04] local.ERROR: syntax error, unexpected '$mail_id' (T_VARIABLE) {"exception":"[object] (ParseError(code: 0): syntax error, unexpected '$mail_id' (T_VARIABLE) at /Users/hiepnguyen/workspace/laravel/socket/app/Console/Commands/HandleEmailCommand.php:56)
[stacktrace]
#0 /Users/hiepnguyen/workspace/laravel/socket/vendor/composer/ClassLoader.php(346): Composer\\Autoload\\includeFile('/Users/hiepnguy...')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass('App\\\\Console\\\\Com...')
#2 [internal function]: spl_autoload_call('App\\\\Console\\\\Com...')
#3 /Users/hiepnguyen/workspace/laravel/socket/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(229): is_subclass_of('App\\\\Console\\\\Com...', 'Illuminate\\\\Cons...')
#4 /Users/hiepnguyen/workspace/laravel/socket/app/Console/Kernel.php(56): Illuminate\\Foundation\\Console\\Kernel->load(Array)
#5 /Users/hiepnguyen/workspace/laravel/socket/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(316): App\\Console\\Kernel->commands()
#6 /Users/hiepnguyen/workspace/laravel/socket/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(127): Illuminate\\Foundation\\Console\\Kernel->bootstrap()
#7 /Users/hiepnguyen/workspace/laravel/socket/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#8 {main}
"} 

```
#After
```php
[2021-10-21 20:50:33] local.ERROR: syntax error, unexpected '$mail_id' (T_VARIABLE) {"exception":"ParseError: syntax error, unexpected '$mail_id' (T_VARIABLE) in /app/Console/Commands/HandleEmailCommand.php:56
Stack trace:
#0 /vendor/composer/ClassLoader.php(346): Composer\\Autoload\\includeFile('/Users/hiepnguy...')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass('App\\\\Console\\\\Com...')
#2 [internal function]: spl_autoload_call('App\\\\Console\\\\Com...')
#3 /vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(229): is_subclass_of('App\\\\Console\\\\Com...', 'Illuminate\\\\Cons...')
#4 /app/Console/Kernel.php(56): Illuminate\\Foundation\\Console\\Kernel->load(Array)
#5 /vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(316): App\\Console\\Kernel->commands()
#6 /vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(127): Illuminate\\Foundation\\Console\\Kernel->bootstrap()
#7 /artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#8 {main}"} 

```