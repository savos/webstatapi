<?php

namespace App\Routing;


class Route
{
    protected HttpMethod $httpMethod;

    protected ?string $controller = null;

    protected ?string $method = null;

    protected array $params = [];

    /**
     * @param string $httpMethod
     * @param string $route
     * @param string|string $query
     * @throws NonExistentRouteException
     */
    public function __construct(string $httpMethod, string $route, string $query='')
    {
        global $routes;

        $this->httpMethod = new HttpMethod($httpMethod);

        $resources = explode('/', ltrim($route,'/'));
        $count = count($resources);

        foreach ($routes as $r) {
            $rightRoute = false;
            $explodedRoute = explode('/', ltrim($r['route'],'/'));

            if ($this->httpMethod->getMethod() == $r['httpMethod'] && $count == count($explodedRoute)) {
                $rightRoute = true;

                for ($i = 0; $i < $count; $i++) {
                    if ($resources[$i] !== '*' && $resources[$i] !== $explodedRoute[$i]) {
                        $rightRoute = false;
                    } elseif ($resources[$i] === '*') {
                        $this->params[] = $explodedRoute[$i];
                    }
                }
            }
            if ($rightRoute) {
                $this->controller = $r['controller'];
                $this->method = $r['method'];
                break;
            }
        }
        if ($this->controller === null && $this->method === null) {
            throw new NonExistentRouteException('Route doesn\'t exists in routing table: '.$route);
        }
    }


    public function getController(): string
    {
        return $this->controller;
    }


    public function getMethod(): string
    {
        return $this->method;
    }

    public function getParams(): array
    {
        return $this->params;
    }

}