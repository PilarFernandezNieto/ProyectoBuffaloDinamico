<?php
require "includes/app.php";
incluirTemplate("header");
$db = conectarDB();

$errores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!$email) {
        $errores[] = "El email es obligatorio";
    }
    if (!$password) {
        $errores[] = "La contraseña es obligatoria";
    }
   if(empty($errores)){
    $query = "SELECT * FROM usuarios WHERE email= '{$email}'";
    $resultado = mysqli_query($db, $query);

    if($resultado->num_rows){
        $usuario = mysqli_fetch_assoc($resultado);
            

        $auth = password_verify($password, $usuario["password"]);
        if($auth){
            if(!session_start()){
                session_start();
            }
            $_SESSION["usuario"] = $usuario["email"];
            $_SESSION["rol"] = $usuario["idrol"];
            $_SESSION["login"] = true;
            if($_SESSION["rol"] == 1){
                header("Location: /admin");
            } else {
                header("Location: /");
            }

        } else {
            $errores[] = "El password es incorrecto";
        }
        
        

    } else {
        $errores[] = "El usuario no existe";
    }
   }
}

?>

<main class="contenedor seccion alto-min seccion-login">

    <form action="/login.php" class="formulario ancho-login" method="POST">
        <?php foreach ($errores as $error) : ?>
            <div class="alerta error"><?php echo $error; ?></div>
        <?php endforeach; ?>
        <h3><i class="fa-solid fa-arrow-right-to-bracket me-3"></i>Introduce tus datos</h3>
        <div class="mb-5">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="email" required>
        </div>
        <div class="mb-5">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Contraseña" id="password" name="password">
        </div>
        <div class="mb-3 d-grid">
            <input type="submit" class="boton-fireBrick-block" value="Inicia sesión" required></input>
        </div>

    </form>

</main>


<?php
incluirTemplate("footer");
?>