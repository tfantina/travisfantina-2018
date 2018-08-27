<?php
/* Huge shoutout to Daniel Patkai for the amazing tutorial over at:
https://premium.wpmudev.org/blog/wordpress-theme-customizer-guide/ */

/* This file contains the settings, sections and controls for various
customizations to the theme */ ?>

<?php
/*
// Add various customizers
add_action('customize_register', 'cd_customize_settings');
function cd_customize_settings($wp_customize) {
  //allows live reloading for title by changing transport to postMessage
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

  //creates a section in the customizer for colors
  $wp_customize->add_section('cd_colors', array(
    'title' => 'Colors',
    'description' => 'Update your theme colors',
    'priority' => 30,
    'sanitize_callback' => 'esc_attr',
  ));

  //creates setting and control for background color in the colors section
  $wp_customize->add_setting('background_color', array(
    'default' => '#90efe5',
    'transport' => 'postMessage',
    'sanatize_callback' => 'sanatize_hex_color',
    'sanitize_callback' => 'esc_attr',

  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
                      'background_color', array('label' => 'Background Color',
                      'section' => 'cd_colors',
                      'settings' => 'background_color',
  )));

  //creates a setting and control for changing text, line and icon colors
  //in future versions of rss headers, text, lines and icons may have seperate
  //settings and controls but for now the aim is to keep it simple to encourage
  //good design practices
  $wp_customize->add_setting('text_color', array(
      'default' => 'var(--greyish-brown)',
      'transport' => 'postMessage',
      'sanatize_callback' => 'sanatize_hex_color',
      'sanitize_callback' => 'esc_attr',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
                      'text_color', array('label' => 'Font color',
                      'section' => 'cd_colors',
                      'settings' => 'text_color',
  )));

}


//all the above changes will be implemented on save
add_action('wp_head', 'cd_customizer_css');
function cd_customizer_css() {
  ?>
  <style type="text/css">
      body { background: #<?php echo get_theme_mod('background_color', '#90efe5'); ?>;
             color: <?php echo get_theme_mod('text_color', 'var(--greyish-brown)'); ?>;
           }
      h1, h2, h3, h2>a, a, .fa {
        color: <?php echo get_theme_mod('text_color', 'var(--greyish-brown)'); ?>;
      }
      .navbar-light .navbar-toggler, h1, .navbar {
        border-color: <?php echo get_theme_mod('text_color', 'var(--greyish-brown)'); ?>;
      }

  </style>
  <?php
}


//allows for live updates as the user plays with the color selectors
add_action('customize_preview_init', 'cd_customizer');
function cd_customizer() {
      wp_enqueue_script(
            'cd_customizer',
            get_template_directory_uri(). '/customizer.js',
            array('jquery', 'customize-preview'),
            '',
            true
          );
}
*/
  ?>
