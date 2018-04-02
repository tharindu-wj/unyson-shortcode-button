<?php if (!defined('FW')) die('Forbidden'); ?>

<?php //$color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<!---->
<!--<a href="--><?php //echo esc_attr($atts['link']) ?><!--" target="--><?php //echo esc_attr($atts['target']) ?><!--" class="fw-btn fw-btn-1 --><?php //echo esc_attr($color_class); ?><!--">-->
<!--	<span>--><?php //echo $atts['label']; ?><!--</span>-->
<!--</a>-->

<?php $btn_id = uniqid('e25-button-'); ?>
<?php
fw()->backend->option_type('icon-v2')->packs_loader->enqueue_frontend_css();

$btn_link_type = $atts['e25_btn_link'];
$btn_file_upload = $atts['e25_file_upload'];
//echo $atts['e25_external_link'];
?>

<a
        href="
            <?php
            if ($btn_link_type == 'internal_link' || $btn_link_type == 'external_link'): echo $atts['e25_external_link'];
            elseif ($btn_link_type == 'file_upload' && $btn_file_upload !== ""): echo $btn_file_upload['url'];
            endif;
            ?>
        "

        class="e25-button <?php echo $btn_id; ?>"

        <?php if ($btn_link_type == 'file_upload' && $btn_file_upload !== ""){echo "download";} ?>
>

    <span><?php echo $atts['e25_btn_label']; ?><i class="<?php echo $atts['e25_btn_icon']['icon-class']; ?> <?php echo $atts['e25_btn_icon_position']; ?>"></i></span>
</a>
<?php
fw_print($atts); ?>


<style>
    <?php echo ".".$btn_id; ?>
    ,
    <?php echo ".".$btn_id; ?>:focus, <?php echo ".".$btn_id; ?>:visited, <?php echo ".".$btn_id; ?>:link {
        color: <?php echo $atts['e25_btn_color']; ?>;
        background: <?php echo $atts['e25_btn_background_color']; ?>;
        border: 1px solid<?php echo $atts['e25_btn_border_color']; ?>;
        transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
    }

    <?php echo ".".$btn_id; ?>:hover, <?php echo ".".$btn_id; ?>:active {
        color: <?php echo $atts['e25_btn_hover_color']; ?>;
        background: <?php echo $atts['e25_btn_background_hover_color']; ?>;
        border: 1px solid<?php echo $atts['e25_btn_border_color']; ?>;
    }
</style>

