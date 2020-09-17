<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (PL)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNamePl' => [
                'fieldName' => 'cn_short_pl',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'namePl' => [
                'fieldName' => 'zn_name_pl',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'namePl' => [
                'fieldName' => 'cu_name_pl',
            ],
            'subdivisionNamePl' => [
                'fieldName' => 'cu_sub_name_pl',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'namePl' => [
                'fieldName' => 'cu_name_pl',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'namePl' => [
                'fieldName' => 'cu_name_pl',
            ],
        ],
    ],
];
