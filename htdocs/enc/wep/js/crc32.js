function getChecksum1()
{
	var posting = $.post("crc.php")
			posting.done(function( html ) {
    			$( "#crc32" ).empty();
				$( "#crc32" ).append( html );
			});
}
function getChecksum2()
{
     var posting = $.post("crc-dec.php")
			posting.done(function( html ) {
    			$( "#dec_checksum" ).empty();
				$( "#dec_checksum" ).append( html );
			});
}