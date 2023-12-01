<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Ingresar
         </div>
         <form action="validar_cliente.php" method="POST">
            <div class="field">
               <input type="text" name="correo" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="contrasena" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" name="enviar_usuario" value="Login">
            </div>
            <div class="signup-link">
               No eres miembro? <a href="../registro_cliente/registro1.php">Registrate ahora</a>
            </div>
         </form>
      </div>
   </body>
</html>