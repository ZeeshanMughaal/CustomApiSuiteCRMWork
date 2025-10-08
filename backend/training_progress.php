<?php
$dictionary['training_progress'] = [
    'table' => 'training_progress',
    'fields' => [
        'id' => [
            'name' => 'id',
            'type' => 'id',
            'required' => true,
        ],
        'user_id' => [
            'name' => 'user_id',
            'type' => 'id',
            'required' => true,
            'comment' => 'Reference to the user',
        ],
        'question_id' => [
            'name' => 'question_id',
            'type' => 'id',
            'required' => true,
            'comment' => 'Reference to the question in question_bank',
        ],
        'is_completed' => [
            'name' => 'is_completed',
            'type' => 'bool',
            'default' => 0,
            'comment' => 'Marks whether the question is completed by the user',
        ],
        'completed_at' => [
            'name' => 'completed_at',
            'type' => 'datetime',
            'comment' => 'Timestamp when the question was completed',
        ],
    ],
    'indices' => [
        [
            'name' => 'training_progress_pk',
            'type' => 'primary',
            'fields' => ['id'],
        ],
        [
            'name' => 'idx_user_id',
            'type' => 'index',
            'fields' => ['user_id'],
        ],
        [
            'name' => 'idx_question_id',
            'type' => 'index',
            'fields' => ['question_id'],
        ],
    ],
    'relationships' => [
        'training_progress_users' => [
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'training_progress',
            'rhs_table' => 'training_progress',
            'rhs_key' => 'user_id',
            'relationship_type' => 'one-to-many',
        ],
        'training_progress_question_bank' => [
            'lhs_module' => 'question_bank',
            'lhs_table' => 'question_bank',
            'lhs_key' => 'id',
            'rhs_module' => 'training_progress',
            'rhs_table' => 'training_progress',
            'rhs_key' => 'question_id',
            'relationship_type' => 'one-to-many',
        ],
    ],
];
