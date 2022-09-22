<?php

$url = '';

if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

if ($url == '') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/homepage.php');
}
elseif ($url[0] == 'inscription') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/register.php');
}
elseif ($url[0] == 'connexion') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/login.php');
}
elseif ($url[0] == 'mot-de-passe-oublie') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/forgot-password.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'components' AND $url[2] == 'buttons') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/components/buttons.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'components' AND $url[2] == 'cards') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/components/cards.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'utilities' AND $url[2] == 'animations') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/utilities/animations.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'utilities' AND $url[2] == 'borders') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/utilities/borders.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'utilities' AND $url[2] == 'colors') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/utilities/colors.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'utilities' AND $url[2] == 'others') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/utilities/others.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'libraries' AND $url[2] == 'chart') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/libraries/chart.php');
}
elseif ($url[0] == 'documentation' AND $url[1] == 'libraries' AND $url[2] == 'datatables') {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/documentation/libraries/datatables.php');
}
else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/src/controllers/404.php');
}