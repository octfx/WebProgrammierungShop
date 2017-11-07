<?php declare(strict_types = 1);

/**
 * User: Hannes
 * Date: 20.10.2017
 * Time: 17:17
 */

namespace App\SparkPlug\Request;

class Request implements RequestInterface
{
    private $url;
    private $getVars = [];
    private $postVars = [];

    public function __construct(string $route, $options)
    {
        $this->route = $route;

        if (is_string($options)) {
            $this->rawOptions['action'] = $options;
        }

        if (is_array($options)) {
            $this->rawOptions = $options;
        }

        $this->parseOptions();
    }


    public static function capture(): Request
    {
        return $this;
    }

    public function getUri(): string
    {
        // TODO: Implement getUri() method.
    }

    public function getRequestMethod(): string
    {
        // TODO: Implement getRequestMethod() method.
    }
}
