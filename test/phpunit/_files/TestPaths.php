<?php
/**
 * @link    https://github.com/nnx-framework/zf-form
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ZfForm\PhpUnit\TestData;

/**
 * Class TestPaths
 *
 * @package Nnx\ZfForm\PhpUnit\TestData
 */
class TestPaths
{
    /**
     * Путь до директории модуля
     *
     * @return string
     */
    public static function getPathToModule()
    {
        return __DIR__ . '/../../../';
    }

    /**
     * Путь до конфига приложения по умолчанию
     */
    public static function getPathToDefaultAppConfig()
    {
        return  __DIR__ . '/../_files/DefaultApp/config/application.config.php';
    }


}
