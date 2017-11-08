<?php
/**
 * Created by PhpStorm.
 * User: EASJ
 * Date: 08/11/2017
 * Time: 08:40
 */

$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];

// do something: call the person ...

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('showit.html.twig');
$parameters = array('name' => $name, 'phone' => $phone);
echo $template->render($parameters);
