<!DOCTYPE html>
<html lang="ja">

<head>
    <?php
    $description = "anylinksjpによるクラウドコンピューティングのアプリケーションの開発支援. anylinks k8s platformでは、パートナー様やお客様にkubernetesを基盤とした独自アプリケーションの開発支援をしています."
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="anylinksjp, anylinks, jp, kubernetes, cloud, computing, k8s">
    <meta property="og:type" content="home" />
    <meta property="og:title" content="AnylinksJP" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:site_name" content="Anylinks Japan - Cloud Computing" />
    <meta property="og:image" content="<?php echo ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/wp-content/themes/anylinksjp/images/thumbnail.png") ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@anylinksjp" />
    <title>anylinksjp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
    <header>
        <div onclick="window.location.href = window.location.host">
            <div>
                <div><?php include(get_template_directory() . "/images/icon.svg"); ?></div>
            </div>
            <div>
                <div>
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
    <main>
        <span id="header-space"></span>