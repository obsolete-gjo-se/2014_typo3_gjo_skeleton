<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gjo.' . $_EXTKEY,
    'SkeletonPlugin',
    array(
        'Skeleton' => 'findAll, show, addForm, add, updateForm, update, remove'
    ),
    array(
        'Skeleton' => 'findAll, show, addForm, add, updateForm, update, remove'
    )
);