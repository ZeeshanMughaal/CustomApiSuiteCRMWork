<?php
$dictionary['question_bank'] = [
    'table' => 'question_bank',
    'fields' => [
        'id' => [
            'name' => 'id',
            'type' => 'id',
            'required' => true,
        ],
        'step_number' => [
            'name' => 'step_number',
            'type' => 'int',
            'required' => true,
            'comment' => 'Step number to track which step this question belongs to',
        ],
        'title' => [
            'name' => 'title',
            'type' => 'varchar',
            'len' => 255,
            'required' => true,
            'comment' => 'Question title',
        ],
        'date_entered' => [
            'name' => 'date_entered',
            'type' => 'datetime',
        ],
    ],
    'indices' => [
        [
            'name' => 'question_bank_pk',
            'type' => 'primary',
            'fields' => ['id'],
        ],
        [
            'name' => 'idx_step_number',
            'type' => 'index',
            'fields' => ['step_number'],
        ],
    ],
];
