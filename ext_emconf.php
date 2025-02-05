<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'DDB Kitodo Zeitungsportal',
    'description' => 'Templates, Styles and Configuration for DDB Zeitungsportal',
    'category' => 'templates',
    'author' => 'Alexander Bigga',
    'author_email' => 'typo3@slub-dresden.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '4.0.0',
    'constraints' => array(
        'depends' => array(
            'php' => '8.1.0-8.3.99',
            'typo3' => '11.5.0-12.4.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
