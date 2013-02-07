<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'ci_users',
  'fields' => 
  array (
    0 => 'id',
    1 => 'group_id',
    2 => 'name',
    3 => 'username',
    4 => 'email',
    5 => 'password',
    6 => 'salt',
    7 => 'created',
    8 => 'updated',
  ),
  'validation' => 
  array (
    'name' => 
    array (
      'rules' => 
      array (
        0 => 'required',
        1 => 'trim',
        'max_length' => 150,
      ),
      'label' => 'Nombre',
      'field' => 'name',
    ),
    'username' => 
    array (
      'rules' => 
      array (
        0 => 'required',
        1 => 'trim',
        'max_length' => 20,
        2 => 'unique',
      ),
      'label' => 'Nombre de usuario',
      'field' => 'username',
    ),
    'email' => 
    array (
      'rules' => 
      array (
        0 => 'required',
        1 => 'trim',
        2 => 'valid_email',
        3 => 'unique',
      ),
      'label' => 'Email',
      'field' => 'email',
    ),
    'password' => 
    array (
      'rules' => 
      array (
        0 => 'required',
        'min_length' => 3,
        'max_length' => 40,
        1 => 'encrypt',
      ),
      'label' => 'Contraseña',
      'field' => 'password',
    ),
    'confirm_password' => 
    array (
      'rules' => 
      array (
        0 => 'required',
        1 => 'encrypt',
        'matches' => 'password',
        'min_length' => 3,
        'max_length' => 40,
      ),
      'label' => 'Confirmar contraseña',
      'field' => 'confirm_password',
    ),
    'group' => 
    array (
      'rules' => 
      array (
        0 => 'required',
      ),
      'label' => 'Grupo',
      'field' => 'group',
    ),
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'group_id' => 
    array (
      'field' => 'group_id',
      'rules' => 
      array (
      ),
    ),
    'salt' => 
    array (
      'field' => 'salt',
      'rules' => 
      array (
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
  ),
  'has_one' => 
  array (
    'group' => 
    array (
      'class' => 'group',
      'other_field' => 'user',
      'join_self_as' => 'user',
      'join_other_as' => 'group',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  'has_many' => 
  array (
  ),
  '_field_tracking' => 
  array (
    'get_rules' => 
    array (
    ),
    'matches' => 
    array (
      'confirm_password' => 'password',
    ),
    'intval' => 
    array (
      0 => 'id',
    ),
  ),
);