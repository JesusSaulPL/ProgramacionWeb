<?php
session_start();

include("conexion.php"); // Carga la conexión

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($conexion instanceof mysqli) {
        //Consulta en la base de datos por el usuario
        $sql = "SELECT * FROM registro WHERE Usuario = ? LIMIT 1";
        $stmt = $conexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $Usuario);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();

                //  Verificar contraseña con password_verify
                if (password_verify($password, $row['password'])) {
                    $_SESSION['usuario'] = $row['Usuario'];
                    $usuario = $_SESSION['usuario'];

                    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
 
                     Swal.fire({
                     icon: 'success',
                     title: 'Inicio de sesión exitoso',
                     text: 'Bienvenido, " . htmlspecialchars($usuario) . "!',
                     confirmButtonColor: '#8B5E3C',
                     confirmButtonText: 'Aceptar'
                     }).then((result) => {
                     if (result.isConfirmed) {
                     window.location.href = '/ProgramacionWeblaragon/index.php?logueado=1';
                      }
                     });
                 </script>";
                } else {
                    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
 
                     Swal.fire({
                     title: 'Contraseña correcta',
                     text: 'Por favor, intenta de nuevo.',
                     confirmButtonColor: '#8B5E3C',
                     confirmButtonText: 'Aceptar'
                     }).then((result) => {
                     if (result.isConfirmed) {
                     window.location.href = '/ProgramacionWeblaragon/login.php';
                      }
                     });
                 </script>";
                }
            } else {
              echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
 
                     Swal.fire({
                     title: 'Usuario no encontrado',
                     text: 'Por favor, intenta de nuevo.',
                     confirmButtonColor: '#8B5E3C',
                     confirmButtonText: 'Aceptar'
                     }).then((result) => {
                     if (result.isConfirmed) {
                     window.location.href = '/ProgramacionWeblaragon/login.php';
                      }
                     });
                 </script>";
            }

            $stmt->close();
        } else {
            echo " Error al preparar la consulta: " . $conexion->error;
        }

        $conexion->close();
    } else {
        echo " Error: la conexión no es válida.";
    }
}
?>