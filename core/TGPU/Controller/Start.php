<?php
namespace TGPU\Controller;


class Start extends Base
{
    public function index()
    {
        return $this->render('index', ['name' => 'Sergey']);

    }
}