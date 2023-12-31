<?php
return [
    'multiple_database' => true,
    /**
     * Revision table prefix
     */
    'table_prefix' => 'comments',
    /**
     * max number of revision row,
     */
    'max_revision_row' => 20,
    /**
     * User model
     */
    'user_model' => App\Models\User::class,
    'user_column_name' => 'user_id',
];
