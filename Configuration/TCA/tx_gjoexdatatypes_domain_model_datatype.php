<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'Table: tx_gjoexdatatypes_domain_model_datatype',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_ex_datatypes') . 'Resources/Public/Icons/tx_gjoexdatatypes_domain_model_datatype.gif',
        'label' => 'string_without_break',

    ),
    'columns' => array(
        'string_without_break' => array(
            'label' => 'Label: stringWithoutBreak',
            'config' => array(
                'type' => 'input',
                'eval' => 'required',
                'max' => '30',
            ),
        ),
        'string_with_break' => array(
            'label' => 'Label: stringWithBreak',
            'config' => array(
                'type' => 'text',
            ),
        ),
        'password' => array(
            'label' => 'Label: password',
            'config' => array(
                'type' => 'input',
                'eval' => 'password',
                'max' => '20',
            ),
        ),
        'number_integer' => array(
            'label' => 'Label: numberInteger',
            'config' => array(
                'type' => 'input',
                'eval' => 'int',
                'max' => '6',
                'range' => array(
                    'lower' => 0,
                    'upper' => 999999
                ),
            ),
        ),
        'select_single' => array(
            'label' => 'Label: selectSingle',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('-- Bitte wählen --', 0),
                    array('Januar', 1),
                    array('Februar', 2),
                    array('März', 3),
                ),
            ),
        ),
        'select_single_db' => array(
            'label' => 'Label: selectSingleDb',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_gjoexdatatypes_domain_model_month',
                'foreign_table_where' => 'ORDER BY tx_gjoexdatatypes_domain_model_month.uid',
                'items' => array(
                    array('-- Bitte wählen --', 0)
                ),
            ),
        ),
        'checkbox_single' => array(
            'label' => 'Label: checkboxSingle',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'radio_multi' => array(
            'label' => 'Label: radioMulti',
            'config' => array(
                'type' => 'radio',
                'items' => array(
                    array('Januar', 1),
                    array('Februar', 2),
                    array('März', 3),
                ),
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                string_without_break,
                string_with_break,
                password,
                number_integer,
                select_single,
                select_single_db,
                checkbox_single,
                radio_multi,
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            string_without_break,
            string_with_break,
            password,
            number_integer,
            select_single,
            select_single_db,
            checkbox_single,
            radio_multi
            ',),
);