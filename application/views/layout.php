<?php
/**
 * LSDC
 *
 * @category    HKFX
 * @package     HKFX_LSDC
 * @author      HKFX - Hadrien DE BEUKELAER <hadrien.debeukelaer@pictime.com>
 * @copyright   HKFX Développement 2017
 */

/**
 * @var string $page_title //titre de la page
 * @var string $header   //contenu du header
 * @var string $contents   //contenu du layout
 * @var string $footer   //contenu du footer
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="<?php echo css_asset_url('bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo css_asset_url('bootstrap-theme.css') ?>">
    <link rel="stylesheet" href="<?php echo css_asset_url('lsdc-main.css') ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo js_asset_url('bootstrap.js') ?>"></script>
    <script src="<?php echo js_asset_url('lsdc.js') ?>"></script>
</head>
<body>

<?php echo $menu; ?>
<?php echo $contents ?>
<?php echo $footer ?>


</body>

</html>
