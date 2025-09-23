<?php
// Incluir archivo de conexión
include("conexion.php");

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
$stmt = $conn->prepare("INSERT INTO alumno (nombre, apellidos, fecha_nacimiento, curso, email, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $apellidos, $fecha_nacimiento, $curso, $email, $hashed_password);

if ($stmt->execute()) {
    echo "✅ Registro completado con éxito.";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
