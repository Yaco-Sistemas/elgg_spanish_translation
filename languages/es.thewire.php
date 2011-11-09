<?php
if(elgg_is_active_plugin("thewire")){
    $language = array(
        /**
         * Menu items and titles
         */
        'thewire' => "Mensajes",
        'thewire:everyone' => "Todos los mensajes",
        'thewire:user' => "Mensajes de %s",
        'thewire:friends' => "Mensajes de amigos",
        'thewire:reply' => "Responder",
        'thewire:replying' => "Responder a %s (@%s) quien escribe",
        'thewire:thread' => "Debate",
        'thewire:charleft' => "caracteres restantes",
        'thewire:tags' => "Mensajes que coinciden con el tag '%s'",
        'thewire:noposts' => "No hay mensajes a&uacute;n",
        'item:object:thewire' => "Mensajes",
        'thewire:update' => 'Actualizar',

        'thewire:previous' => "Anterior",
        'thewire:hide' => "Ocultar",
        'thewire:previous:help' => "Ver publicaci&oacute;n anterior",
        'thewire:hide:help' => "Ocultar publicaci&oacute;n anterior",

        /**
         * The wire river
         */
        'river:create:object:thewire' => "%s public&oacute; un nuevo %s",
        'thewire:wire' => 'mensaje',

        /**
         * Wire widget
         */
        'thewire:widget:desc' => 'Mostrar tus &uacute;ltimos mensajes',
        'thewire:num' => 'Cantidad de comentarios a mostrar',
        'thewire:moreposts' => 'M&aacute;s mensajes',

        /**
         * Status messages
         */
        'thewire:posted' => "El mensaje se public&oacute; correctamente.",
        'thewire:deleted' => "El mensaje se elimin&oacute; correctamente.",
        'thewire:blank' => "Debe ingresar contenido para poder publicar.",
        'thewire:notfound' => "Lo sentimos, no se pudo encontrar la publicaci&oacute;n solicitada.",
        'thewire:notdeleted' => "Lo sentimos, no se pudo eliminar el mensaje.",

        /**
         * Notifications
         */
        'thewire:notify:subject' => "Nuevo mensaje",
        'thewire:notify:reply' => '%s respondi&oacute; a %s con un mensaje:',
        'thewire:notify:post' => '%s public&oacute; un nuevo mensaje:',
    );
    add_translation("es", $language);
}
