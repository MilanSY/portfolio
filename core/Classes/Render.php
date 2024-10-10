<?php

namespace App\Classes;

class Render
{
    private string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }


    public function renderHeader()
    {
        global $link;
        ob_start();
        include dirname(__DIR__) . '/views/template/header.php';
        return ob_get_clean();
    }
    public function renderHead()
    {
        ob_start();
        include dirname(__DIR__) . '/views/template/head.php';
        return ob_get_clean();
    }

    public function renderConnect(array $errors, array $values, array $display)
    {
        ob_start();
        include dirname(__DIR__) . '/views/partials/login.php';
        return ob_get_clean();
    }

    public function renderError404()
    {
        ob_start();
        include dirname(__DIR__) . '/views/errors/404.php';
        return ob_get_clean();
    }

    public function renderAdmin()
    {
        ob_start();
        include dirname(__DIR__) . '/views/admin/admin.php';
        return ob_get_clean();
    }

}
