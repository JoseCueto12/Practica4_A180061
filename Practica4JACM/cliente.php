<?php

    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4JACM/server.php");

    $error = $cliente->getError();
    if($error)
    {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }

    $result = $cliente->call("getSagas", array("datos" => "Sagas"));
    if($cliente -> fault)
    {
        echo "<h2> Fault </h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else
    {
        $error = $cliente->getError();
        if($error)
        {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else
        {
            echo "<h2>Sagas</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>