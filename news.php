<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new recepts / YUE</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/news.css" type="text/css">
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
                        <span>1. Фьюжн-кухня — смешение традиционных китайских рецептов с элементами других культур, например, использование японского унаги в чжэцзянских блюдах.

2. Вегетарианские и веганские блюда — изобретательные рецепты, замещающие мясо на растительные альтернативы, такие как тофу, сейтан и разнообразные грибы, становятся все более популярными.

3. Супы на основе коллагена — использование натуральных бульонов, богатых коллагеном, как основа для горячих супов, что считается полезным для кожи.

4. Уличная еда — традиционные уличные закуски, такие как Сян Чао (жареные рисовые лепешки) и чунь Бин (тонкие блинчики с начинкой), претерпевают обновление с введением современных вкусов.

5. Технологии в приготовлении — автоматизированные кухонные устройства и приложения для доставки делают приготовление и потребление еды более удобным и доступным.</span>

                </div>
            </div>

            <aside>

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