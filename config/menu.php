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
                ['title' => 'Staff Augmentation Services', 'url' => '/services/staff-augmentation-services'],
                ['title' => 'Data Automation Services', 'url' => 'services/data-automation-services'],
                ['title' => 'Data Entry Services', 'url' => 'services/data-entry-services'],
                ['title' => 'Adobe Photoshop Services', 'url' => 'services/adobe-photoshop-services'],
                ['title' => 'CAD Services', 'url' => 'services/cad-services'],
                ['title' => 'Engineering Design Service', 'url' => 'services/engineering-design-service'],
                ['title' => 'Engineering Documentation Services', 'url' => 'services/engineering-documentation-services'],
                ['title' => 'Healthcare BPO Services', 'url' => 'services/healthcare-bpo-services'],
                ['title' => 'Image Retouching Service', 'url' => 'services/image-retouching-service'],
                ['title' => 'Insurance Outsourcing', 'url' => 'services/insurance-outsourcing'],
                ['title' => 'Market Research and Financial Services', 'url' => 'services/market-research-and-financial-services'],
                ['title' => 'Real Estate Image Editing Service', 'url' => 'services/real-estate-image-editing-service'],
                ['title' => 'Scanning and Indexing Services', 'url' => 'services/scanning-and-indexing-services'],
                ['title' => 'Telecom Survey Services', 'url' => 'services/telecom-survey-services'],
                ['title' => 'Virtual Assistant Service', 'url' => 'services/virtual-assistant-service'],
                ['title' => 'Wedding Image Editing Services', 'url' => 'services/wedding-image-editing-services'],
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
