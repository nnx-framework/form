<?php
/**
 * @link    https://github.com/nnx-framework/zf-form
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ZfForm\PhpUnit\Test;

use Nnx\ZfForm\PhpUnit\TestData\TestPaths;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Nnx\ZfForm\Module;


/**
 * Class ModuleTest
 *
 * @package Nnx\ModuleOptions\PhpUnit\Test
 */
class ModuleTest extends AbstractHttpControllerTestCase
{
    /**
     *
     * @return void
     * @throws \Zend\Stdlib\Exception\LogicException
     */
    public function testLoadModule()
    {
        /** @noinspection PhpIncludeInspection */
        $this->setApplicationConfig(
            include TestPaths::getPathToDefaultAppConfig()
        );

        $this->assertModulesLoaded([Module::MODULE_NAME]);
    }
}
