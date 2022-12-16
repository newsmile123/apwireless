function call() {
      var msg = $("#anonce").serialize();
        $.ajax({
          type: "POST",
          url: "../calculation/anonce.php",
          data: msg,
          success: function(data) {
            $("#anonce-res").html(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
 
    }
