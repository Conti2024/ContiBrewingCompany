$(document).ready(function() {
    $('#registration-form').submit(function(e) {
      e.preventDefault(); // Evita el envío tradicional del formulario
  
      // Cambia el cursor del botón a "wait" (espera)
      $('#submit-btn').addClass('loading');
  
      // Realiza la petición AJAX
      $.ajax({
        type: 'POST',
        url: 'enviar_formulario.php', // Archivo PHP para procesar el formulario
        data: $(this).serialize(), // Serializa los datos del formulario para enviarlos
        success: function(response) {
          console.log(response);
          let respuestaRegex = response.trim().match(/^success\[(\d+)\]$/); //La respuesta será así: 'success[48]', por ejemplo.
          if (respuestaRegex) {
            console.log(respuestaRegex);
            console.log(respuestaRegex[1]);
            $('#mensaje').html('<p class="mensaje-exito">TU REGISTRO SE HA ENVIADO CORRECTAMENTE.<br/><strong>Número de Folio: <span>' + respuestaRegex[1] + '</span></strong></p>'); // Aplica la clase mensaje-exito
            $('#registration-form')[0].reset(); // Limpia el formulario
          } else {
            $('#mensaje').html('<p class="mensaje-error">OCURRIO UN ERROR AL ENVIAR EL REGISTRO.</p>'); // Aplica la clase mensaje-error
          }
        },
        error: function(xhr, status, error) {
          console.error('Error en la petición AJAX: ' + status + ', ' + error);
          $('#mensaje').html('<p class="mensaje-error">OCURRIO UN ERROR AL ENVIAR EL REGISTRO.</p>'); // Aplica la clase mensaje-error en caso de error
        },
        complete: function() {
          // Al completar la petición AJAX, quita la clase "loading" para restaurar el cursor normal
          $('#submit-btn').removeClass('loading');
        }
      });
    });
  });
  