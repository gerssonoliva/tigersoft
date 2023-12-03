const { add } = require("lodash");

//  formReserva
function processFormReserva(event) {
  event.preventDefault();

  var inputs = $('#formReserva').serializeFormJSON();
 console.log(inputs)
  inputs.accion = 'set';
  // inputs.captcha = $("#g-recaptcha-response").val();
  var params = JSON.stringify(inputs);

    axios.post('./app/api/reservacion/IndexReservacion.php', params)
    .then(function (response) {
      // console.log(response);
      var data = response.data ;

      console.log(data);
      $('#formReserva')[0].reset();
      
      var notification = alertify.notify('Ha Solicitado su reserva correctamente, nos contáctaremos a la brevedad.', 'success', 5, function(){  console.log('dismissed'); });


    })
    .catch(function (error) {
      console.log(error);
    });

}

$('#formReserva').submit(processFormReserva);

