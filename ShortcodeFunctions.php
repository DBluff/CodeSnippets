<?php

/**
 * @param $atts
 * @param null $content
 * @return array|string
 */
function brac_acc($atts , $content = null ) {
    $atts = shortcode_atts(
        array(
            'brac_colo' => 'blue',
            'h_size' => 'h1',
        ), $atts, 'brac_acc' );

    return '<div class="centerContent"><' . $atts['h_size'] . ' class="acc_' . $atts['brac_colo'] . '_brackets' . '" style="display: inline-block!important;">' . $content . '</' . $atts['h_size'] . '></div>';

    return array(
            'type' => 'textfield',
            'heading' => __( 'Widget title', 'js_composer' ),
            'param_name' => 'title',
            'description' => __( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
        );
}
add_shortcode( 'brac_acc', 'brac_acc' );


?>






array(
            'type' => 'textfield',
            'heading' => __( 'Widget title', 'js_composer' ),
            'param_name' => 'title',
            'description' => __( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
        ),