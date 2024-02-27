<?php
header("Access-Control-Allow-Origin: http://localhost:8081");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");


// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "login_app";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario de registro
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
$boleta = isset($_POST["boleta"]) ? $_POST["boleta"] : "";
$escuela = isset($_POST["escuela"]) ? $_POST["escuela"] : "";
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
$plan_relacion = isset($_POST["planRelacion"]) ? $_POST["planRelacion"] : "";
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";

$targetDir = "Project_Polinder/src/media/";
$fileName = basename($_FILES["imagen"]["name"]);
$targetFile = $targetDir . $fileName;

move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile);

// Obtener solo el nombre de la imagen
$nombreImagen = $fileName;

// Query para insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (id, email, password, nombre, apellidos, boleta, escuela, telefono, plan_relacion, descripcion, imagen) 
        VALUES (NULL, '$email', '$password', '$nombre', '$apellido', '$boleta', '$escuela', '$telefono', '$plan_relacion', '$descripcion', '$nombreImagen')";

if ($conn->query($sql) === TRUE) {
    // Registro exitoso, obtener los datos del usuario recién registrado
    $userId = $conn->insert_id;
    $getUserSql = "SELECT * FROM usuarios WHERE id = '$userId'";
    $result = $conn->query($getUserSql);
    $row = $result->fetch_assoc();

    // Preparar los datos de respuesta
    $response = array(
        'message' => 'Registro exitoso',
        'userId' => $row['id'],
        'email' => $row['email'],
        'password' => $row['password'],
        'nombre' => $row['nombre'],
        'apellido' => $row['apellidos'],
        'boleta' => $row['boleta'],
        'escuela' => $row['escuela'],
        'telefono' => $row['telefono'],
        'plan_relacion' => $row['plan_relacion'],
        'descripcion' => $row['descripcion'],
        'imagen' => $row['imagen']
    );
    echo json_encode($response);
} else {
    // Error en el registro
    http_response_code(500);
    $response = array('message' => 'Error en el registro: ' . $conn->error);
    echo json_encode($response);
}

$conn->close();
?>
