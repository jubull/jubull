<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'electronics_build' => 
    array (
      0 => 'electronics',
    ),
    'electronics_query' => 
    array (
      0 => 'electronics',
    ),
  ),
  'route' => 
  array (
    '/example$' => 'example/index/index',
    '/example/d/[:name]' => 'example/demo/index',
    '/example/d1/[:name]' => 'example/demo/demo1',
    '/example/d2/[:name]' => 'example/demo/demo2',
  ),
);