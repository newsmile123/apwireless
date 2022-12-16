function ptk1() {
      var msg = $("#ptk1").serialize();
        $.ajax({
          type: "POST",
          url: "../calculation/ptk1.php",
          data: msg,
          success: function(data) {
            $("#res").html(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
 
    }
