<!-- Crea Nuevo Usuario del Sistema -->
<HTML>
<head>
<title>Crea Nuevo Usuario del Sistema</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!-- Funcion que valida que no queden en blanco los campos obligatorios -->
<script languaje="javascript">
function validar()
{
var error = "Por favor, para continuar,\ncomplete los siguientes campos:\n\n";
var a = ""
    if (document.form1.iden_ucs.value == "") { a += " Identificación\n"; }
    if (document.form1.nomb_ucs.value == "") { a += " Nombre\n"; }
    if (document.form1.logi_ucs.value == "") { a += " Login\n"; }
	if (document.form1.clav_ucs.value == "") { a += " Clave\n"; }
	if (document.form1.tipo_ucs.value == "") { a += " Tipo de Usuario\n"; }
    if (a != "") 
    { alert(error + a);return true;}
document.form1.submit()
}
function atras()
{
  history.go(-1)
}

</script>
</head>
<body>
<form name='form1' method='post' action='cse_nusuario5121.php'>
<table class='Tbl0' width='100%'>
  <tr><td class='Td0' align='center'>Crear Nuevo Usuario del Sistema</td></tr>
</table>
<br>
<table class='Tbl0' width='100%'>
  <tr><td class='Td1' align='center'>Datos Del Usuario del Sistema</td></tr>
</table>
<table class='Tbl0' width='100%' border='0'>
  <tr>
	<td class='Td2' width='20%' align='right'>Identificación:</td>
	<td class='Td2' width='30%' align='left'><input type='text' name='iden_ucs' size='20' maxlength='20'></td>
  </tr>
  <tr>
	<td class='Td2' width='20%' align='right'>Nombre y Apellido:</td>
    <td class='Td2' width='30%' align='left'><input type='text' name='nomb_ucs' size='50' maxlength='50'></td>
  </tr>
  <tr>
    <td class='Td2' align='right'>Login:</td>
    <td class='Td2' align='left'><input type='text' name='logi_ucs' size='40' maxlength='40'></td>
  </tr>
  <tr>
    <td class='Td2' align='right'>Clave:</td>
    <td class='Td2' align='left'><input type='password' name='clav_ucs' size='20' maxlength='20'></td>
  </tr>
  <tr>
    <td class='Td2' align='right'>Tipo de Usuario:</td>
	<td class='Td2' align='left'><select name='tipo_ucs'>
	  <option value=''>
	  <option value='2'>Usuario
	  <option value='1'>Superusuario
	  </select>
	</td>
  </tr>
</table>
<br>
<table class='Tbl0' width='70%'>
  <tr>
  <td class='Td2' width='25%' align='right'><a href='#' onclick='validar()'><img src='img/32px-Crystal_Clear_device_zip_unmount.png' border=0 height='20' width='20' alt='Nuevo'></a></td>
  <td class='Td2' width='25%' align='left'><a href='#' onclick='validar()'>Guardar</a></td>
  <td class='Td2' width='25%' align='right'><a href='#' onclick='atras()'><img src='img/32px-Crystal_Clear_action_1leftarrow.png' border=0 height='20' width='20' alt='Regresar'></a></td>
  <td class='Td2' width='25%' align='left'><a href='#' onclick='atras()'>Regresar</a></td>
  </tr>
</table>

</form>

</body>
</HTML>