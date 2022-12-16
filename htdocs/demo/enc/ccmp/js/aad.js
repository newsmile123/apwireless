$(function() {
    $( "#fc" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_fc" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_fc").show()
		  $("#show_fc").addClass("dropped")
          .find( "#fc" );
      }
    });
	$( "#a1" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_a1" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_a1").show()
		  $("#show_a1").addClass("dropped")
          .find( "#a1" );
      }
    });
	$( "#a2" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_a2" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_a2").show()
		  $("#show_a2").addClass("dropped")
          .find( "#a2" );
      }
    });
	$( "#a3" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_a3" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_a3").show()
		  $("#show_a3").addClass("dropped")
          .find( "#a3" );
      }
    });
	$( "#sc" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_sc" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_sc").show()
		  $("#show_sc").addClass("dropped")
          .find( "#sc" );
      }
    });
	$( "#a4" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_a4" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_a4").show()
		  $("#show_a4").addClass("dropped")
          .find( "#a4" );
      }
    });
	$( "#qos" ).draggable({ revert: "invalid", helper: "clone" });
    $( "#wait_qos" ).droppable({
      drop: function( event, ui ) {
        $( this )
		  .hide()
		  $("#show_qos").show()
		  $("#show_qos").addClass("dropped")
          .find( "#qos" );
      }
    });
	$( "#dur" ).draggable({ revert: "invalid", helper: "clone" });
	$( "#ht" ).draggable({ revert: "invalid", helper: "clone" });
  });