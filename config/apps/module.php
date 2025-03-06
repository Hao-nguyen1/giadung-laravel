<?php 
return [
    'module' => [
        [
            'title' => 'Quản lý người dùng',
            'icon' => 'fa fa-user',
            'name' => ['user'],
            'subModule' => [
                [
                    'title' => 'Quản lý người dùng',
                    'route' => 'user/index'
                ],
                [
                    'title' => 'Quản lý nhóm người dùng',
                    'route' => 'user/catalogue/index'
                ]
            ],
        ],
        [
        'title' => 'Quản lý Bài viết',
        'icon' => 'fa fa-newspaper-o',
        'name' => ['post'],
        'subModule' => [
                [
                    'title' => 'Quản lý Bài viết',
                    'route' => 'post/index'
                ],
                [
                    'title' => 'Quản lý nhóm Bài viết',
                    'route' => 'post/catalogue/index'
                ]
            ],
        ],
        [
            'title' => 'Cấu hình chung',
            'icon' => 'fa fa-sliders',
            'name' => ['language'],
            'subModule' => [
                    [
                        'title' => 'Quản lý ngôn ngữ',
                        'route' => 'language/index'
                    ]
                ],
            ],
    ],
];

