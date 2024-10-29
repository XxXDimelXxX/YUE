<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUE</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/main_page.css" type="text/css">
    <meta name = "description" content="Сайт для продажи или сдачи в аренду ненужных вещей">
    <meta name = "keywords" content="Dimel's Shop, sale ">
    <meta name="viewport" content="wight=devise-wight, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="content">
            <header>
                <div id = "logo">
                <a href="https://yue" title="На главную">
                    <img src="img/logo.png" title="Dimel's Shop" alt ="Dimel's Shop">
                    <span>YUE</span>
                </a>
                </div>
                    <div class="btn">
                        <a href="" title="">Profile</a>
                    </div>
                    <div class="btn">
                        <a href="" title="">Register</a>
                    </div>
            </header> 
            <nav>
                <div id="showmenu"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div id="hidemenu">
                    <a href="/news">News</a>
                    <a href="/pancake">Pancake</a>
                    <a href="">Pie</a>
                    <a href="">Juice</a>
                    <a href="">Candy</a>
                </div>
                <div id="search">
                    <span>search</span>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                <div id="mobilemenu">
                    <hr>
                    <a href="">News</a><br>
                    <a href="">Pancake</a><br>
                    <a href="">Pie</a><br>
                    <a href="">Juice</a><br>
                    <a href="">Candy</a>
                </div>
            </nav>

            <div id = "main">
                <div id="news">
                    <h2 class="heading">New recept</h2>
                    <div style="clear: both"><br></div>

                     <!-- статья -->
                      
                    <?php
                for($i = 0; $i < 6; $i++)
                    echo '
                <div class="article">
                        <img src="data:image/jpeg;base64,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
Ksh//2Q==" alt="Test" title="Test">
                        <span>Многие люди, впервые столкнувшиеся с китайской кухней, интересуются, имеет ли национальная кухня такое термин как китайский десерт? 
                        </span>
                    </div>
                    ';
                
            ?>
                    <a href="" title="More">
                    <div class="btn">
                        More new recepts
                    </div>
                </a>
                </div>
            </div>
            <aside>
                <div id="tutorial">
                    <h2 class="heading">Tutorial</h2>
                    <div style="clear: both"><br></div>
                     <!-- Tutorial -->
                                <?php
                            for($i = 0; $i < 4; $i++)
                                echo '
                            <div class="tutorial">
                                    <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzuo-w1lEWFoD2_IK3jJ8Dt_equ880oghRWg&s" alt="Test" title="Test">
                                    <span>make a new cake now!</span>
                                </div>
                                <div style="clear: both"><br></div>
                                ';
                            
                        ?>
                    <a href="" title="More">
                        <div class="btn">
                            Swow more tutorial
                        </div>
                    </a>
                        </div>
            </aside>
            <div style="clear: both"><br></div>
        </div>
        <footer>
            <div id="site_name">
                <span>YUE</span> - YAMMY!!! YAMMY!!! YAMMY!!!
            </div>
            <div id="clear"></div>
            <div id="footer_menu">
                <a href="" title="DONATE TO DEVELOPER">Поддержать</a>
                <a href="" title="About us">About us</a>
                <a href="" title="Узнать о рекламе">Поддержать</a>
            </div>
            <div id ="rights">
                <a href="">Все права защищены &copy; <?=date(2024)?></a>
            </div>
            <div id="social">
                <a href="" title=""><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a href="" title=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="" title=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </footer>
    </div>

    <!-- jQuery --> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $('#showmenu').click (function () {
            if ($('#mobilemenu').is (':visible'))
                $('#mobilemenu').hide ();
            else
                $('#mobilemenu').show ();
        });

        $(document).scroll (function() {
            if ($(document).scrollTop() > $('header').height () + 10)
                $('nav').addClass('fixed');
            else
                $('nav').removeClass('fixed');
        });

    </script>
</body>
</html>  