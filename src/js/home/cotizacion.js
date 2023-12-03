// procesar formulario


function processFormCotizar(event) {
  event.preventDefault();
  // serializar data
  var inputs = $('#formCotizar').serializeFormJSON();
  inputs.accion = 'set';
  
  var params = JSON.stringify(inputs);

  axios.post('./app/api/cotizacion/IndexCotizacion.php', params)
    .then(function (response) {
      // console.log(response);
      var data = response.data;

      $('#modalCotizar').modal('hide')

      console.log(data);
      var notification = alertify.notify('Ha Solicitado su Cotización correctamente, nos contáctaremos a la brevedad.', 'success', 5, function () {
        console.log('dismissed');
      });

      $('#formCotizar')[0].reset();


    })
    .catch(function (error) {
      console.log(error);
    });
}

$('#formCotizar').submit(processFormCotizar);