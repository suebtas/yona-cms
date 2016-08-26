<?php

return [

    // frontend
    'guest'      => [
        'admin/index'       => '*',
        'index/index'       => '*',
        'index/error'       => '*',
        'page/index'        => '*',
        'publication/index' => '*',
        'sitemap/index'     => '*',
    ],
    'member'     => [
        'index/index' => '*',
    ],
    // backend
    'journalist' => [
        'publication/admin'  => [
            'index',
            'add',
            'edit',
        ],
        'page/admin'         => [
            'index',
            'add',
            'edit',
        ],
        'file-manager/index' => '*',
    ],
    'editor'     => [
        'publication/admin'  => '*',
        'publication/type'   => '*',
        'cms/translate'      => '*',
        'widget/admin'       => '*',
        'file-manager/index' => '*',
        'page/admin'         => '*',
        'tree/admin'         => '*',
        'seo/sitemap'        => '*',
    ],
    'admin'      => [
        'admin/admin-user'   => '*',
        'cms/configuration'  => '*',
        'cms/translate'      => '*',
        'cms/language'       => '*',
        'cms/javascript'     => '*',
        'widget/admin'       => '*',
        'file-manager/index' => '*',
        'page/admin'         => '*',
        'publication/admin'  => '*',
        'publication/type'   => '*',
        'seo/robots'         => '*',
        'seo/sitemap'        => '*',
        'seo/manager'        => '*',
        'tree/admin'         => '*',
        'clinic/index'       => '*',
        'clinic/form'        => '*',
        'clinic/review'        => '*',
    ],
    'clinic-center'      => [
        'admin/index'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
    ],
    'cc-user'      => [
        'admin/index'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
    ],
    'cc-approver'      => [
        'admin/index'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
    ],
    'cc-admin'      => [
        'admin/index'   => '*',
        'admin/admin-user'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
        'clinic-admin/admin-user'   => '*',
        'clinic-admin/amphur'   => '*',
        'clinic-admin/office'   => '*',
    ],
];