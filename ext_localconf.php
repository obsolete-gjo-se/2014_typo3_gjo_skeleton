<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gjo.' .
    $_EXTKEY,
    'ExDataTypes',
    array(
        'DataType' => 'findAll, show, addForm, add, updateForm, update, remove'
    ),
    array(
        'DataType' => 'findAll, show, addForm, add, updateForm, update, remove'
    )
);