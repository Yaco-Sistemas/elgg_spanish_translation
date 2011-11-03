<?php
if(elgg_is_active_plugin("polls")){
    $languages = array(
        'poll' => "Encuesta",
                    'polls:add' => "Añadir Encuesta",
                    'river:commented:object:poll' => "encuesta",
        'polls' => "Encuestas",
        'polls:votes' => "votos",
        'polls:user' => "encuesta perteneciente a %s",
        'polls:group_polls' => "Grupos de encuestas",
        'polls:user:friends' => "encuestas %s pertenecientes a amigos",
        'polls:your' => "Tus encuestas",
        'polls:not_me' => "encuestas de %s",
        'polls:posttitle' => "encuesta de %s: %s",
        'polls:friends' => "Encuestas de mis amigos",
        'polls:not_me_friends' => "encuestas de los amigos de %s",
        'polls:yourfriends' => "Las últimas encuestas de tus amigos",
        'polls:everyone' => "Todas las encuestas del sitio",
        'polls:read' => "Leer encuesta",
        'polls:addpost' => "Crear una encuesta",
        'polls:editpost' => "Editar una encuesta",
        'polls:text' => "Texto de la encuesta",
        'polls:strapline' => "%s",
        'item:object:poll' => 'Encuestas',
        'polls:question' => "Pregunta de la encuesta",
        'polls:responses' => "Elecciones de respuesta",
        'polls:results' => "[+] Enseñar los resultados",
        'polls:show_results' => "Enseñar los resultados",
        'polls:show_poll' => "Enseñar encuesta",
        'polls:add_choice' => "Añadir opción de respuesta",
        'polls:delete_choice' => "Borrar esta elección",
        'polls:settings:group:title' => "Grupos de encuestas",
        'polls:settings:group_polls_default' => "sí, activado por defecto",
        'polls:settings:group_polls_not_default' => "no, desactivado por defecto",
        'polls:settings:no' => "no",
        'polls:settings:group_profile_display:title' => "Si los grupos de encuestas están activados, ¿dónde se deben enseñar las encuestas en los perfiles de grupo",
        'polls:settings:group_profile_display_option:left' => "izquierda",
        'polls:settings:group_profile_display_option:right' => "derecha",
        'polls:settings:group_profile_display_option:none' => "ninguno",
        'polls:settings:group_access:title' => "Si los grupos de encuestas están activados, ¿dónde se crean las encuestas",
        'polls:settings:group_access:admins' => "dueños de grupo y administradores sólo",
        'polls:settings:group_access:members' => "cualquier miembro del grupo",
    /**
     * poll widget
     **/
        'polls:latest_widget_title' => "Últimas encuestas de la comunidad",
        'polls:latest_widget_description' => "Enseñar las encuestas más recientes.",
        'polls:my_widget_title' => "Mis encuestas",
        'polls:my_widget_description' => "Este widget mostrará tus encuestas.",
        'polls:widget:label:displaynum' => "¿Cuántas encuestas quieres mostrar?",
        'polls:individual' => "Última encuesta",
        'poll_individual_group:widget:description' => "Mostrar la última encuesta para este grupo",
        'poll_individual:widget:description' => "Mostrar tu última encuesta",
        'polls:widget:no_polls' => "Todavía no hay encuestas para %s.",
        'polls:widget:nonefound' => "No se encontraron encuestas",
        'polls:widget:think' => "¡Házle saber a %s lo que piensas!",
        'polls:enable_polls' => "Activa las encuestas",
        'polls:group_identifier' => "(en %s)",
     /**
     * poll river
     **/
        //generic terms to use
        'polls:river:created' => "%s creada",
        'polls:river:updated' => "%s actualizada",
        'polls:river:posted' => "%s añadida",
        'polls:river:voted' => "%s votada",
        //these get inserted into the river links to take the user to the entity
        'polls:river:create' => "una nueva encuesta: ",
        'polls:river:update' => "la encuesta: ",
        'poll:river:annotate' => "un comentario en esta encuesta",
        'polls:river:vote' => "a la encuesta: ",
    /**
     * Status messages
     */

        'polls:posted' => "Tu encuesta ha sido añadida con éxito",
        'polls:responded' => "Gracias por responder, tu voto ha sido grabado.",
        'polls:deleted' => "Tu encuesta fue borrada con éxito",
        'polls:totalvotes' => "Número total de votos: ",
        'polls:voted' => "Tu voto ha sido emitido para esta encuesta. Gracias por votar en esta encuesta.",

    /**
     * Error messages
     */

        'polls:save:failure' => "Tu encuesta no pudo ser guardada. Intenta de nuevo por favor.",
        'polls:blank' => "Perdón: tienes que rellenar la pregunta y las respuestas antes de crear una encuesta",
        'polls:novote' => "Perdón: necesitas escoger una opción de voto para esta encuesta.",
        'polls:notfound' => "Perdón: no hemos podido encontrar la encuesta especificada",
        'polls:nonefound' => "Ninguna encuesta ha sido encontrada para %s",
        'polls:notdeleted' => "Perdón: no hemos podido borrar esta encuesta."
    );
add_translation("es", $languages);
}
