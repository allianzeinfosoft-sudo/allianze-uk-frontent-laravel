<?php

return [

    'main' => [
        [
            'title' => 'Home',
            'url'   => '/',
        ],

        [
            'title' => 'About Us',
            'url'   => '/about-us',
        ],

        [
            'title' => 'Services',
            'url'   => '#',
            'class' => 'menu-item-has-children',
            'children' => [
                [
                    'title' => 'Business Process Service',
                    'url' => '#',
                    'class' => 'menu-item-has-children',
                    'children' => [
                        ['title' => 'Data Automation Services', 'url' => 'services/data-automation-services'],
                        ['title' => 'Market Research and Financial Services', 'url' => 'services/market-research-and-financial-services'],
                        ['title' => 'Virtual Assistant Service', 'url' => 'services/virtual-assistant-service'],
                        ['title' => 'Healthcare BPO Services', 'url' => 'services/healthcare-bpo-services'],
                        ['title' => 'Insurance Outsourcing', 'url' => 'services/insurance-outsourcing'],
                        ['title' => 'Data Entry Services', 'url' => 'services/data-entry-services'],
                        ['title' => 'Telecom Survey Services', 'url' => 'services/telecom-survey-services'],
                        ['title' => 'Scanning and Indexing Services', 'url' => 'services/scanning-and-indexing-services'],
                        ['title' => 'Staff Augmentation Services', 'url' => '/services/staff-augmentation-services'],
                    ]
                ],
                [
                    'title' => 'Engineering Services',
                    'url' => '#',
                    'class' => 'menu-item-has-children',
                    'children' => [
                        ['title' => 'CAD Services', 'url' => 'services/cad-services'],
                        ['title' => 'Engineering Design Service', 'url' => 'services/engineering-design-service'],
                        ['title' => 'Engineering Documentation Services', 'url' => 'services/engineering-documentation-services'],
                    ]
                ],
                [
                    'title' => 'Image Editing Services',
                    'url' => '#',
                    'class' => 'menu-item-has-children',
                    'children' => [
                        ['title' => 'Image Retouching Service', 'url' => 'services/image-retouching-service'],
                        ['title' => 'Real Estate Image Editing Service', 'url' => 'services/real-estate-image-editing-service'],
                        ['title' => 'Wedding Image Editing Services', 'url' => 'services/wedding-image-editing-services'],
                        ['title' => 'Adobe Photoshop Services', 'url' => 'services/adobe-photoshop-services'],                        
                    ]
                ],
            ],
        ],
        [
            'title' => 'Blogs',
            'url'   => '/blogs',
        ],
        [
            'title' => 'Contact',
            'url'   => '/contact-us',
        ],

    ],

];
