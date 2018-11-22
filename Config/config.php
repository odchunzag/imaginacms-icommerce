<?php


return [

    'name' => 'Icommerce',

    'comments' => false,

    'shippingmethods' => [


        'freeshipping' => [
            'name' => 'icommercefreeshipping',
            'title' => 'icommercefreeshipping::configurations.single',
            'entity' => '\Modules\IcommerceFreeshipping\Entities\Configfreeshipping',
            'view' => 'icommercefreeshipping::admin.configurations.index',
            'init' => "icommercefreeshipping_Init"
        ],

        'flatrate' => [
            'name' => 'icommerceflatrate',
            'title' => 'icommerceflatrate::configflatrates.single',
            'entity' => '\Modules\Icommerceflatrate\Entities\Configflatrate',
            'view' => 'icommerceflatrate::admin.configflatrates.index',
            'init' => "icommerceflatrate_Init"
        ],


        'localdelivery' => [
            'name' => 'icommercelocaldelivery',
            'title' => 'icommercelocaldelivery::configlocaldeliveries.single',
            'entity' => '\Modules\IcommerceLocaldelivery\Entities\Configlocaldelivery',
            'view' => 'icommercelocaldelivery::admin.configlocaldeliveries.index',
            'init' => "icommercelocaldelivery_Init"
        ],


        'agree' => [
            'name' => 'icommerceagree',
            'title' => 'icommerceagree::configagrees.single',
            'entity' => '\Modules\IcommerceAgree\Entities\Configagree',
            'view' => 'icommerceagree::admin.configagrees.index',
            'init' => "icommerceagree_Init"
        ],

        'ups' => [
            'name' => 'icommerceups',
            'title' => 'icommerceups::configups.single',
            'entity' => '\Modules\IcommerceUps\Entities\Configups',
            'view' => 'icommerceups::admin.configups.index',
            'init' => "icommerceups_Init"
        ],

        'usps' => [
            'name' => 'icommerceusps',
            'title' => 'icommerceusps::configusps.single',
            'entity' => '\Modules\IcommerceUsps\Entities\Configusps',
            'view' => 'icommerceusps::admin.configusps.index',
            'init' => "icommerceusps_Init"
        ],

    ],

    'paymentmethods' => [

        'icommercepaypal' => [
            'name' => 'icommercepaypal',
            'title' => 'icommercepaypal::paypalconfigs.single',
            'entity' => '\Modules\IcommercePaypal\Entities\Paypalconfig',
            'view' => 'icommercepaypal::admin.paypalconfigs.index'
        ],

        'icommercecheckmo' => [
            'name' => 'icommercecheckmo',
            'title' => 'icommercecheckmo::checkmoconfigs.single',
            'entity' => '\Modules\IcommerceCheckmo\Entities\Checkmoconfig',
            'view' => 'icommercecheckmo::admin.checkmoconfigs.index'
        ],

        'icommercepayu' => [
            'name' => 'icommercepayu',
            'title' => 'icommercepayu::payuconfigs.single',
            'entity' => '\Modules\IcommercePayu\Entities\Payuconfig',
            'view' => 'icommercepayu::admin.payuconfigs.index'
        ],

        'icommercecredibanco' => [
            'name' => 'icommercecredibanco',
            'title' => 'icommercecredibanco::configcredibancos.single',
            'entity' => '\Modules\IcommerceCredibanco\Entities\Configcredibanco',
            'view' => 'icommercecredibanco::admin.configcredibancos.index'
        ],
    ],
    'formatmoney' => [
        'decimals' => 2,
        'dec_point' => '.',
        'housands_sep' => ','
    ],

];