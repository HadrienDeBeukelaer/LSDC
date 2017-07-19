<?php
/**
 * LSDC
 *
 * @category    HKFX
 * @package     HKFX_LSDC
 * @author      HKFX - Hadrien DE BEUKELAER <hadrien.debeukelaer@pictime.com>
 * @copyright   HKFX Développement 2017
 */
?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?php echo img_asset_url('mine04.jpg'); ?>" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Prospection Minière</h1>
                    <p>La LSDC spécialiste de la prospection minière depuis 2000 vous propose de vous former au métier de mineur afin de devenir indépendant économiquement. Découvrer un métier fait pour vous...</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">En savoir +</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="<?php echo img_asset_url('mine02.jpg'); ?>" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Respect de l'environnement</h1>
                    <p>Attachée à l'environnement la LSDC permet la gestion des exploitation minière dans le respect de l'environnement. Devenez acteur de votre carrière en préservant la Terre</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Nos engagement</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="<?php echo img_asset_url('mine05.jpg'); ?>" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>De l'escavation à la livraison</h1>
                    <p>La LSDC s'occupe de toute la chaine d'approvisonnement, de l'escavation en passant par le traitement et le conditionnement des minerais, jusqu'à la livraison ou la revente</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Nos services</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo img_asset_url('heading01.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Transformation</h2>
            <p>Les minerais une fois extraits, sont transformé directement sur le site afin de répondre aux attentes de nos clients les plus exigeants, nous garantissons des barres de minerais de qualité dans les respect des standards.</p>
            <p><a class="btn btn-default" href="#" role="button">En savoir plus</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo img_asset_url('heading02.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Exploitation</h2>
            <p>Nous réalisons la prospection, l'excavation, la transformation et le transport nous même nous permetons un meilleurs rendement afin de vous garantir des minerais de qualité à coûts réduits afin de concrétiser vos projets.</p>
            <p><a class="btn btn-default" href="#" role="button">En savoir plus</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="<?php echo img_asset_url('heading03.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Sécurisation</h2>
            <p>Parce que le métier de mineur peu s'avèrer dangereux, la LSDC possède son propre service de sécurité grantissant ansi la protection des bien et des personnes sur le site. Nous sommes vigilant aux conditions de travail.</p>
            <p><a class="btn btn-default" href="#" role="button">En savoir plus</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Aux portes de <span class="text-muted">Los Santos...</span></h2>
            <p class="lead">Située au Nord Est de Vinewood, notre expoitation minère est rapidement accessible par l'autoroute Nord-Est de Los Santos. Réduisant ainsi les temps de trajet.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="<?php echo img_asset_url('hp02.jpg'); ?>" />
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Une exploitation s'étendant sur <span class="text-muted">70</span> hectares...</h2>
            <p class="lead">Une exploitation gigantesque pour assurer un divers choix de minerais, de la roche, du mangasène, du cuivre, de l'étain, de l'aluminium, de l'argent et même de l'or.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="<?php echo img_asset_url('hp01.jpg'); ?>">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Présent partout dans le monde avec <span class="text-muted">ThriftEX</span>...</h2>
            <p class="lead">Notre transporteur partenaire ThrifEX nous permet d'importer et exporter sur l'ensemble du globe. Partenaire depuis 5 ans de la LOs Santos Drilling Company</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="<?php echo img_asset_url('hp03.jpg'); ?>">
        </div>
    </div>

    <hr class="featurette-divider">
</div>
    <!-- /END THE FEATURETTES -->
