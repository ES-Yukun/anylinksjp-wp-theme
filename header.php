<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include(get_template_directory() . "/CONFIG.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__COMPANY["description"]; ?>" />
    <meta name="keywords" content="<?php echo $__COMPANY["words"]; ?>" />
    <meta property="og:type" content="home" />
    <meta property="og:title" content="<?php if (empty(get_the_title())) echo ($__COMPANY["catch_name"]);
                                        else echo get_the_title(); ?>" />
    <meta property="og:description" content="<?php echo $__COMPANY["description"]; ?>" />
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:site_name" content="<?php echo $__COMPANY["catch_name"]; ?>" />
    <meta property="og:image" content="<?php echo $__COMPANY["image"]; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@<?php echo $__COMPANY["twitter_id"]; ?>" />
    <?php if (empty(get_the_title())) : ?><title><?php echo ($__COMPANY["catch_name"]); ?></title><?php endif; ?>
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
                    <p>サービス一覧</p>
                </div>
            </div>
            <div>
                <div>
                    <p>パートナー</p>
                </div>
            </div>
            <div>
                <div>
                    <p>弊社について</p>
                </div>
            </div>
            <div>
                <div>
                    <p>利用規約</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div>
                        <p>アカウント表示</p>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <p>担当者に問い合わせる</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <span id="header-space"></span>