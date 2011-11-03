<?php
if(elgg_is_active_plugin("tinymce")){
    $language = array(
        'tinymce:remove' => "Quitar editor",
        'tinymce:add' => "Agregar editor",
        'tinymce:word_count' => 'Cantidad de palabras: ',
    );
    add_translation("es", $language);
}
