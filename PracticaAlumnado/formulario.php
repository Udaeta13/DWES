<?php
include("php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
  
<head>
  <meta charset="UTF-8">
  <title>Registro de Estudiantes</title>
  <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
  <h2>Registro de Estudiantes</h2>

  <form action="procesar_registro.php" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Apellidos:</label><br>
    <input type="text" name="apellidos" required><br><br>

    <label>Fecha de nacimiento:</label><br>
    <input type="date" name="fecha_nacimiento" required><br><br>

    <label>Curso:</label><br>
    <select name="curso" required>
      <option value="1º ESO">1º ESO</option>
      <option value="2º ESO">2º ESO</option>
      <option value="3º ESO">3º ESO</option>
      <option value="4º ESO">4º ESO</option>
    </select><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Registrar</button>
  </form>

  <hr>

  <!-- Tabla de estudiantes -->
  <h2>Listado de estudiantes registrados</h2>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Fecha Nacimiento</th>
      <th>Curso</th>
      <th>Email</th>
    </tr>
    <?php
    $result = $conexion->query("SELECT nombre, apellidos, fecha_nacimiento, curso, email FROM alumno");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['nombre']."</td>
                    <td>".$row['apellidos']."</td>
                    <td>".$row['fecha_nacimiento']."</td>
                    <td>".$row['curso']."</td>
                    <td>".$row['email']."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No hay estudiantes registrados</td></tr>";
    }

    $conexion->close();
    ?>
  </table>
</body>
</html>
