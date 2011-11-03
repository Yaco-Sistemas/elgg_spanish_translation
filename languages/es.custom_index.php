<?php
if(elgg_is_active_plugin('custom_index')){
    $language = array(

            'custom:bookmarks' => "Últimos favoritos",
            'custom:groups' => "Últimos grupos",
            'custom:files' => "Últimos archivos subidos",
            'custom:blogs' => "Últimas entradas",
            'custom:members' => "Nuevos miembros de la red",
            'custom:nofiles' => "No existen archivos todavía",
            'custom:nogroups' => "No existen grupos todavía",
    );
    add_translation("es", $language);
}
