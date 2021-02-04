<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neuron_work_meta',
  'title'     => 'Work Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'neuron_work_section_1',
      'fields' => array(

        array(
          'id'    => 'subtitle',
          'type'  => 'text',
          'title' => 'Sub Title',
          'desc'  => 'Type work sub tilte',
        ),
        array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'Link Text', 
          'default'=> 'Visit Website'         
        ),       
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',          
        ),
        array(
          'id'              => 'informations',
          'type'            => 'group',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Information',
          'fields'    => array(
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'Information Title',
            ),
            array(
              'id'    => 'value',
              'type'  => 'text',
              'title' => 'Information Value',
            ),           
          ),
        ),
 
      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
