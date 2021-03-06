<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>コーディングデータ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/nsd_ajax.js"></script>
</head>

<body>
    <!-- header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-logo">
                <a href="<?php echo home_url();?>">
                    <img class="pc-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-center.png" alt="">
                    <img class="tb-show" src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" alt="">
                </a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link open-new-info-submenu" >新着情報</a>
                    <div class="new-info-submenu">
                        <ul>
                            <li><a href="<?php echo home_url() . '/new-graduates'?>">新卒採用</a></li>
                            <li><a href="<?php echo home_url() . '/mid-career'?>">中途採用</a></li>
                            <li><a href="<?php echo home_url() . '/information'?>">お知らせ</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">採用情報</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link open-voice-submenu">先輩の声</a>
                    <div class="voice-submenu">
                        <ul>
                            <li><a href="<?php echo home_url() . '/senior'?>">新卒入社</a></li>
                            <li><a href="<?php echo home_url() . '/senior'?>">中途入社</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo home_url() . '/faq'?>" class="nav-link">QA</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo home_url() . '/recuirement'?>" class="nav-link">募集要項</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo home_url() . '/selection';?>" class="nav-link">選考フロー</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">お問い合わせ</a>
                </li>
                <li class="nav-item--official">
                    <a href="https://nishidakosan.co.jp/" target="_blank">
                        <span>OFFICIAL&nbsp;SITE</span>
                        <img src="./assets/img/official-site.png" alt="">
                    </a>

                </li>
                <li class="nav-item--entry">
                    <a href="#">ENTRY</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>