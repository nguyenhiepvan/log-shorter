<?php
/**
 * Created by PhpStorm.
 * User: Hiệp Nguyễn
 * Date: 21/10/2021
 * Time: 20:12
 */


namespace Nguyenhiep\LogShorter\Facade;


use App\Libs\Logger;
use Illuminate\Support\Facades\Facade;
use Psr\Log\LoggerInterface;

/**
 * @method static LoggerInterface channel(string $channel = null)
 * @method static LoggerInterface stack(array $channels, string $channel = null)
 * @method static Logger withContext(array $context = [])
 * @method static Logger withoutContext()
 * @method static void alert(string $message, array $context = [])
 * @method static void critical(string $message, array $context = [])
 * @method static void debug(string $message, array $context = [])
 * @method static void emergency(string $message, array $context = [])
 * @method static void error(string $message, array $context = [])
 * @method static void info(string $message, array $context = [])
 * @method static void log($level, string $message, array $context = [])
 * @method static void notice(string $message, array $context = [])
 * @method static void warning(string $message, array $context = [])
 * @method static void write(string $level, string $message, array $context = [])
 * @method static void listen(\Closure $callback)
 *
 * @see Logger
 */
class Log extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'log';
    }
}