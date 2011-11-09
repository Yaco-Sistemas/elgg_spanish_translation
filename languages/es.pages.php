<?php

if(elgg_is_active_plugin("pages")){

$language = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Páginas",
	'pages:owner' => " Páginas de %s",
	'pages:friends' => "Páginas de amigos",
	'pages:all' => "Todas las páginas",
	'pages:add' => "Añadir página",

	'pages:group' => "Páginas del grupo",
	'groups:enablepages' => 'Páginas disponibles del grupo',

	'pages:edit' => "Editar esta página",
	'pages:delete' => "Borrar esta página",
	'pages:history' => "Historial",
	'pages:view' => "Ver página",
	'pages:revision' => "Revisión",

	'pages:navigation' => "Página de navegación",
	'pages:via' => "vía",
	'item:object:page_top' => 'Páginas principales',
	'item:object:page' => 'Páginas',
	'pages:nogroup' => 'Este grupo no tiene aún páginas',
	'pages:more' => 'Más páginas',
	'pages:none' => 'No hay páginas creadas aún',

	/**
	* River
	**/

	'river:create:object:page' => '%s creó la página %s',
	'river:create:object:page_top' => '%s creó la página %s',
	'river:update:object:page' => '%s actualizó la página %s',
	'river:update:object:page_top' => '%s actualizó la página %s',
	'river:comment:object:page' => '%s comentó en la página %s',
	'river:comment:object:page_top' => '%s comentó en la página %s',

	/**
	 * Form fields
	 */

	'pages:title' => 'Título de la página',
	'pages:description' => 'Texto de la página',
	'pages:tags' => 'Etiquetas',
	'pages:access_id' => 'Acceso de lectura',
	'pages:write_access_id' => 'Acceso de escritura',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No tienes acceso a la página',
	'pages:cantedit' => 'No puedes editar la página',
	'pages:saved' => 'Página guardada',
	'pages:notsaved' => 'La página no pudo ser guardada',
	'pages:error:no_title' => 'Debes especificar un título para esta página.',
	'pages:delete:success' => 'La página fue eliminada correctamente.',
	'pages:delete:failure' => 'La página no pudo ser eliminada.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Última actualización %s por %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revisión creada %s por %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Nímero de páginas para mostrar',
	'pages:widget:description' => "Esta es una lista de tus páginas.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Ver página",
	'pages:label:edit' => "Editar página",
	'pages:label:history' => "Historial de la página",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Esta página",
	'pages:sidebar:children' => "Sub-págínas",
	'pages:sidebar:parent' => "Padre",

	'pages:newchild' => "Crear una sub-página",
	'pages:backtoparent' => "Volver a '%s'",
);

add_translation("es", $language);
}

