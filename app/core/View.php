<?php

namespace App\Core;

class View
{
    protected $basePath;
    protected $viewPath;
    protected $data = [];
    protected $layout;
    protected $layoutData = [];
    protected $content;

    public function __construct(string $viewPath, array $data = [])
    {
        $this->basePath = VIEW_PATH;
        $this->viewPath = $this->basePath . '/' . str_replace('.', '/', $viewPath) . '.php';
        $this->data = $data;
    }

    public function layout(string $layout, array $data = [])
    {
        $this->layout = $this->basePath . '/layouts/' . $layout . '.php';
        $this->layoutData = $data;
    }

    protected function renderView(): string
    {
        if (!file_exists($this->viewPath)) {
            throw new \Exception("View not found: {$this->viewPath}");
        }

        extract($this->data);

        ob_start();
        require $this->viewPath;
        return ob_get_clean();
    }

    public function render(): string
    {
        $this->content = $this->renderView();

        if ($this->layout) {
            extract($this->layoutData);
            $content = $this->content; // Make content available to layout

            ob_start();
            require $this->layout;
            return ob_get_clean();
        }

        return $this->content;
    }
}
