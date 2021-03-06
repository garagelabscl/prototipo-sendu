<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.0.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario paso 3',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '02.html',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_reCAPTCHA2_private_key' => 'Clave privada de reCAPTCHA 2.0 no válida.',
		'invalid_reCAPTCHA2_server_response' => 'Respuesta de servidor de reCAPTCHA 2.0 no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'nicole@garagelabs.cl',
		'to' => 'nicole@garagelabs.cl'
	),
	'fields' => array(
		'custom_U2696' => array(
			'order' => 1,
			'type' => 'radiogroup',
			'label' => '¿Quieres que agendemos los retiros de tus pedidos o tú los vas a dejar a una sucursal?',
			'required' => true,
			'optionItems' => array(
				'Quiero ir siempre a dejar los pedidos a una sucursal',
				'Quiero que lo retiren cada vez que sea posible',
				'Decidiré más tarde'
			),
			'errors' => array(
				'required' => 'El campo \'¿Quieres que agendemos los retiros de tus pedidos o tú los vas a dejar a una sucursal?\' es obligatorio.',
				'format' => 'El campo \'¿Quieres que agendemos los retiros de tus pedidos o tú los vas a dejar a una sucursal?\' contiene un valor no válido.'
			)
		)
	)
);

process_form($form);
?>
