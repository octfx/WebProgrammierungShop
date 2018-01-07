<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 18.11.2017
 * Time: 20:43
 */

namespace App\Tests;

use App\SparkPlug\Routing\Exceptions\InvalidActionException;
use App\SparkPlug\Routing\Exceptions\MissingActionException;
use App\SparkPlug\Routing\Route;

class RouteTest extends TestCase
{
    /** @var  \App\SparkPlug\Routing\Route */
    private $route;

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->route = new Route('/test', 'TestController@method');
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getName()
     */
    public function testGetNameWithoutName()
    {
        $this->assertEquals('<<Nameless>>', $this->route->getName());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getName()
     */
    public function testGetName()
    {
        $route = new Route('/test', 'TestController@method');
        $route->name('test');
        $this->assertEquals('test', $route->getName());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getRoute()
     */
    public function testGetRouteLowerCase()
    {
        $route = new Route('/TEST', 'TestController@method');
        $route->name('test');
        $this->assertEquals('/test', $route->getRoute());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getRoute()
     */
    public function testGetRouteWithoutSlash()
    {
        $route = new Route('test', 'TestController@method');
        $this->assertEquals('/test', $route->getRoute());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getRoute()
     */
    public function testGetRoute()
    {
        $this->assertEquals('/test', $this->route->getRoute());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::parseOptions()
     * @covers \App\SparkPlug\Routing\Route::parseAction()
     */
    public function testInvalidActionString()
    {
        $this->expectException(InvalidActionException::class);
        new Route('/', '');
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::parseOptions()
     * @covers \App\SparkPlug\Routing\Route::parseAction()
     */
    public function testInvalidAction()
    {
        $this->expectException(InvalidActionException::class);
        new Route('/', 'TestController');
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::parseOptions()
     * @covers \App\SparkPlug\Routing\Route::parseAction()
     */
    public function testMissingActionArray()
    {
        $this->expectException(MissingActionException::class);
        new Route('/', []);
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::__toString
     * @covers \App\SparkPlug\Routing\Route::name()
     */
    public function testToString()
    {
        $route = new Route('/test', 'TestController@method');
        $route->name('test');
        $this->assertEquals('test: App\Controllers\TestController@method', $route->__toString());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getMethod()
     */
    public function testGetMethod()
    {
        $this->assertEquals('method', $this->route->getMethod());
    }

    /**
     * @covers \App\SparkPlug\Routing\Route::getController()
     */
    public function testGetController()
    {
        $this->assertEquals('App\Controllers\TestController', $this->route->getController());
    }
}
