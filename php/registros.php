<?php
include("conexion.php"); // ✅ Carga la conexión

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $Usuario = $_POST["username"];
    $password = $_POST["password"];
    $gmail = $_POST["email"];
    $sexo = $_POST["Sexo"];

    // Encriptar contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Usamos $conexion aquí (debe venir del include)
    if ($conexion instanceof mysqli) {
        $sql = "INSERT INTO registro (Usuario, password, gmail, sexo) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $Usuario, $passwordHash, $gmail, $sexo);
            if ($stmt->execute()) {
              //Diseño de alerta de registro exitoso y redirección a login.php//
                echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
 
                     Swal.fire({
                     icon: 'success',
                     title: 'Registro exitoso',
                     text: 'Hola, " . htmlspecialchars($Usuario) . " ya esta Registrad@!',
                     confirmButtonColor: '#608d58ff',
                     confirmButtonText: 'Aceptar'
                     }).then((result) => {
                     if (result.isConfirmed) {
                     window.location.href = '/ProgramacionWeblaragon/login.php';
                      }
                     });
                 </script>";
            } else {
                echo "Error en el registro: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error al preparar la consulta: " . $conexion->error;
        }

        $conexion->close();
    } else {
        echo "Error: la conexión no es válida.";
    }
}
?>







