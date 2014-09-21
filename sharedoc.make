api = 2
core = 7.x

defaults[projects][subdir] = contrib
includes[] = https://raw.githubusercontent.com/groovehunter/drupal/master/basemodules.make

; for copy + edit
;projects[][version] = ""


; extra modules
projects[bulk_media_upload][version] = ""
projects[features_extra][version] = "1.0-beta1"
projects[context][version] = "3.0-beta6"
projects[date][version] = "2.6"
projects[devel][version] = "1.3"
projects[ds][version] = "2.4"
projects[field_property][version] = "1.0-beta2"
projects[image][version] = "1.x-dev"
projects[libraries][version] = "2.2"
projects[media][version] = "1.3"
projects[plupload][version] = "1.1"
projects[print][version] = "1.2"
projects[strongarm][version] = "2.0"
projects[taxonomy_menu][version] = "1.4"
projects[taxonomy_csv][version] = "5.10"
projects[token][version] = "2.3"
projects[uuid][version] = "1.0-alpha3"
projects[uuid_features][version] = "1.0-alpha3"


; my stuff
projects[openspirit_basic_features][type] = "module"
projects[openspirit_basic_features][subdir] = features
projects[openspirit_basic_features][download][type] = "git"
projects[openspirit_basic_features][download][url] = "https://github.com/groovehunter/openspirit_basic_features.git"


; Themes


; Libraries
libraries[plupload][download][type] = "get"
libraries[plupload][download][url] = "http://plupload.com/downloads/plupload_1_5_7.zip"
;libraries[plupload][destination] = "libraries/contrib"

libraries[jquery.blockui][download][type] = "git"
libraries[jquery.blockui][download][url] = "http://git.drupal.org/project/jquery_blockui.git"




