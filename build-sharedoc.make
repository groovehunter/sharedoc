api = 2
core = 7.x

; Include Drupal core and any core patches from Build Kit
includes[] = http://drupalcode.org/project/buildkit.git/blob_plain/refs/heads/7.x-2.x:/drupal-org-core.make


projects[sharedoc][type] = profile
projects[sharedoc][download][type] = git
projects[sharedoc][download][url] = https://github.com/groovehunter/sharedoc.git
projects[sharedoc][download][branch] = master

