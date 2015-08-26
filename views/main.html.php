<?php

/**
 * @var string $renderedLayout
 */

?><!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<?php
    echo Helper_Meta::renderTitle();
    echo Helper_Meta::renderMeta();
    echo Helper_Meta::renderFreeTags();
    echo Helper_Includer::mergeCSS();
    echo Helper_Includer::renderJS('js-head');
?>
</head>

<body data-base-url="<?php echo URL::site(); ?>">

<div class="page">

<?php
    echo $renderedLayout;
    echo Helper_Includer::renderJS('js-body');
?>

</div>

</body>

</html>
