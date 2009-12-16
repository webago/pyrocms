<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>{$template.title} | <?php echo $this->settings->item('site_name'); ?></title>

<!-- Language: <?php echo CURRENT_LANGUAGE ?> -->

<script type="text/javascript">
    var APPPATH_URI = "<?php echo $this->config->item('asset_dir');?>";
    var BASE_URI = "<?php echo BASE_URI;?>";
</script>

{css('style.css')}
{css('layout.css', '_theme_')}

{js('jquery/jquery.js')}

{js('jquery/jquery.fancybox.js')}
{css('jquery/jquery.fancybox.css')}

{js('front.js')}

{$template.metadata}