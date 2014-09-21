<?php

$view = new view();
$view->name = 'content_grid';
$view->description = 'Find and manage content.';
$view->tag = 'admin';
$view->base_table = 'node';
$view->human_name = 'content_grid';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Content';
$handler->display->display_options['css_class'] = 'admin-views-view';
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'role';
$handler->display->display_options['access']['role'] = array(
  4 => '4',
);
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['reset_button'] = TRUE;
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = 50;
$handler->display->display_options['style_plugin'] = 'grid';
$handler->display->display_options['style_options']['columns'] = '3';
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['inline'] = array(
  'field_datum' => 'field_datum',
);
/* No results behavior: Global: Unfiltered text */
$handler->display->display_options['empty']['area_text_custom']['id'] = 'area_text_custom';
$handler->display->display_options['empty']['area_text_custom']['table'] = 'views';
$handler->display->display_options['empty']['area_text_custom']['field'] = 'area_text_custom';
$handler->display->display_options['empty']['area_text_custom']['empty'] = TRUE;
$handler->display->display_options['empty']['area_text_custom']['content'] = 'No content available.';
/* Field: Content: Notiz-Datum */
$handler->display->display_options['fields']['field_datum']['id'] = 'field_datum';
$handler->display->display_options['fields']['field_datum']['table'] = 'field_data_field_datum';
$handler->display->display_options['fields']['field_datum']['field'] = 'field_datum';
$handler->display->display_options['fields']['field_datum']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_datum']['settings'] = array(
  'format_type' => 'justdate',
  'fromto' => 'both',
  'multiple_number' => '',
  'multiple_from' => '',
  'multiple_to' => '',
);
/* Field: Content: org-Tag */
$handler->display->display_options['fields']['field_org']['id'] = 'field_org';
$handler->display->display_options['fields']['field_org']['table'] = 'field_data_field_org';
$handler->display->display_options['fields']['field_org']['field'] = 'field_org';
$handler->display->display_options['fields']['field_org']['delta_offset'] = '0';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Content: Scan */
$handler->display->display_options['fields']['field_scan']['id'] = 'field_scan';
$handler->display->display_options['fields']['field_scan']['table'] = 'field_data_field_scan';
$handler->display->display_options['fields']['field_scan']['field'] = 'field_scan';
$handler->display->display_options['fields']['field_scan']['label'] = '';
$handler->display->display_options['fields']['field_scan']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_scan']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_scan']['settings'] = array(
  'image_style' => 'griditem_large',
  'image_link' => 'content',
);
/* Filter criterion: Content: Title */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['operator'] = 'contains';
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = 'Title';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
$handler->display->display_options['filters']['title']['expose']['remember'] = TRUE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 'All';
$handler->display->display_options['filters']['status']['exposed'] = TRUE;
$handler->display->display_options['filters']['status']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['status']['expose']['label'] = 'Published';
$handler->display->display_options['filters']['status']['expose']['operator'] = 'status_op';
$handler->display->display_options['filters']['status']['expose']['identifier'] = 'status';
$handler->display->display_options['filters']['status']['expose']['remember'] = TRUE;
/* Filter criterion: Content: Notiz-Datum (field_datum) */
$handler->display->display_options['filters']['field_datum_value']['id'] = 'field_datum_value';
$handler->display->display_options['filters']['field_datum_value']['table'] = 'field_data_field_datum';
$handler->display->display_options['filters']['field_datum_value']['field'] = 'field_datum_value';
$handler->display->display_options['filters']['field_datum_value']['operator'] = 'between';
$handler->display->display_options['filters']['field_datum_value']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_datum_value']['expose']['operator_id'] = 'field_datum_value_op';
$handler->display->display_options['filters']['field_datum_value']['expose']['label'] = 'Notiz-Datum';
$handler->display->display_options['filters']['field_datum_value']['expose']['operator'] = 'field_datum_value_op';
$handler->display->display_options['filters']['field_datum_value']['expose']['identifier'] = 'field_datum_value';
$handler->display->display_options['filters']['field_datum_value']['expose']['remember'] = TRUE;
$handler->display->display_options['filters']['field_datum_value']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  6 => 0,
  7 => 0,
  5 => 0,
  4 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_datum_value']['year_range'] = '-2:+0';
/* Filter criterion: Content: org-Tag (field_org) */
$handler->display->display_options['filters']['field_org_tid']['id'] = 'field_org_tid';
$handler->display->display_options['filters']['field_org_tid']['table'] = 'field_data_field_org';
$handler->display->display_options['filters']['field_org_tid']['field'] = 'field_org_tid';
$handler->display->display_options['filters']['field_org_tid']['value'] = '';
$handler->display->display_options['filters']['field_org_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_org_tid']['expose']['operator_id'] = 'field_org_tid_op';
$handler->display->display_options['filters']['field_org_tid']['expose']['label'] = 'org-Tag (field_org)';
$handler->display->display_options['filters']['field_org_tid']['expose']['use_operator'] = TRUE;
$handler->display->display_options['filters']['field_org_tid']['expose']['operator'] = 'field_org_tid_op';
$handler->display->display_options['filters']['field_org_tid']['expose']['identifier'] = 'field_org_tid';
$handler->display->display_options['filters']['field_org_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  6 => 0,
  7 => 0,
  5 => 0,
  4 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_org_tid']['vocabulary'] = 'projects';

/* Display: content grid */
$handler = $view->new_display('page', 'content grid', 'page_2');
$handler->display->display_options['path'] = 'contentgrid';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'content grid';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['context'] = 0;
$translatables['content_grid'] = array(
  t('Defaults'),
  t('Content'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('No content available.'),
  t('Notiz-Datum'),
  t('org-Tag'),
  t('Title'),
  t('Published'),
  t('org-Tag (field_org)'),
  t('content grid'),
);

