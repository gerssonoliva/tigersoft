const FORM = document.querySelector('#formFooter');

FORM.addEventListener('submit',e => e.preventDefaul());

function registerSuscriptor(){
  var inputs = $('#formFooter').serializeFormJSON();
  inputs.accion = 'set';

  var params = JSON.stringify(inputs);
  axios.post('./app/api/suscriptor_simple/IndexSuscriptorSimple.php', params)
    .then(function (response) {
      // console.log(response);
      var data = response.data;

      if(!data.error) {
        alertify.notify('Se a suscrito exitosamente', 'success', 5, function () {
          console.log('dismissed');
        });
      }else{
        alertify.notify('Ocurrio un error, intentelo nuevamente', 'error', 7, function () {
          console.log('dismissed');
        });
      }

      $('#formFooter')[0].reset();


    })
    .catch(function (error) {
      console.log(error);
    });
  }

  document.querySelector('#suscribir').addEventListener('click',registerSuscriptor)
