# DDB Kitodo Zeitungsportal

TYPO3 extension to simplify work with and make adjustments to Kitodo.Presentation at [DDB-Zeitungsportal](https://www.deutsche-digitale-bibliothek.de/newspaper/).

The JavaScript build is based on 6.0.0 of Kitodo.Presentation.

## System requirements

* TYPO3 CMS 11.5 ELTS to 12.4 LTS
* Kitodo.Presentation 6.0
* PHP 8.1 - 8.3
* Apache Solr 8.11 - 9.7
* See [Kitodo.Presentation 6.0 Requirements](https://github.com/kitodo/kitodo-presentation/tree/6.0)

## Create unified JavaScript/CSS build

When building, `../dlf/` (i.e., a sibling folder of `ddb_kitodo_zeitungsportal`) must point to the code of Kitodo.Presentation that you want to use.

```bash
cd Build/
nvm use  # If you use NVM
npm ci
npm run build
npm run watch  # (Alternative) Watch Mode
```

This builds:
- `Resources/Public/JavaScript/ddbKitodoZeitungsportal.js`
- `Resources/Public/Css/ddbKitodoZeitungsportal.css`

## Include and Configure TypoScript Template of ddb_kitodo_zeitungsportal

### Include the Template of ddb_kitodo_zeitungsportal

Select the "Includes" tab in Template module for your root page (clicking on "Edit the whole template record")
In the "Include static (from extensions)" section:
  - First select "Toolbox Default Tool Templates (dlf)"
  - Then select "DDB: Kitodo Zeitungsportal (ddb_kitodo_zeitungsportal)"

> **Important:** The order of inclusion matters. Make sure Kitodo.Presentation is included before DDB Kitodo Zeitungsportal.

### Setup Constants

Edit "Constants" field in the template editor and add these configuration values:
```typoscript
plugin.ddb_kitodo_zeitungsportal {
  viewerPid = [UID of your viewer page]
  configPid = [UID of your Kitodo.Presentation configuration page]
  solrCore = [UID of your Solr core]
  baseUrl = https://domain.com/ [page url on which the viewer will be visible with trailing slash]
}
```

### Add Search Configuration
Edit "Setup" field in the template editor and add these lines to your TypoScript setup:
```typoscript
# FrontendUrl + /newspaper/item
plugin.tx_dlf_searchindocumenttool.settings.searchUrl = https://domain.com/newspaper/item
# Backend-API-URL + path to source-record with *id*
plugin.tx_dlf_searchindocumenttool.settings.documentIdUrlSchema = https://api.com/items/*id*/source/record
```


After configure and including the template:
- Clear all TYPO3 caches
- Check if JavaScript and CSS files are properly loaded in frontend

## Configure the Kitodo.Presentation Extension

Example of dlf part of configuration from settings.php file is available [here](Documentation/settings.md). It can be used as a template for plugin configuration after the installation.

## Upgrade to Kitodo.Presentation 6.0 (preliminary)

- Upgrade package via Composer
- In `settings.php`:
  ```php
  'FE' => [
      'cacheHash' => [
          'requireCacheHashPresenceParameters' => [
              'tx_dlf[id]',
          ],
      ],
  ],
  ```
  This could be set in command line:
  ```bash
  vendor/bin/typo3cms configuration:set --json 'FE/cacheHash/requireCacheHashPresenceParameters' '["tx_dlf[id]"]'
  ```
- Update database:
  - `vendor/bin/typo3cms database:updateschema`
- Update setup of viewer template:
  ```typoscript
  // Before
  plugin.tx_dlf_searchindocumenttool.documentIdUrlSchema = ...
  plugin.tx_dlf_searchindocumenttool.searchUrl = ...

  // After
  plugin.tx_dlf_searchindocumenttool.settings.documentIdUrlSchema = ...
  plugin.tx_dlf_searchindocumenttool.settings.searchUrl = ...
  ```

## Maintainer
typo3@slub-dresden.de
