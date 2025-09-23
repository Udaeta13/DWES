<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";   // Cambiar si tu usuario no es root
$password = "";       // Cambiar si tu root tiene contraseña
$dbname = "colegio";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encriptar la contraseña antes de guardarla
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Preparar sentencia SQL segura
$stmt = $conn->prepare("INSERT INTO estudiantes (nombre, apellidos, fecha_nacimiento, curso, email, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $apellidos, $fecha_nacimiento, $curso, $email, $hashed_password);

if ($stmt->execute()) {
    echo "✅ Registro completado con éxito.";
} else {
    echo "❌ Error: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
