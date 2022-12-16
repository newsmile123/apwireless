function snonce() {
      var msg = $("#snonce").serialize();
        $.ajax({
          type: "POST",
          url: "../calculation/snonce.php",
          data: msg,
          success: function(data) {
            $("#snonce-res").html(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
 
    }