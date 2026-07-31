<?php

return [

    // General / no encontrado
    'item_not_found_title' => 'Elemento no encontrado',
    'item_not_found_body' => 'Este elemento pudo haber sido movido o eliminado.',
    'folder_not_found_title' => 'Carpeta no encontrada',
    'folder_not_found_body' => 'Esta carpeta pudo haber sido movida o eliminada.',
    'file_manager_refreshed' => 'Gestor de archivos actualizado',

    // Permisos
    'not_authorized_create_folders' => 'No estás autorizado a crear carpetas',
    'not_authorized_delete_items' => 'No estás autorizado a eliminar elementos',
    'not_authorized_delete_item' => 'No estás autorizado a eliminar este elemento',
    'not_authorized_upload_files' => 'No estás autorizado a subir archivos',
    'not_authorized_rename_item' => 'No estás autorizado a renombrar este elemento',
    'not_authorized_rename_folder' => 'No estás autorizado a renombrar esta carpeta',
    'not_authorized_move_item' => 'No estás autorizado a mover este elemento',
    'not_authorized_move_folder' => 'No estás autorizado a mover esta carpeta',

    // Carpetas
    'folder_created' => 'Carpeta creada correctamente',
    'subfolder_created' => 'Subcarpeta creada correctamente',
    'folder_renamed' => 'Carpeta renombrada correctamente',
    'folder_moved' => 'Carpeta movida correctamente',
    'cannot_move_folder_into_itself' => 'No se puede mover una carpeta dentro de sí misma',
    'failed_rename_folder' => 'Error al renombrar la carpeta',
    'failed_move_folder' => 'Error al mover la carpeta',

    // Borrado
    'item_deleted' => 'Elemento eliminado',
    'items_deleted' => ':count elemento(s) eliminado(s)',
    'failed_delete_item' => 'Error al eliminar el elemento',

    // Renombrado
    'item_renamed' => 'Elemento renombrado correctamente',
    'failed_rename_item' => 'Error al renombrar el elemento',

    // Movimiento
    'item_moved' => 'Elemento movido correctamente',
    'items_moved' => ':count elemento(s) movido(s) correctamente',
    'items_move_failed' => ':count elemento(s) no se pudieron mover',
    'failed_move_item' => 'Error al mover el elemento',

    // Subida de archivos
    'no_files_selected' => 'No se ha seleccionado ningún archivo',
    'some_files_rejected' => 'Algunos archivos fueron rechazados',
    'file_size_exceeds_limit' => ':filename (:filesizeMB) supera el límite de :maxsizeMB',
    'files_uploaded' => ':count archivo(s) subido(s) correctamente',
    'some_files_upload_failed' => 'Algunos archivos no se pudieron subir',

    // Errores del adaptador (DatabaseAdapter)
    'folder_name_exists' => 'Ya existe una carpeta con este nombre',
    'failed_create_folder' => 'Error al crear la carpeta: :error',
    'failed_upload_file' => 'Error al subir el archivo: :error',
    'item_deleted_by_another_process' => 'El elemento fue eliminado por otro proceso',
    'item_name_exists_in_folder' => 'Ya existe un elemento con este nombre en esta carpeta',
    'failed_rename' => 'Error al renombrar: :error',
    'item_already_in_folder' => 'El elemento ya está en esta carpeta',
    'target_folder_not_found' => 'Carpeta de destino no encontrada',
    'cannot_move_into_itself' => 'No se puede mover una carpeta dentro de sí misma o de sus subcarpetas',
    'item_name_exists_in_destination' => 'Ya existe un elemento con este nombre en la carpeta de destino',
    'failed_move' => 'Error al mover: :error',
    'failed_delete' => 'Error al eliminar: :error',

];
