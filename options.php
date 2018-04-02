<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    //Content Tab
    'tab_content' => array(
        'type' => 'tab',
        'title' => __('Content', '{domain}'),

        'options' => array(

            'e25_btn_label' => array(
                'type' => 'text',
                'label' => 'Button Label',
                'desc' => __('This is the text that appears on your button', '{domain}')
            ),
            'e25_btn_link' => array(
                'type' => 'radio',
                'label' => 'Link Type',
                'desc' => __('This is the text that appears on your button', '{domain}'),
                'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                    'external_link' => __('External Link', '{domain}'),
                    'internal_link' => __('Internal Link', '{domain}'),
                    'page_section' => __('Page Section', '{domain}'),
                    'file_upload' => __('File Upload', '{domain}')
                ),
                'inline' => true
            ),
            'e25_external_link' => array(
                'type' => 'text',
                'label' => 'Link'
            ),
            'e25_file_upload' => array(
                'type' => 'upload',
                'label' => 'File Upload',
                'desc' => __('Select File', '{domain}'),
                'help' => __('Select File', '{domain}'),
                'images_only' => false,
            ),
        )
    ),

    //Color Tab
    'tab_colors' => array(
        'type' => 'tab',
        'title' => __('Colors', '{domain}'),

        'options' => array(

            'e25_btn_color' => array(
                'type' => 'color-picker',
                'label' => 'Button Text Color',
                'desc' => __('This is the text that appears on your button', '{domain}')
            ),
            'e25_btn_background_color' => array(
                'type' => 'color-picker',
                'label' => 'Button Background Color',
                'desc' => __('This is the text that appears on your button', '{domain}')
            ),
            'e25_btn_hover_color' => array(
                'type' => 'color-picker',
                'label' => 'Button Text Hover Color',
                'desc' => __('This is the text that appears on your button', '{domain}')
            ),
            'e25_btn_background_hover_color' => array(
                'type' => 'color-picker',
                'label' => 'Button Background Hover Color',
                'desc' => __('This is the text that appears on your button', '{domain}')
            ),
            'e25_btn_border_color' => array(
                'type' => 'color-picker',
                'label' => 'Button Border Color',
                'desc' => __('This is the text that appears on your button', '{domain}')
            ),

        )
    ),

    //Icon Tab
    'tab_action' => array(
        'type' => 'tab',
        'title' => __('Icon', '{domain}'),

        'options' => array(
            'e25_btn_icon' => array(
                'type' => 'icon-v2',
                'label' => 'Button Icon',
                'desc' => __('This is the text that appears on your button', '{domain}'),
                'preview_size' => 'medium',
                'modal_size' => 'medium'
            ),
            'e25_btn_icon_position' => array(
                'type' => 'switch',
                'label' => 'Button Icon Position',
                'desc' => __('This is the text that appears on your button', '{domain}'),
                'left-choice' => array(
                    'value' => 'left',
                    'label' => __('Before Text', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'right',
                    'label' => __('After Text', '{domain}'),
                ),
            ),

        )
    ),

);