<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>БАГИРА</title>
    <meta name="author" content="Anizart">
    <link rel="icon" href="../img/ico/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header__footer.min.css">
    <link rel="stylesheet" href="../css/about_us.min.css">
</head>
<body>
    <div class="wrapper">

        <header class="header header-bg">
            <div class="container">

                <div class="header__wrapper">

                    <img src="../img/svg/logo_header.svg" alt="логотип" class="header__logo">
                    <nav class="header__nav">

                        <ul class="header__menu ">
                            <li class="header__link header__link-mobail"><a href="../index.html">Главная</a></li>
                            <li class="header__link header__link-mobail"><a href="about_us.html">О нас</a></li>
                            <li class="header__link header__link-mobail"><a href="news.html">Новости</a></li>
                            <li class="header__link header__link-mobail"><a href="pets.html">Питомцы</a></li>
                            <li class="header__link header__link-delete"><a href="financial.html">Помощь ▽</a>
                                <ul class="header__drop-down">
                                    <li class="header__link-drop-down"><a href="financial.html">Финансовая</a></li>
                                    <li class="header__link-drop-down"><a href="medicines.html">Медикаменты</a></li>
                                    <li class="header__link-drop-down"><a href="products.html">Продукты</a></li>
                                </ul>
                            </li>
                            <li class="header__link-mobail mobail"><a href="financial.html">Помощь > Финансовая</a></li>
                            <li class="header__link-mobail mobail"><a href="medicines.html">Помощь > Медикаменты</a></li>
                            <li class="header__link-mobail mobail"><a href="products.html">Помощь > Продукты</a></li>
                        </ul>

                    </nav>
                    <div class="header__burger ">
                        <span class="header__lines"></span>
                    </div>
                    
                </div>

            </div>
        </header>

        <main class="main main-margin">
            <div class="container">

                <section class="appeal">
                    <div class="appeal__information">
                        <h1 class="title">Обращение к <span class="accent">посетителям:</span></h1>
                        <h2 class="appeal__subtitle">Рады приветствовать Вас, уважаемые друзья!</h2>
                        <p class="appeal__text">Толчком к появлению данного приюта стала безысходность… <br>
                            Безысходность от невозможности помочь всем тем брошенным, беззащитным, и
                            никому не нужным беспризорным животным. Наша цель организовать полноценный приют, где будет всё: просторные вольеры, большая территория для прогулок, полноценный медицинский блок, полные миски еды и счастливые глаза животных. Сейчас мы маленькими шажками начинаем реализовывать цель: оформлены все необходимые документы, готов проект приюта, есть штат
                            помощников и партнёров. Но впереди еще очень и очень много работы. Надеимся с
                            помощью неравнодушных людей, у нас всё получится!</p>
                    </div>
                    <img src="../img/owner.jpg" alt="хозяйка с собакой" class="img">
                </section>

                <section class="feedback">
                    <h2 class="title">ваши <span class="accent">пожелания</span> или <span class="accent">замечания</span></h2>
                    <form class="feedback__form" action="form.php" method="post">
                        <div class="feedback__inputs">
                            <input class="feedback__input" type="text" name="username" placeholder="Имя: ( до 10 символов )" tabindex="1" required>
                            <input class="feedback__input" type="email" name="email" placeholder="Ваша почта:" tabindex="2" >
                            <input class="feedback__input" type="tel" name="number" placeholder="Телефон:" tabindex="3" >
                            <div class="feedback__btns">
                                <button class="button feedback__reset" type="reset" tabindex="5">Очистить</button>
                                <button class="button" type="submit" tabindex="6">Отправить</button>
                            </div>
                        </div>
                        <div class="feedback__wrapper">
                            <textarea class="feedback__area" placeholder="Ваши пожелания/замечания: ( до 180 символов )" name="wish" id="" tabindex="4"></textarea>
                        </div>
                    </form>
                </section>
            </div>
            
        </main>

        <footer class="footer">
            <div class="container">
            
                <div class="footer__wrapper">
                    <img src="../img/svg/logo_footer.svg" alt="логотип" class="footer__logo">
                    <p class="footer__text"><a href="" class="footer__link">Политика конфиденциальности</a></p>
                    <div class="footer__contacts">
                        <p class="footer__name">Контакты:</p>
                        <p class="footer__number">+7 (922) 880 05-55</p>
                        <p class="footer__mail"><a href="" class="footer__link">pochta@gmail.com</a></p>
                    </div>
                </div>

            </div>
        </footer>

    </div>

    <!--+ Подключение JQuery -->
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="../js/script.js"></script>
</body>
</html>