<?php
defined('TYPO3_MODE') || die();

call_user_func(function ($extKey, $table) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_pl',
        'cn_official_name_en' => 'cn_official_name_pl',
        'cn_capital' => 'cn_capital_pl',
    ];
    foreach ($additionalFields as $sourceField => $destField) {
        $additionalColumns = [];
        $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
        $additionalColumns[$destField]['label'] = 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_db.xlf:static_countries_item.' . $destField;
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '',
            'after:' . $sourceField);
        // Add as search field
        $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destField;
    }
}, 'static_info_tables_pl', 'static_countries');
