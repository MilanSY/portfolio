<?php

namespace App\Controllers;

use App\Classes\Database;
use App\Classes\Render;
use App\Classes\Process;

class Controller
{
    public string $path;
    public string $uri;
    public Render $render;

    public function __construct(string $link)
    {
        $this->path = $link;
        $this->render = new Render($link);
    }

    public function header(string $uri)
    {
        [$adminButton, $connectButton, $title, $userName, $userImage] = Process::processHeader($this->uri);
        $content = $this->render->renderHead($this->path);
        $content .= $this->render->renderHeader($title, $adminButton, $connectButton);
        return $content;
    }

    public function index(int $paging)
    {
        $content = Controller::header($this->uri);
        return $content;
    }

    public function connect(array $data)
    {
        $content = Controller::header($this->uri);
        return $content;
    }

    public function disconnect()
    {
        return Process::processDisconnect();
    }

    public function error404()
    {
        $content = Controller::header($this->uri);
        $content .= $this->render->renderError404();
        return $content;
    }
}
