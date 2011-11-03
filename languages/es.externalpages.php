<?php

if(elgg_is_active_plugin("externalpages")){
    $language = array(

        /**
         * Menu items and titles
         */
        'expages' => "P&aacute;ginas del sitio",
        'admin:appearance:expages' => "P&aacute;ginas del Sitio",
        'expages:about' => "Acerca de",
        'expages:terms' => "T&eacute;rminos",
        'expages:privacy' => "Privacidad",
        'expages:contact' => "Contacto",

        'expages:notset' => "Esta p&aacute;ginas no se ha configurado a&uacute;n.",

        /**
         * Status messages
         */
        'expages:posted' => "Su p&aacute;gina se ha actualizado correctamente.",
        'expages:error' => "No se pudo guardar la p&aacute;gina.",
    );
    add_translation("es", $language);
}
