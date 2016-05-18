<?php

return [
    'dependencies' => [
        'factories' => [
            'Zend\Expressive\FinalHandler' =>
                Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,

            Zend\Expressive\Template\TemplateRendererInterface::class =>
                Zend\Expressive\ZendView\ZendViewRendererFactory::class,

            Zend\View\HelperPluginManager::class =>
                Zend\Expressive\ZendView\HelperPluginManagerFactory::class,
        ],
    ],
    'templates'     => [
        'layout'    => 'dashboard/adminlte',
        'map'       => [
            'dashboard/adminlte'                => __DIR__ . '/../../templates/adminlte/layout/version2.phtml',
            'error/error'                       => __DIR__ . '/../../templates/error/error.phtml',
            'error/404'                         => __DIR__ . '/../../templates/error/404.phtml',
            'template/footer'                   => __DIR__ . '/../../templates/layout/partial/footer.phtml',
            'template/navigation/sidebar'       =>
                __DIR__ . '/../../templates/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => __DIR__ . '/../../templates/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   =>
                __DIR__ . '/../../templates/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => __DIR__ . '/../../templates/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => __DIR__ . '/../../templates/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    =>
                __DIR__ . '/../../templates/layout/partial/navigation/breadcrumbs.phtml',
        ],
        'paths'      => [
            'error'     => [__DIR__ . '/../../templates/error'],
            'widget'    => [__DIR__ . '/../../templates/adminlte/widget'],
            'page'      => [__DIR__ . '/../../templates/adminlte/page']
        ]
    ],
    'view_helpers'  => [
        'factories'     => [],
        'invokables'    => [],
        'aliases'       => []
    ]
];
