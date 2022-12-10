<!DOCTYPE html>
<html lang="ja">

<head>
    <?php 
    $description = "anylinksjpによるクラウドコンピューティングにおけるアプリケーションの開発支援. anylinks k8s platformでは、パートナー様やお客様にkubernetesを基盤とした独自アプリケーションの開発支援をしています."
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="twitter:image:src" content="<?php echo ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/wp-content/themes/anylinksjp/images/thumbnail.png") ?>" />
    <meta name="twitter:site" content="@anylinksjp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AnylinksJP">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="keywords" content="anylinksjp, anylinks, jp, kubernetes, cloud, computing, k8s">
    <title>anylinksjp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
    <header>
        <div>
            <div onclick="window.location.href = window.location.host">
                <div><?php include(get_template_directory() . "/images/icon.svg"); ?></div>
            </div>
            <div>
                <div onclick="window.location.href = window.location.host">
                    <p>AnylinksJP</p>
                    <p>Cloud Computing</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <p>About</p>
                </div>
            </div>
            <div>
                <div>
                    <p>Products</p>
                </div>
            </div>
            <div>
                <div>
                    <p>Terms</p>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <p>Contact Sales</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <span id="header-space"></span>