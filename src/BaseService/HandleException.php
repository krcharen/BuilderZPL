<?php

namespace MonkeyZPL\BaseService;


class HandleException
{
    /**
     * HandleException constructor.
     */
    public function __construct()
    {
        set_error_handler([$this, 'handleError']);

        set_exception_handler([$this, 'handleException']);

//        register_shutdown_function([$this, 'handleShutdown']);
    }

    /**
     * @param $message
     */
    public static function outputMessage($message)
    {
        echo $message . PHP_EOL;
    }

    /**
     * @param $error
     */
    public static function handleError($error)
    {

    }

    /**
     * @param $exception
     */
    public static function handleException($exception)
    {
        self::outputMessage($exception->getMessage());
    }

    /**
     * @param $shutdown
     */
    public static function handleShutdown($shutdown = '')
    {

    }
}