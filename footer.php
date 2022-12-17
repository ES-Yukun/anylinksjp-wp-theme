</main>
<footer>
    <?php include(get_template_directory() . "/CONFIG.php"); ?>
    <div class="footer-top">
        <div>
            <p>リソース</p>
            <p><?php echo $__COMPANY["name"]["short"]; ?>について</p>
            <p onclick="location.href='./adoption'">採用</p>
            <p onclick="location.href='./partner'">パートナー</p>
        </div>
        <div>
            <p>新着情報</p>
            <p onclick="location.href='./news'">ニュース</p>
            <p onclick="location.href='./updates'">システム更新</p>
        </div>
        <div>
            <p>お問い合わせ</p>
            <p onclick="location.href='./sales'">セールス</p>
            <p onclick="location.href='./evets'">イベント</p>
        </div>
    </div>
    <?php if (!empty($__SNS_CONFIG)) { ?>
        <div class="footer-middle">
            <?php if (!empty($__SNS_CONFIG["discord"])) { ?> <div onclick="location.href='<?php echo $__SNS_CONFIG["discord"]; ?>'"><?php include(get_template_directory() . "/images/logo-discord.svg"); ?></div> <?php } ?>
            <?php if (!empty($__SNS_CONFIG["twitter"])) { ?> <div onclick="location.href='<?php echo $__SNS_CONFIG["twitter"]; ?>'"><?php include(get_template_directory() . "/images/logo-twitter.svg"); ?></div> <?php } ?>
            <?php if (!empty($__SNS_CONFIG["instagram"])) { ?> <div onclick="location.href='<?php echo $__SNS_CONFIG["instagram"]; ?>'"><?php include(get_template_directory() . "/images/logo-instagram.svg"); ?></div> <?php } ?>
        </div>
    <?php } ?>
    <div class="footer-bottom">
        <p>@<?php echo date('Y') . " " . $__COMPANY["name"]["long"]; ?></p>
        <p onclick="location.href='./terms'">利用規約とプライバシー</p>
        <p onclick="location.href='./adoption'">採用</p>
    </div>
    <?php echo get_the_title() ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>