<?php
/*
Title: 商品属性
Post Type: wegoods
Priority: high
*/

piklist('field', array(
    'type' => 'file'
    ,'field' => 'goods_gallery'
    ,'label' => '商品图片'
    ,'description' => '按住Ctrl并点击可同时选择多张图片'
    ,'options' => array(
      'title' => '商品图片'
      ,'button' => '选择图片'
    )
  ));
// echo get_post_meta($post->ID, 'goods_gallery')