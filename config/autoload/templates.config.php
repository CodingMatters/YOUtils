<?php

$adminlte   = __DIR__ . "/../../templates/adminlte";
$error      = __DIR__ . "/../../templates/error";

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
            'dashboard/adminlte'                => $adminlte . '/layout/version2.phtml',
            'error/error'                       => $error . '/error.phtml',
            'error/404'                         => $error . '/404.phtml',
            'template/footer'                   => $adminlte . '/layout/partial/footer.phtml',
            'template/navigation/sidebar'       => $adminlte . '/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => $adminlte . '/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   => $adminlte . '/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => $adminlte . '/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => $adminlte . '/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    => $adminlte . '/layout/partial/navigation/breadcrumbs.phtml',
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
