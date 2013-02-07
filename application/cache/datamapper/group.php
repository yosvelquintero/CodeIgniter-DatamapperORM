<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'ci_groups',
  'fields' => 
  array (
    0 => 'id',
    1 => 'name',
    2 => 'created',
    3 => 'updated',
  ),
  'validation' => 
  array (
    'name' => 
    array (
      'rules' => 
      array (
        0 => 'required',
        1 => 'trim',
        2 => 'unique',
        'min_length' => 3,
        'max_length' => 20,
      ),
      'label' => 'Nombre',
      'field' => 'name',
    ),
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'created' => 
    array (
      'field' => 'created',
      'rules' => 
      array (
      ),
    ),
    'updated' => 
    array (
      'field' => 'updated',
      'rules' => 
      array (
      ),
    ),
    'user' => 
    array (
      'field' => 'user',
      'rules' => 
      array (
      ),
    ),
  ),
  'has_one' => 
  array (
  ),
  'has_many' => 
  array (
    'user' => 
    array (
      'class' => 'user',
      'other_field' => 'group',
      'join_self_as' => 'group',
      'join_other_as' => 'user',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  '_field_tracking' => 
  array (
    'get_rules' => 
    array (
    ),
    'matches' => 
    array (
    ),
    'intval' => 
    array (
      0 => 'id',
    ),
  ),
);