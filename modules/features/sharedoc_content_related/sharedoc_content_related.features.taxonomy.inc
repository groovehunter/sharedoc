<?php
/**
 * @file
 * sharedoc_content_related.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function sharedoc_content_related_taxonomy_default_vocabularies() {
  return array(
    'projects' => array(
      'name' => 'org',
      'machine_name' => 'projects',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
  );
}
