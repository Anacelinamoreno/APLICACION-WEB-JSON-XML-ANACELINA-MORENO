<?php
    $conexion= mysqli_connect("localhost", "root", "", "escuela");
    mysqli_set_charset($conexion,"utf8");

    $consulta= mysqli_query($conexion, "SELECT * FROM usuarios");




    $xml= new DOMDocument ("1.0");
    $xml->formatOutput=true;
    $usuarios=$xml->createElement("LISTA");
    $xml->appendChild($usuarios);

    while ($row = mysqli_fetch_array ($consulta)){
        $etiqueta=$xml->createElement("USUARIOS");
        $usuarios->appendChild($etiqueta);

        $nombres=$xml->createElement("nombres", $row['nombres']);
        $etiqueta->appendChild($nombres);
        
        $app=$xml->createElement("apellidos", $row['apellidos']);
        $etiqueta->appendChild($app);

        $user=$xml->createElement("usuarios", $row['usuario']);
        $etiqueta->appendChild($user);

        $pass=$xml->createElement("password", $row['pass']);
        $etiqueta->appendChild($pass);

    }
    echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("doc.xml");
    

?>