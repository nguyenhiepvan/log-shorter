<?php
/**
 * Created by PhpStorm.
 * User: Hiệp Nguyễn
 * Date: 21/10/2021
 * Time: 20:14
 */


namespace Nguyenhiep\LogShorter\Libs;


class LogManager extends \Illuminate\Log\LogManager
{
    /**
     * Attempt to get the log from the local cache.
     *
     * @param string $name
     * @return \Psr\Log\LoggerInterface
     */
    protected function get($name)
    {
        try {
            return $this->channels[$name] ?? with($this->resolve($name), function ($logger) use ($name) {
                    return $this->channels[$name] = $this->tap($name, new Logger($logger, $this->app['events']));
                });
        } catch (\Throwable $e) {
            return tap($this->createEmergencyLogger(), function ($logger) use ($e) {
                $logger->emergency('Unable to create configured logger. Using emergency logger.', [
                    'exception' => $e,
                ]);
            });
        }
    }
}
