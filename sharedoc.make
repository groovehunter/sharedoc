api = 2
core = 7.x

defaults[projects][subdir] = contrib
;includes[] = https://raw.githubusercontent.com/groovehunter/drupal/master/basemodules.make

; for copy + edit
;projects[][version] = ""


; extra modules
projects[admin_menu][version] = "3.0-rc5"
projects[admin_views][version] = "1.6"
projects[advanced_help][version] = "1.0"
projects[backbone][version] = "1.x-dev"
projects[bulk_media_upload][version] = "1.x-dev"
projects[ctools][version] = "1.6"
projects[dhtml_menu][version] = "1.0-beta1"
projects[entity][version] = "1.9"
projects[entityreference][version] = "1.0"
projects[features_extra][version] = "1.0-beta1"
projects[ckeditor][version] = "1.15"
projects[context][version] = "3.3"
projects[date][version] = "2.10"
projects[devel][version] = "1.6"
projects[ds][version] = "2.15"
projects[features][version] = "2.10"
projects[ftools][version] = "1.6"
projects[field_property][version] = "1.0-beta2"
projects[flippy][version] = "1.5"
;projects[image][version] = "1.x-dev"
projects[libraries][version] = "2.3"
projects[masquerade_nominate][version] = "1.0"
projects[masquerade][version] = "1.0-rc7"
projects[media][version] = "1.7"
projects[multiform][version] = "1.1"
projects[plupload][version] = "1.7"
projects[print][version] = "1.2"
projects[quickedit][version] = "1.5"
projects[robotstxt][version] = "1.2"
projects[simplewiki][version] = "1.x-dev"
projects[skinr][version] = "2.0"
projects[strongarm][version] = "2.0"
projects[taxonomy_manager][version] = "1.0"
projects[taxonomy_menu][version] = "1.5"
projects[taxonomy_csv][version] = "5.10"
projects[token][version] = "1.7"
projects[underscore][version] = "2.1"
projects[uuid][version] = "1.0"
projects[uuid_features][version] = "1.0-rc1"
projects[views][version] = "3.20"
projects[views_bulk_operations][version] = "3.5"
projects[liquid_coolness][version] = "1.0"


; my stuff
projects[openspirit_basic_features][type] = "module"
projects[openspirit_basic_features][subdir] = features
projects[openspirit_basic_features][download][type] = "git"
projects[openspirit_basic_features][download][url] = "https://github.com/groovehunter/openspirit_basic_features.git"


; Themes


; Libraries
libraries[plupload][download][type] = "get"
;libraries[plupload][download][url] = "https://github.com/moxiecode/plupload/archive/v2.1.2.zip"
libraries[plupload][download][url] = "https://github.com/moxiecode/plupload/archive/v1.5.8.zip"
;libraries[plupload][destination] = "libraries/contrib"

libraries[jquery.blockui][download][type] = "git"
libraries[jquery.blockui][download][url] = "http://git.drupal.org/project/jquery_blockui.git"




