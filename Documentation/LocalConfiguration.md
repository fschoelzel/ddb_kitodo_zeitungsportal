# LocalConfiguration.php

Here is presented part of the configuration related to dlf extension.

    'dlf' => [
        'files' => [
            'fileGrpAudio' => 'AUDIO',
            'fileGrpDownload' => 'DOWNLOAD',
            'fileGrpFulltext' => 'DDB_FULLTEXT,FULLTEXT',
            'fileGrpImages' => 'DEFAULT,MAX',
            'fileGrpThumbs' => 'THUMBS',
        ],
        'general' => [
            'caching' => '0',
            'enableInternalProxy' => '1',
            'forceAbsoluteUrl' => '1',
            'forceAbsoluteUrlHttps' => '1',
            'publishNewCollections' => '1',
            'unhideOnIndex' => '0',
            'useExternalApisForMetadata' => '0',
            'userAgent' => 'DDB-Zeitungsportal',
        ],
        'iiif' => [
            'thumbnailHeight' => '150',
            'thumbnailWidth' => '150',
        ],
        'indexAnnotations' => '0',
        'solr' => [
            'allowCoreDelete' => '0',
            'connect' => '0',
            'fields' => [
                'autocomplete' => 'autocomplete',
                'collection' => 'collection',
                'date' => 'date',
                'default' => 'default',
                'fulltext' => 'pagefulltext',
                'geom' => 'geom',
                'id' => 'id',
                'license' => 'license',
                'location' => 'location',
                'page' => 'pagenumber',
                'partof' => 'partof',
                'pid' => 'pid',
                'purl' => 'purl',
                'recordId' => 'record_id',
                'restrictions' => 'restrictions',
                'root' => 'root',
                'sid' => 'sid',
                'terms' => 'terms',
                'thumbnail' => 'thumbnail',
                'timestamp' => 'timestamp',
                'title' => 'title',
                'toplevel' => 'toplevel',
                'type' => 'type',
                'uid' => 'issue_id',
                'urn' => 'urn',
                'volume' => 'volume',
            ],
            'host' => 'api.deutsche-digitale-bibliothek.de',
            'https' => '1',
            'pass' => '',
            'path' => '/',
            'port' => '443',
            'timeout' => '100',
            'user' => '',
        ],
    ],
