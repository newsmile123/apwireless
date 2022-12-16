function pmk() {
      var msg = $("#pmk").serialize();
        $.ajax({
          type: "POST",
          url: "../calculation/pmk.php",
          data: msg,
          success: function(data) {
            $("#res").html(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
 
    }