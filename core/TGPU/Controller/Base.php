<?php
namespace TGPU\Controller;


class Base
{
    public function render($path = '', $vars = [])
    {
        if (empty($path))
        {
            $path = 'utils/vardump';
            $vars = ['vars' => $vars];
        }

        $path = $path . '.twig';

        \Twig_Autoloader::register();

        $loader = new \Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'] . '/core/templates/');
        $twig = new \Twig_Environment($loader, array(
            'cache' => $_SERVER['DOCUMENT_ROOT'] . '/cache/twig/',
            'debug' => true,
        ));
        $twig->addExtension(new \Twig_Extension_Debug());

        echo $twig->render($path, $vars);

        return true;
    }
}