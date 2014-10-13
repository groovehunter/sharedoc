#!/bin/bash

# no drush stuff here atm

# download underscore lib
drush ujsdl
drush vset file_private_path "sites/default/files/private"
drush vset file_public_path "sites/default/files"

drush en -y sharedoc_content_related
drush en -y sharedoc_ds



exit 0
