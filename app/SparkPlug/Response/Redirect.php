<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 25.11.2017
 * Time: 19:47
 */

namespace App\SparkPlug\Response;


class Redirect implements ResponseInterface
{
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Send the rendered Response to the Browser
     */
    public function send(): void
    {
        http_response_code(301);
        header("Location: {$this->path}");
        echo "Redirecting to {$this->path}";
    }
}
