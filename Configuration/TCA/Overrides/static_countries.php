<?php

/*
 * This file is part of the "Static Info Tables (PL)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Leuchtfeuer\StaticInfoTablesPl\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cn_short_en' => 'cn_short_pl'],
    'static_countries'
);
