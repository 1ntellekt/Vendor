<?php

class Singleton
{

    private static $path = 'none';

    public static function getPath()
    {
        return self::$path;
    }

    public static function setPath($path)
    {
        self::$path = $path;
    }

}

?>