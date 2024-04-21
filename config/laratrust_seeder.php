<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'pengukuran' => 'c,r,u,d',
            'kinerja' => 'c,r,u,d',
            'workorder' => 'c,r,u,d',
            'aset' => 'c,r,u,d',
            'komisioning' => 'c,r,u,d',
        ],
        'admin' => [
            'pengukuran' => 'c,r,u,d',
            'kinerja' => 'c,r,u,d',
            'workorder' => 'c,r,u,d',
            'aset' => 'c,r,u,d',
            'komisioning' => 'c,r,u,d',
        ],
        'yantek' => [
            'pengukuran' => 'c,r,u,d',
            'kinerja' => 'c,r,u,d',
            'workorder' => 'c,r,u,d',
            'aset' => 'c,r,u,d',
            'komisioning' => 'c,r,u,d',
        ],
        'fasop' => [
            'pengukuran' => 'c,r,u,d',
            'kinerja' => 'r',
            'workorder' => 'r',
            'aset' => 'c,r,u,d',
            'komisioning' => 'r',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
