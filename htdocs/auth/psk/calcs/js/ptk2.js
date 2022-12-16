function ptk2() {
      var msg = $("#ptk2").serialize();
        $.ajax({
          type: "POST",
          url: "../calculation/ptk2.php",
          data: msg,
          success: function(data) {
            $("#res").html(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
 
    }
