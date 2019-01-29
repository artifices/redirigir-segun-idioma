// CAMBIAR DE PAGINA CADA X SEGUNDOS

// if( wp_is_mobile()
// probar para comprobar si no es movil y de un idioma en concreto, para el caso de las TV
	
if (ICL_LANGUAGE_CODE == "es") { 
    //mostrar etiqueta meta en espanol, y que redirija al siguiente idioma
  function redirige_pagina() { ?>
    <meta http-equiv="refresh" content="3;url=https://www.google.com/" />
  <?php }

} elseif (ICL_LANGUAGE_CODE == "en") {
	function redirige_pagina() { ?>
		<meta http-equiv="refresh" content="3;url=https://www.google.com/" />
	<?php }
} else {
    //nada
}
add_action( 'wp_head', 'redirige_pagina' );
