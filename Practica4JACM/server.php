<?php

    require_once "lib/nusoap.php";
    function getSagas($datos)
    {
        if($datos == "Sagas")
        {
            return join(",", array
            (
                "Harry Potter",
                "Shadow Hunters",
                "Hunter Games",
                "Cronicas del asesino de reyes"
            ));
        }
        else
        {
            return "No hay Sagas";
        }
    }

    $server = new soap_server();
    $server->register("getSagas");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);

?>