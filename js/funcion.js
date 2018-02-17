
var urlweb='http://localhost/estructuras2018/web/inicio.php#'; 

function registro_max(user,correo,contraseña1,contraseña2){
	if (limpiar(user) != '' && limpiar(correo) != '' && limpiar(contraseña1) != '' && limpiar(contraseña1) != '') {
	if (contraseña1) != (contraseña2)) {
		$('#registro-error').fadeIn(500); 
		$('#registro-mensaje').text('no coiniden');
	      }else{
	      	$.ajax({
             type:'POST',
             url: urlweb + 'inc/adduser.php',
             cache:false,
             //data:'user=' + user + '&correo' + correo + '&contraseña1',
             data: $('#formRegistro').serialize()
	      	});
	      }
    }
    else {
    	$('#registro-error').fadeIn(500); 
		$('#registro-mensaje').text('completa los campos');
    }
}

function limpiar(valor){
	var cadena=valor.split(' ').join(' ');
	return cadena;
}

