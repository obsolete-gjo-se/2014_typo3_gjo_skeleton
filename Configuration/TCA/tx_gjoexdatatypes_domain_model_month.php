<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'Table: tx_gjoexdatatypes_domain_model_month',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_ex_datatypes') . 'Resources/Public/Icons/tx_gjoexdatatypes_domain_model_month.gif',
        'label' => 'month_string',
    ),
    'columns' => array(
        'month_string' => array(
            'label' => 'Label: month_string',
            'config' => array(
                'type' => 'input',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                month_string,
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            month_string,
            ',
    ),
);

