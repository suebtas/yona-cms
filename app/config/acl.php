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
        'clinic/review'      => '*',
        'clinic/news' => '*',
        'clinic/news/add' => '*',
        'clinic/news/edit' => '*',
        'clinic/news/delete' => '*',
        'clinic/news/check' => '*',
        'clinic/news/read' => '*',
        'clinic/forum' => '*',
        'clinic/post' => '*',
        'clinic/dataanaly' => '*',
        'clinic/dataanaly/index' => '*',

    ],
    'clinic-center'      => [
        'admin/index'       => '*',
        'index/index'       => '*',
        'index/error'       => '*',
        'admin/index'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
    ],
    'cc-user'      => [
        'admin/index'       => '*',
        'index/index'       => '*',
        'index/error'       => '*',
        'admin/index'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
        'clinic-admin/exportword'   => '*',
        'clinic/news' => '*',
        'clinic/news/check' => '*',
        'clinic/news/read' => '*',
        'clinic/forum' => '*',
        'clinic/post' => '*',
    ],
    'cc-approver'      => [
        'admin/index'       => '*',
        'index/index'       => '*',
        'index/error'       => '*',
        'admin/index'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
        'clinic-admin/exportword'   => '*',
        'clinic/news' => '*',
        'clinic/news/check' => '*',
        'clinic/news/read' => '*',
        'clinic/forum' => '*',
        'clinic/post' => '*',
    ],
    'cc-admin'      => [
        'admin/index'       => '*',
        'index/index'       => '*',
        'index/error'       => '*',
        'admin/index'   => '*',
        'admin/admin-user'   => '*',
        'clinic/index'   => '*',
        'clinic/form'   => '*',
        'clinic/review' => '*',
        'clinic-admin/admin-user'   => '*',
        'clinic-admin/amphur'   => '*',
        'clinic-admin/office'   => '*',
        'clinic-admin/session'   => '*',
        'clinic-admin/surveystatus'   => '*',
        'clinic-admin/survey'   => '*',
        'clinic-admin/exportword'   => '*',
        'clinic-admin/newstype'   => '*',
        'clinic-admin/newslevel'   => '*',
        'clinic-admin/newsimportant'   => '*',
        'clinic/news' => '*',
        'clinic/news/add' => '*',
        'clinic/news/edit' => '*',
        'clinic/news/delete' => '*',
        'clinic/news/check' => '*',
        'clinic/news/read' => '*',
        'clinic/forum' => '*',
        'clinic/post' => '*',
        'clinic/dataanaly' => '*',
        'clinic/dataanaly/index' => '*',
    ],
];
