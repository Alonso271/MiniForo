<form name='entrada' method="POST">
<table>
<tr>
<td>Nombre:</td><td> <input type="text" name="nombre" 
    value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>"></td></tr>
<tr>
<td>ContraseÃ±a: </td><td><input type="password" name="contraseÃ±a"
    value="<?=(isset($_REQUEST['contraseÃ±a']))?$_REQUEST['contraseÃ±a']:''?>"></td>
</tr>
</table>
<input type="submit" name="orden" value="Entrar">
</form>
