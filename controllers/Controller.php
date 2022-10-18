<?php
namespace app\controllers;

use app\core\Application;
use app\core\middlewares\BaseMiddleware;

/**
 * Controller
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \app\core\middlewares\BaseMiddleware
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * getMiddlewares
     *
     * @return \app\core\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares()
    {
        return $this->middlewares;
    }
}
