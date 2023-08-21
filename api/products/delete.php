<?php
    require("../../database/connection.php");

    //Obtener el ID del producto a eliminar 
    $id = $_POST['id'];
    //Eliminar el prod de la base de datos
    $sql = "DELETE FROM products WHERE id = $id";

    
    if($conn->query($sql)){
        $response = array(
            'status' => true,
            'code'=> 204, //"No content" El servidor cumplió con la solicitud pero no devolverá ningún contenido 
            'message'=> 'Producto eleminado exitosamente ',
            'data' => null
        );
    } else {
        $response = array(
            'status' => false,
            'code'=> 500, //Error en el servidor 
            'message'=> 'Error al eliminar el producto: ' . $conn->error,
            'data' => null
        );
    }

    echo json_encode($response);
    ?>