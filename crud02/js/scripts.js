$(document).ready(function(){
    // al click sul pulsante fai qualcosa
    var $bottoneClearAll = $('#clearAllButton');
    var tipo_chiamata = 'POST';
    var url_da_chiamare = 'cancellazione.php';
    $bottoneClearAll.click(function(){
        // pulisce la lista dei TASK
        // chiamata ajax
        $.ajax({
          // chiama il php per la cancellazione del contenuto del file
          type:tipo_chiamata,
          url:url_da_chiamare,
          success:function(response){
            console.log("Risposta se SUCCESSO "+response);
            $('#testoRispostaAjax').append('La lista dei task è stata cancellata');

          },
          error:function(response){
            console.log("Risposta se FALLLIMENTO "+response);
            $('#testoRispostaAjax').append('errore');
          }
        });
    });
});


// funzione di test per la chiamata ajax
function testAlert(){
  alert("Chiamata AJAX");
}
