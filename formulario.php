<!DOCKTYPE html>
  <html>

  <head>
    <meta charset="UTF-8" />
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
    <tm>Registrar un nuevo administrador</tm>
  </head>

  <body>
    <form action="guarda_registro.php" method="post">
      <table>
        <thead>
          <tr>
            <th>Clave de usuario y contraseña</th>
          </tr>
        </thead>
        <td>
          <label>Clave de usuario (Campo obligatorio)</label>
          <input required type="text" name="id" size="70">

          <label>Contraseña (Campo obligatorio)</label>
          <input required name="password" type="password" alt="strongPass" size="70">

          <label>Ingresar nuevamente la contraseña (Campo obligatorio)</label>
          <input required name="password" type="password" size="70">
        </td>
      </table>

      <p></p>

      <table>
        <table>
          <thead>
            <tr>
              <th>Informacion complementaria</th>
            </tr>
          </thead>
          <td>
            <label>Nombre(s) (Campo obligatorio)</label>
            <input required name="nombre" type="text" size="70">

            <label>Primer apellido (Campo obligatorio)</label>
            <input required name="apellido" type="text" size="70">

            <label>Segundo apellido</label>
            <input name="segapellido" type="text" size="70">

            <label>Direccion de correo UNAM (Campo obligatorio)</label>
            <input required name="correo" type="email" size="70">
          </td>
        </table>
        <input type="submit" value="Guardar">
        <input type="reset" value="Cancelar">
    </form>
  </body>

  </html>