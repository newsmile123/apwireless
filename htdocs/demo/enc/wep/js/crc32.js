function getChecksum1()
{
        $.ajax({
          type: "POST",
          url: "crc.php",
          success: function(html) {
            $("#crc32").val(html);
          },
    });
}
function getChecksum2()
{
        $.ajax({
          type: "POST",
          url: "crc.php",
          success: function(html) {
            $("#dec_checksum").val(html);
          },
    });
}