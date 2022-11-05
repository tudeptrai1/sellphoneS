<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-2',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Overview 2'
                    ],
                    'dashboard-overview-3' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-3',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Overview 3'
                    ],
                    'dashboard-overview-4' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-4',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Overview 4'
                    ]
                ]
            ],
            'menu-layout' => [
                'icon' => 'box',
                'title' => 'Menu Layout',
                'sub_menu' => [
                    'side-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Side Menu'
                    ],
                    'simple-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Simple Menu'
                    ],
                    'top-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Top Menu'
                    ]
                ]
            ],
            'e-commerce' => [
                'icon' => 'shopping-bag',
                'title' => 'E-Commerce',
                'sub_menu' => [
                    'categories' => [
                        'icon' => '',
                        'route_name' => 'categories',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Categories'
                    ],
                    'add-product' => [
                        'icon' => '',
                        'route_name' => 'add-product',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Add Product',
                    ],
                    'products' => [
                        'icon' => '',
                        'title' => 'Products',
                        'sub_menu' => [
                            'product-list' => [
                                'icon' => '',
                                'route_name' => 'product-list',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Product List'
                            ],
                            'product-grid' => [
                                'icon' => '',
                                'route_name' => 'product-grid',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Product Grid'
                            ]
                        ]
                    ],
                    'transactions' => [
                        'icon' => '',
                        'title' => 'Transactions',
                        'sub_menu' => [
                            'transaction-list' => [
                                'icon' => '',
                                'route_name' => 'transaction-list',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Transaction List'
                            ],
                            'transaction-detail' => [
                                'icon' => '',
                                'route_name' => 'transaction-detail',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Transaction Detail'
                            ]
                        ]
                    ],
                    'sellers' => [
                        'icon' => '',
                        'title' => 'Sellers',
                        'sub_menu' => [
                            'seller-list' => [
                                'icon' => '',
                                'route_name' => 'seller-list',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Seller List'
                            ],
                            'seller-detail' => [
                                'icon' => '',
                                'route_name' => 'seller-detail',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Seller Detail'
                            ]
                        ]
                    ],
                    'reviews' => [
                        'icon' => '',
                        'route_name' => 'reviews',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Reviews'
                    ],
                ]
            ],
            'inbox' => [
                'icon' => 'inbox',
                'route_name' => 'inbox',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Inbox'
            ],
            'file-manager' => [
                'icon' => 'hard-drive',
                'route_name' => 'file-manager',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'File Manager'
            ],
            'point-of-sale' => [
                'icon' => 'credit-card',
                'route_name' => 'point-of-sale',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Point of Sale'
            ],
            'chat' => [
                'icon' => 'message-square',
                'route_name' => 'chat',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Chat'
            ],
            'post' => [
                'icon' => 'file-text',
                'route_name' => 'post',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Post'
            ],
            'calendar' => [
                'icon' => 'calendar',
                'route_name' => 'calendar',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Calendar'
            ],
            'devider',
            'crud' => [
                'icon' => 'edit',
                'title' => 'Crud',
                'sub_menu' => [
                    'crud-data-list' => [
                        'icon' => '',
                        'route_name' => 'crud-data-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Data List'
                    ],
                    'crud-form' => [
                        'icon' => '',
                        'route_name' => 'crud-form',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Form'
                    ]
                ]
            ],
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
                'sub_menu' => [
                    'users-layout-1' => [
                        'icon' => '',
                        'route_name' => 'users-layout-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Layout 1'
                    ],
                    'users-layout-2' => [
                        'icon' => '',
                        'route_name' => 'users-layout-2',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Layout 2'
                    ],
                    'users-layout-3' => [
                        'icon' => '',
                        'route_name' => 'users-layout-3',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Layout 3'
                    ]
                ]
            ],
            'profile' => [
                'icon' => 'trello',
                'title' => 'Profile',
                'sub_menu' => [
                    'profile-overview-1' => [
                        'icon' => '',
                        'route_name' => 'profile-overview-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Overview 1'
                    ],
                    'profile-overview-2' => [
                        'icon' => '',
                        'route_name' => 'profile-overview-2',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Overview 2'
                    ],
                    'profile-overview-3' => [
                        'icon' => '',
                        'route_name' => 'profile-overview-3',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Overview 3'
                    ]
                ]
            ],
            'pages' => [
                'icon' => 'layout',
                'title' => 'Pages',
                'sub_menu' => [
                    'wizards' => [
                        'icon' => '',
                        'title' => 'Wizards',
                        'sub_menu' => [
                            'wizard-layout-1' => [
                                'icon' => '',
                                'route_name' => 'wizard-layout-1',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'wizard-layout-2' => [
                                'icon' => '',
                                'route_name' => 'wizard-layout-2',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'wizard-layout-3' => [
                                'icon' => '',
                                'route_name' => 'wizard-layout-3',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'blog' => [
                        'icon' => '',
                        'title' => 'Blog',
                        'sub_menu' => [
                            'blog-layout-1' => [
                                'icon' => '',
                                'route_name' => 'blog-layout-1',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'blog-layout-2' => [
                                'icon' => '',
                                'route_name' => 'blog-layout-2',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'blog-layout-3' => [
                                'icon' => '',
                                'route_name' => 'blog-layout-3',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'pricing' => [
                        'icon' => '',
                        'title' => 'Pricing',
                        'sub_menu' => [
                            'pricing-layout-1' => [
                                'icon' => '',
                                'route_name' => 'pricing-layout-1',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'pricing-layout-2' => [
                                'icon' => '',
                                'route_name' => 'pricing-layout-2',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'invoice' => [
                        'icon' => '',
                        'title' => 'Invoice',
                        'sub_menu' => [
                            'invoice-layout-1' => [
                                'icon' => '',
                                'route_name' => 'invoice-layout-1',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'invoice-layout-2' => [
                                'icon' => '',
                                'route_name' => 'invoice-layout-2',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'faq' => [
                        'icon' => '',
                        'title' => 'FAQ',
                        'sub_menu' => [
                            'faq-layout-1' => [
                                'icon' => '',
                                'route_name' => 'faq-layout-1',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 1'
                            ],
                            'faq-layout-2' => [
                                'icon' => '',
                                'route_name' => 'faq-layout-2',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 2'
                            ],
                            'faq-layout-3' => [
                                'icon' => '',
                                'route_name' => 'faq-layout-3',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'login' => [
                        'icon' => '',
                        'route_name' => 'login',
                        'params' => [
                            'layout' => 'login'
                        ],
                        'title' => 'Login'
                    ],
                    'register' => [
                        'icon' => '',
                        'route_name' => 'register',
                        'params' => [
                            'layout' => 'login'
                        ],
                        'title' => 'Register'
                    ],
                    'error-page' => [
                        'icon' => '',
                        'route_name' => 'error-page',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Error Page'
                    ],
                    'update-profile' => [
                        'icon' => '',
                        'route_name' => 'update-profile',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Update profile'
                    ],
                    'change-password' => [
                        'icon' => '',
                        'route_name' => 'change-password',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Change Password'
                    ]
                ]
            ],
            'devider',
            'components' => [
                'icon' => 'inbox',
                'title' => 'Components',
                'sub_menu' => [
                    'grid' => [
                        'icon' => '',
                        'title' => 'Grid',
                        'sub_menu' => [
                            'regular-table' => [
                                'icon' => '',
                                'route_name' => 'regular-table',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Regular Table'
                            ],
                            'tabulator' => [
                                'icon' => '',
                                'route_name' => 'tabulator',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Tabulator'
                            ]
                        ]
                    ],
                    'overlay' => [
                        'icon' => '',
                        'title' => 'Overlay',
                        'sub_menu' => [
                            'modal' => [
                                'icon' => '',
                                'route_name' => 'modal',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Modal'
                            ],
                            'slide-over' => [
                                'icon' => '',
                                'route_name' => 'slide-over',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Slide Over'
                            ],
                            'notification' => [
                                'icon' => '',
                                'route_name' => 'notification',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Notification'
                            ],
                        ]
                    ],
                    'tab' => [
                        'icon' => '',
                        'route_name' => 'tab',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Tab'
                    ],
                    'accordion' => [
                        'icon' => '',
                        'route_name' => 'accordion',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Accordion'
                    ],
                    'button' => [
                        'icon' => '',
                        'route_name' => 'button',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Button'
                    ],
                    'alert' => [
                        'icon' => '',
                        'route_name' => 'alert',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Alert'
                    ],
                    'progress-bar' => [
                        'icon' => '',
                        'route_name' => 'progress-bar',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Progress Bar'
                    ],
                    'tooltip' => [
                        'icon' => '',
                        'route_name' => 'tooltip',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Tooltip'
                    ],
                    'dropdown' => [
                        'icon' => '',
                        'route_name' => 'dropdown',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Dropdown'
                    ],
                    'typography' => [
                        'icon' => '',
                        'route_name' => 'typography',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Typography'
                    ],
                    'icon' => [
                        'icon' => '',
                        'route_name' => 'icon',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Icon'
                    ],
                    'loading-icon' => [
                        'icon' => '',
                        'route_name' => 'loading-icon',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Loading Icon'
                    ]
                ]
            ],
            'forms' => [
                'icon' => 'sidebar',
                'title' => 'Forms',
                'sub_menu' => [
                    'regular-form' => [
                        'icon' => '',
                        'route_name' => 'regular-form',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Regular Form'
                    ],
                    'datepicker' => [
                        'icon' => '',
                        'route_name' => 'datepicker',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Datepicker'
                    ],
                    'tom-select' => [
                        'icon' => '',
                        'route_name' => 'tom-select',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Tom Select'
                    ],
                    'file-upload' => [
                        'icon' => '',
                        'route_name' => 'file-upload',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'File Upload'
                    ],
                    'wysiwyg-editor' => [
                        'icon' => '',
                        'title' => 'Wysiwyg Editor',
                        'sub_menu' => [
                            'wysiwyg-editor-classic' => [
                                'icon' => '',
                                'route_name' => 'wysiwyg-editor-classic',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Classic'
                            ],
                            'wysiwyg-editor-inline' => [
                                'icon' => '',
                                'route_name' => 'wysiwyg-editor-inline',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Inline'
                            ],
                            'wysiwyg-editor-balloon' => [
                                'icon' => '',
                                'route_name' => 'wysiwyg-editor-balloon',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Balloon'
                            ],
                            'wysiwyg-editor-balloon-block' => [
                                'icon' => '',
                                'route_name' => 'wysiwyg-editor-balloon-block',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Balloon Block'
                            ],
                            'wysiwyg-editor-document' => [
                                'icon' => '',
                                'route_name' => 'wysiwyg-editor-document',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Document'
                            ],
                        ]
                    ],
                    'validation' => [
                        'icon' => '',
                        'route_name' => 'validation',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Validation'
                    ]
                ]
            ],
            'widgets' => [
                'icon' => 'hard-drive',
                'title' => 'Widgets',
                'sub_menu' => [
                    'chart' => [
                        'icon' => '',
                        'route_name' => 'chart',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Chart'
                    ],
                    'slider' => [
                        'icon' => '',
                        'route_name' => 'slider',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Slider'
                    ],
                    'image-zoom' => [
                        'icon' => '',
                        'route_name' => 'image-zoom',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Image Zoom'
                    ]
                ]
            ]
        ];
    }
}
