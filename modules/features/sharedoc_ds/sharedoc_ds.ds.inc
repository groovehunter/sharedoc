<?php
/**
 * @file
 * sharedoc_ds.ds.inc
 */

/**
 * Implements hook_ds_layout_settings_info().
 */
function sharedoc_ds_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|worknote|full';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'worknote';
  $ds_layout->view_mode = 'full';
  $ds_layout->layout = 'ds_1col';
  $ds_layout->settings = array(
    'regions' => array(
      'ds_content' => array(
        0 => 'flippy_pager',
        1 => 'field_scan',
      ),
      'about_current_node' => array(
        2 => 'field_org',
        3 => 'field_tags',
        4 => 'field_datum',
        5 => 'post_date',
      ),
      'transcript' => array(
        6 => 'body',
      ),
    ),
    'fields' => array(
      'flippy_pager' => 'ds_content',
      'field_scan' => 'ds_content',
      'field_org' => 'about_current_node',
      'field_tags' => 'about_current_node',
      'field_datum' => 'about_current_node',
      'post_date' => 'about_current_node',
      'body' => 'transcript',
    ),
    'classes' => array(),
    'wrappers' => array(
      'ds_content' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
  );
  $export['node|worknote|full'] = $ds_layout;

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|worknote|teaser';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'worknote';
  $ds_layout->view_mode = 'teaser';
  $ds_layout->layout = 'ds_2col';
  $ds_layout->settings = array(
    'regions' => array(
      'left' => array(
        0 => 'title',
        1 => 'field_org',
        2 => 'field_tags',
        3 => 'field_datum',
        4 => 'post_date',
        5 => 'body',
      ),
      'right' => array(
        6 => 'field_scan',
      ),
    ),
    'fields' => array(
      'title' => 'left',
      'field_org' => 'left',
      'field_tags' => 'left',
      'field_datum' => 'left',
      'post_date' => 'left',
      'body' => 'left',
      'field_scan' => 'right',
    ),
    'classes' => array(),
    'wrappers' => array(
      'left' => 'div',
      'right' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
  );
  $export['node|worknote|teaser'] = $ds_layout;

  return $export;
}
