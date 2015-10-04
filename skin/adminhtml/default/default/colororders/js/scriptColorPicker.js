window.onload = function(){

    // si existe el campo con ese id le asignamos el colorpicker
    if( $("admin_color_order") ){
	   new Control.ColorPicker("admin_color_order", {IMAGE_BASE : "/skin/adminhtml/default/default/colororders/images/" });
    }
}