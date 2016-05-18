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
            'dashboard/adminlte'    => __DIR__ . '/../../templates/adminlte/layout/version2.phtml',
        ],
        'paths'      => [            
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
