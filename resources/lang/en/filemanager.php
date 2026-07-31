<?php

return [

    // General / not found
    'item_not_found_title' => 'Item not found',
    'item_not_found_body' => 'This item may have been moved or deleted.',
    'folder_not_found_title' => 'Folder not found',
    'folder_not_found_body' => 'This folder may have been moved or deleted.',
    'file_manager_refreshed' => 'File manager refreshed',

    // Permissions
    'not_authorized_create_folders' => 'You are not authorized to create folders',
    'not_authorized_delete_items' => 'You are not authorized to delete items',
    'not_authorized_delete_item' => 'You are not authorized to delete this item',
    'not_authorized_upload_files' => 'You are not authorized to upload files',
    'not_authorized_rename_item' => 'You are not authorized to rename this item',
    'not_authorized_rename_folder' => 'You are not authorized to rename this folder',
    'not_authorized_move_item' => 'You are not authorized to move this item',
    'not_authorized_move_folder' => 'You are not authorized to move this folder',

    // Folders
    'folder_created' => 'Folder created successfully',
    'subfolder_created' => 'Subfolder created successfully',
    'folder_renamed' => 'Folder renamed successfully',
    'folder_moved' => 'Folder moved successfully',
    'cannot_move_folder_into_itself' => 'Cannot move folder into itself',
    'failed_rename_folder' => 'Failed to rename folder',
    'failed_move_folder' => 'Failed to move folder',

    // Delete
    'item_deleted' => 'Item deleted',
    'items_deleted' => ':count item(s) deleted',
    'failed_delete_item' => 'Failed to delete item',

    // Rename
    'item_renamed' => 'Item renamed successfully',
    'failed_rename_item' => 'Failed to rename item',

    // Move
    'item_moved' => 'Item moved successfully',
    'items_moved' => ':count item(s) moved successfully',
    'items_move_failed' => ':count item(s) could not be moved',
    'failed_move_item' => 'Failed to move item',

    // Upload
    'no_files_selected' => 'No files selected',
    'some_files_rejected' => 'Some files were rejected',
    'file_size_exceeds_limit' => ':filename (:filesizeMB) exceeds the :maxsizeMB limit',
    'files_uploaded' => ':count file(s) uploaded successfully',
    'some_files_upload_failed' => 'Some files could not be uploaded',

    // Adapter errors (DatabaseAdapter)
    'folder_name_exists' => 'A folder with this name already exists',
    'failed_create_folder' => 'Failed to create folder: :error',
    'failed_upload_file' => 'Failed to upload file: :error',
    'item_deleted_by_another_process' => 'Item was deleted by another process',
    'item_name_exists_in_folder' => 'An item with this name already exists in this folder',
    'failed_rename' => 'Failed to rename: :error',
    'item_already_in_folder' => 'Item is already in this folder',
    'target_folder_not_found' => 'Target folder not found',
    'cannot_move_into_itself' => 'Cannot move a folder into itself or its descendants',
    'item_name_exists_in_destination' => 'An item with this name already exists in the destination folder',
    'failed_move' => 'Failed to move: :error',
    'failed_delete' => 'Failed to delete: :error',

];
