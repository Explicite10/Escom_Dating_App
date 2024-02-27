<?php
header("Access-Control-Allow-Origin: http://localhost:8081");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");


// Conexión a la base de datos MySQL
$servername = "localhost"; // Cambia esto si tu servidor de base de datos tiene un nombre diferente
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = "1234"; // Cambia esto por tu contraseña de MySQL
$dbname = "login_app"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = null;
$password = null;
$email = null;

if(isset($_POST['id'])){
    $id = $_POST['id'];
}

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}


if(empty($id)){
    // Consulta para verificar las credenciales de inicio de sesión
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    
}else{
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
}
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    $row = $result->fetch_assoc();
    $response = array(

        'message' => 'Inicio de sesión exitoso',
        'id' => $row['id'],
        'email' => $row['email'],
        'password' => $row['password'],
        'nombre' => $row['nombre'],
        'apellidos' => $row['apellidos'],
        'boleta' => $row['boleta'],
        'telefono' => $row['telefono'],
        'escuela' => $row['escuela'],
        'plan_relacion' => $row['plan_relacion'],
        'descripcion' => $row['descripcion'],
        'imagen' => $row['imagen']
    );

    echo json_encode($response);
} else {
    // Credenciales inválidas
    http_response_code(401);
    $response = array('message' => 'Credenciales inválidas');
    echo json_encode($response);
}

$conn->close();
?>
