<?php

/**
 * PHP version 5.4
 *
 * API client v4
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Client;

use RetailCrm\Methods\V4;

/**
 * PHP version 5.4
 *
 * API client v4 class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
class ApiVersion4 extends AbstractLoader
{
    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $version api version
     * @param string $site    site code
     * @param bool   $debug   debug mode
     */
    public function __construct($url, $apiKey, $version, $site, $debug = false)
    {
        parent::__construct($url, $apiKey, $version, $site, $debug);
    }

    use V4\Customers;
    use V4\Delivery;
    use V4\Marketplace;
    use V4\Orders;
    use V4\Packs;
    use V4\References;
    use V4\Settings;
    use V4\Statistic;
    use V4\Stores;
    use V4\Telephony;
    use V4\Users;
}
