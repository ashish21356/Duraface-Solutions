<?php 

function LinkCss($cssPath) {
    $url = BASEURL . "/" . $cssPath;
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '">';
}

function LinkJs($jsPath) {
    $url = BASEURL . "/" . $jsPath;
    echo '<script type="text/javascript" src="' . $url . '"></script>';
}
