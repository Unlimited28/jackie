<?php

namespace App\Core;

class Controller
{
    /**
     * Render a view file using the View class.
     *
     * @param string $view The view file to render (e.g., 'public.index').
     * @param array $data Data to pass to the view.
     */
    public function render(string $view, array $data = [])
    {
        try {
            $view = new View($view, $data);
            echo $view->render();
        } catch (\Exception $e) {
            // A real app would have a more sophisticated error handler
            die('Error: ' . $e->getMessage());
        }
    }
}
