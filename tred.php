<?php
    require_once "conn.php";
    require_once "connection.php";

    $id = (int) $_GET['id'];

    $sql2 = "SELECT * FROM `treds` WHERE `id` = ".$id;
    $otvet2 = mysql_query($sql2);
    $row2 = mysql_fetch_assoc($otvet2);

    echo '<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <title>'.$row2["theme"].' - Тест.ч</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <link rel="icon" type="image/x-icon" href="https://test-chan.000webhostapp.com/lib/images/icon.png">
            <link rel="stylesheet" type="text/css" href="http://localhost/imageboard/lib/scripts/style.css">
        </head>
        <body>
            <a name="top"></a>
            <a href="#top"><div class="arrow-top"><img src="https://test-chan.000webhostapp.com/lib/images/arrow-top.jpg"></div></a>
            <header>
                <div id="tg">
                    <center>
                        <span>Подписывайтесь на официальный Telegram-канал Тест.ча! <a href="https://t.me/testchan_off">@testchan_off</a></span> <a class="close" onclick="close_tg()">[Х]</a>
                    </center>
                </div>
            </header>
            <header class="shapka">
                <img src="http://localhost/imageboard/lib/images/shapki/coding.jpg" width="100%">
            </header>
            <a href="https://test-chan.000webhostapp.com"><img src="https://test-chan.000webhostapp.com/lib/images/icon.png" style="width:80px; float:left; margin-top:7.5px;"></a>
            <br> <br>
            <center>
                <div class="logo">
                    <span>'.$row2["theme"].'</span>
                    <p><a id="toggleLink" href="javascript:void(0);" onclick="viewdiv("mydiv");" data-text-show="[ Закрыть форму ]" data-text-hide="[ Создать тред ]">[ Создать тред ]</a></p>
                </div>
                <div id="mydiv" style="display:none;">
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <strong>Ник</strong> <input type="text" id="name" name="name" value="Аноним"><input type="submit" id="submit" value="Отправить"> <br>
                        <strong>Тема</strong> <input type="text" name="theme" id="theme"> <br>
                        <strong>Пост</strong> <textarea id="message" name="message"></textarea> <br> <br> <br> <br> <br> <br> <br>
                        <strong>IMG</strong> <input type="file" name="upload" id="upload">
                    </form>
                    <br> <br> <br> <br> <br> <br>
                </div>
            </center>
            <div class="left_menu">
                <span class="forum">Тематика</span> <br>
                <li><a href="https://test-chan.000webhostapp.com/auto/">Автомобили</a></li>
                <li><a href="https://test-chan.000webhostapp.com/bicycles/">Велосипеды</a></li>
                <li><a href="https://test-chan.000webhostapp.com/business/">Бизнес</a></li>
                <li><a href="https://test-chan.000webhostapp.com/comics/">Комиксы</a></li>
                <li><a href="https://test-chan.000webhostapp.com/crypto/">Криптовалюты</a></li>
                <li><a href="https://test-chan.000webhostapp.com/countries/">Другие страны</a></li>
                <li><a href="https://test-chan.000webhostapp.com/style/">Мода и стиль</a></li>
                <li><a href="https://test-chan.000webhostapp.com/phys/">Физкультура</a></li>
                <li><a href="https://test-chan.000webhostapp.com/langs/">Иностранные языки</a></li>
                <li><a href="https://test-chan.000webhostapp.com/fb/">Футбол</a></li>
                <li><a href="https://test-chan.000webhostapp.com/history/">История</a></li>
                <li><a href="https://test-chan.000webhostapp.com/med/">Медицина</a></li>
                <li><a href="https://test-chan.000webhostapp.com/motocycles/">Мотоциклы</a></li>
                <li><a href="https://test-chan.000webhostapp.com/films/">Фильмы</a></li>
                <li><a href="https://test-chan.000webhostapp.com/music/">Музыка</a></li>
                <li><a href="https://test-chan.000webhostapp.com/animals/">Животные</a></li>
                <li><a href="https://test-chan.000webhostapp.com/psyho/">Психология</a></li>
                <li><a href="https://test-chan.000webhostapp.com/science/">Наука</a></li>
                <li><a href="https://test-chan.000webhostapp.com/science_fant/">Научная фантастика</a></li>
                <li><a href="https://test-chan.000webhostapp.com/sport">Спорт</a></li>
                <li><a href="https://test-chan.000webhostapp.com/space/">Космос</a></li>
                <li><a href="https://test-chan.000webhostapp.com/serials/">Сериалы</a></li>
                <li><a href="https://test-chan.000webhostapp.com/education/">Образование</a></li>
                <li><a href="https://test-chan.000webhostapp.com/walpapers/">Обои и хайрез</a></li>
                <li><a href="https://test-chan.000webhostapp.com/zog/">Теории заговора</a></li>
                <br>
                <span class="forum">Об имиджборде</span>
                <li><a href="https://test-chan.000webhostapp.com/rules.html">Правила</a></li>
                <li><a href="https://test-chan.000webhostapp.com/information.html">Информация</a></li>
                <li><a href="https://test-chan.000webhostapp.com/contacts.html">Контакты</a></li>
                <li><a href="https://t.me/testchan_off">Telegram</a></li>
                <li><a href="https://github.com/ZerZru/testchan/">GitHub</a></li>
                <br>
                <span class="forum">Творчество</span>
                <li><a href="https://test-chan.000webhostapp.com/design/">Дизайн</a></li>
                <li><a href="https://test-chan.000webhostapp.com/di/">Столовая</a></li>
                <li><a href="https://test-chan.000webhostapp.com/hobby/">Хобби</a></li>
                <li><a href="https://test-chan.000webhostapp.com/musicians/">Музыканты</a></li>
                <li><a href="https://test-chan.000webhostapp.com/painting/">Живопись</a></li>
                <li><a href="https://test-chan.000webhostapp.com/paintach/">Рисовач</a></li>
                <li><a href="https://test-chan.000webhostapp.com/photos/">Фотографии</a></li>
                <li><a href="https://test-chan.000webhostapp.com/job/">Работа</a></li>
                <br>
                <span class="forum">Политика</span>
                <li><a href="https://test-chan.000webhostapp.com/polite/">Политика</a></li>
                <li><a href="https://test-chan.000webhostapp.com/news/">Новости</a></li>
                <br>
                <span class="forum">Техника</span>
                <li><a href="https://test-chan.000webhostapp.com/gamedev/">Gamedev</a></li>
                <li><a href="https://test-chan.000webhostapp.com/pc_iron/">Комп. железо</a></li>
                <li><a href="https://test-chan.000webhostapp.com/mob_devices/">Моб. устройства</a></li>
                <li><a href="https://test-chan.000webhostapp.com/coding/">Программирование</a></li>
                <li><a href="https://test-chan.000webhostapp.com/radiotech/">Радиотехника</a></li>
                <li><a href="https://test-chan.000webhostapp.com/soft/">Программы</a></li>
                <li><a href="https://test-chan.000webhostapp.com/tech/">Техника</a></li>
                <br>
                <span class="forum">Игры</span>
                <li><a href="https://test-chan.000webhostapp.com/board_games/">Настольные игры</a></li>
                <li><a href="https://test-chan.000webhostapp.com/consoles/">Консоли</a></li>
                <li><a href="https://test-chan.000webhostapp.com/russian_viz_novels/">Российские виз.новеллы</a></li>
                <li><a href="https://test-chan.000webhostapp.com/tes/">The Elder Scrolls</a></li>
                <li><a href="https://test-chan.000webhostapp.com/video_games/">Video Games</a></li>
                <li><a href="https://test-chan.000webhostapp.com/text_rpg">Текстовые РПГ</a></li>
                <br>
                <span class="forum">Япония</span>
                <li><a href="https://test-chan.000webhostapp.com/anime/">Аниме</a></li>
                <li><a href="https://test-chan.000webhostapp.com/fandom/">Фэндом</a></li>
                <li><a href="https://test-chan.000webhostapp.com/japanese_culture/">Японская культура</a></li>
                <li><a href="https://test-chan.000webhostapp.com/manga/">Манга</a></li>
                <li><a href="https://test-chan.000webhostapp.com/viz_novels/">Визуальные новеллы</a></li>
                <br>
                <span class="forum">18+</span>
                <li><a href="https://test-chan.000webhostapp.com/discutions">Дискуссии</a></li>
                <li><a href="https://test-chan.000webhostapp.com/b/">Бред</a></li>
                <li><a href="https://test-chan.000webhostapp.com/soc/">Общение</a></li>
                <li><a href="https://test-chan.000webhostapp.com/bughurts/">Бугурты</a></li>
                <li><a href="https://test-chan.000webhostapp.com/faq.html">?Вопросы?</a></li>
            </div>
            <div id="treds">
                <br> <br> <br>
                <article id="posts">';
                require_once "engine.php";
                
                echo "<div class='tred'>
                    <span class='author'>{$row2['name']}</span>
                    <span class='date'>{$row2['date']}</span>
                    <span class='id'>№{$row2['id']}</span>
                    <div class='media'>
                        <img src='{$row2['picture']}' width='100%'>
                    </div>
                    <p class='text'>
                        {$row2['post']}
                    </p>
                </div><br><br><br>";
                show_answers("answers".$id);
                echo '
                </article>
                <br> <br>
                <div class="footer">
                    <a href="https://test-chan.000webhostapp.com/auto/">/auto/</a> <a href="https://test-chan.000webhostapp.com/bicycles/">/bicycles/</a> <a href="https://test-chan.000webhostapp.com/business/">/business/</a> <a href="https://test-chan.000webhostapp.com/comics/">/comics/</a> <a href="https://test-chan.000webhostapp.com/crypto/">/crypto/</a> <a href="https://test-chan.000webhostapp.com/countries/">/countries/</a> <a href="https://test-chan.000webhostapp.com/style/">/style/</a> <a href="https://test-chan.000webhostapp.com/phys/">/phys/</a> <a href="https://test-chan.000webhostapp.com/langs/">/langs/</a> <a href="https://test-chan.000webhostapp.com/fb/">/fb/</a> <a href="https://test-chan.000webhostapp.com/history/">/history/</a> <a href="https://test-chan.000webhostapp.com/med/">/med/</a> <a href="https://test-chan.000webhostapp.com/motocycles/">/motocycles/</a> <a href="https://test-chan.000webhostapp.com/films/">/films/</a> <a href="https://test-chan.000webhostapp.com/music/">/music/</a> <a href="https://test-chan.000webhostapp.com/animals/">/animals/</a> <a href="https://test-chan.000webhostapp.com/psyho/">/psyho/</a> <a href="https://test-chan.000webhostapp.com/science/">/science/</a> <a href="https://test-chan.000webhostapp.com/science_fant/">/science_fant/</a> <a href="https://test-chan.000webhostapp.com/sport/">/sport/</a> <a href="https://test-chan.000webhostapp.com/space/">/space/</a> <a href="https://test-chan.000webhostapp.com/serials/">/serials/</a> <a href="https://test-chan.000webhostapp.com/education/">/education/</a> <a href="https://test-chan.000webhostapp.com/wallpapers/">/wallpapers/</a> <a href="https://test-chan.000webhostapp.com/zog/">/zog/</a> <a href="https://test-chan.000webhostapp.com/design/">/design/</a> <a href="https://test-chan.000webhostapp.com/di/">/di/</a> <a href="https://test-chan.000webhostapp.com/hobby/">/hobby/</a> <a href="https://test-chan.000webhostapp.com/musicians/">/musicians/</a> <a href="https://test-chan.000webhostapp.com/painting/">/painting/</a> <a href="https://test-chan.000webhostapp.com/paintach/">/paintach/</a> <a href="https://test-chan.000webhostapp.com/photos/">/photos/</a> <a href="https://test-chan.000webhostapp.com/job/">/job/</a> <a href="https://test-chan.000webhostapp.com/polite/">/polite/</a> <a href="https://test-chan.000webhostapp.com/news/">/news/</a> <a href="https://test-chan.000webhostapp.com/gamedev/">/gamedev/</a> <a href="https://test-chan.000webhostapp.com/pc_iron/">/pc_iron/</a> <a href="https://test-chan.000webhostapp.com/mob_devices/">/mob_devices/</a> <a href="https://test-chan.000webhostapp.com/coding/">/coding/</a> <a href="https://test-chan.000webhostapp.com/radiotech/">/radiotech/</a> <a href="https://test-chan.000webhostapp.com/soft/">/soft/</a> <a href="https://test-chan.000webhostapp.com/tech/">/tech/</a> <a href="https://test-chan.000webhostapp.com/board_games/">/board_games/</a> <a href="https://test-chan.000webhostapp.com/consoles/">/consoles/</a> <a href="https://test-chan.000webhostapp.com/russian_viz_novels/">/russian_viz_novels/</a> <a href="https://test-chan.000webhostapp.com/tes/">/tes/</a> <a href="https://test-chan.000webhostapp.com/video_games/">/video_games/</a> <a href="https://test-chan.000webhostapp.com/text_rpg/">/text_rpg/</a> <a href="https://test-chan.000webhostapp.com/anime/">/anime/</a> <a href="https://test-chan.000webhostapp.com/fandom/">/fandom/</a> <a href="https://test-chan.000webhostapp.com/japanese_culture/">/japanese_culture/</a> <a href="https://test-chan.000webhostapp.com/manga/">/manga/</a> <a href="https://test-chan.000webhostapp.com/viz_novels/">/viz_novels/</a> <a href="https://test-chan.000webhostapp.com/discutions/">/discutions/</a> <a href="https://test-chan.000webhostapp.com/b/">/b/</a> <a href="https://test-chan.000webhostapp.com/soc/">/soc/</a> <a href="https://test-chan.000webhostapp.com/bughurts/">/bughurts/</a>
                </div>
                <br> <br>
                <a name="down"></a>
            </div>
            <a href="#down"><div class="arrow-down"><img src="https://test-chan.000webhostapp.com/lib/images/arrow-down.png"></div></a>
            <script src="http://localhost/imageboard/lib/scripts/main.js"></script>
        </body>
    </html>';
?>