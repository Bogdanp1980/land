<?php
  $connection = mysqli_connect("localhost","root","","dz");
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  if(isset($_POST['client_contacts']) && isset($_POST['mail']) && $_POST['mail'] != ""){
    mail("votoran1990@gmail.com", "Тема сообщения","Содержание сообщения");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Animation Lesson</title>
  <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />
</head>
<body id="body">
<div class="block_contacts" id="blockcontacts">
  <span class="block_contacts-close" id="close_js">
    <img src="img/13725.png" alt="Image n1">
  </span>
    <div class="block_contacts-title">У вас есть вопросы?</div>
    <div class="block_contacts-content">Пожалуйста, введите Ваш номер телефона, и наш специалист свяжется с вами в ближайшее время, узнает ваши пожелания и ответит на все вопросы.</div>
    <form class="form_client" method="post">
        <input class="input" name="mail" placeholder="   Укажите свой номер телефона">
        <button name="client_contacts">Перезвонить мне</button>
    </form>
</div>

  <header>
    <nav>
      <div class="container">
        <div class="row">
          <div class="header__logo">
            <center><img src="img/logos.png" alt="Image n1"></center>
          </div>

          <div class="header__table">
            <ul>
              <li><a href="#us">О нас</a></li>
              <li><a href="#services" class="active">Услуги</a></li>
              <li><a href="#portfilio">Портфолио</a></li>
              <li><a href="#price">Стоимость и сроки</a></li>
              <li><a href="#contacts">Контакты</a></li>
            </ul>
            <span class="header__bag">
              <img src="img/cart.svg" alt="Image n1">
            </span>
            <span class="header__search">
              <img src="img/search.svg" alt="Image n1">
            </span>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </nav>
    <div class="header__content" id="price">
      <div class="header__title">
        <h2>Быстро и качествено</h2>
        <h1>Разработка лендинга под ключ за 4999 рублей!</h1>
        <p>Акция! При заказе лендинга до 31.09.17 - Яндекс Директ БЕСПЛАТНО</p>
        <button class="header__content__button" id="open_close"><a href="#">Оставить заявку</a></button>
        <!--Кнопку всегда помещаем в тег <button> + в кнопку вставляем ссылку(<a>), потому что каждая кнопка куда-то ведет -->
      </div>
    </div>
  </header>


  <section class="advantages-section" id="services">
    <div class="container">
      <div class="advantages__row">
        <div class="row">
          <div class="advantages__col">
            <img src="img/pencil.png">
            <h2>Адаптивность</h2>
            <p>Корректное отображение вашего сайта на всех доступных устройствах (телефоны, планшеты, компьютеры)</p>
            <!--  <hr>  -->
          </div>
          <div class="advantages__col">
            <img src="img/matherial.png">
            <h2>Акция</h2>
            <p>При заказе лендинга - настройка Яндекс Директа БЕСПЛАТНО!</p>
            <!--  <hr>  -->
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="advantages__row">
        <div class="row">
          <div class="advantages__col">
            <img src="img/settings.png">
            <h2>Подержка</h2>
            <p>Сопровождение вашего проекта в течении 1 года</p>
            <!--  <hr>  -->
          </div>
          <div class="advantages__col">
            <img src="img/folder.png">
            <h2>Помощь</h2>
            <p>Помощь в выборе домена и хостинга. Размещение лендинга на хостинге</p>
            <!--  <hr>  -->
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>


  <section class="portfolio-section">
    <div class="container">
      <div class="portfolio__content">
        <h2>Мы реализуем Ваши идеи</h2>
        <p></p>
      </div>
      <div class="portfolio__browser">
        <div class="browser__left browser__col">
          <img src="img/browser-left.png">
        </div>
        <center><div class="browser__center browser__col">
          <img src="img/browser-center.png">
        </div></center>
        <div class="browser__right browser__col">
          <img src="img/browser-right.png">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>


  <section class="wordpress-section">
    <div class="container">
      <div class="wordpress__content">
        <h2>Мы реализуем Ваши идеи</h2>
        <p>Don't Forget to Rate the Template. Thanks so much!</p>
      </div>
      <center><button class="block_contacts-close" id="open_close2">Оставить заявку</button></center>
      <div class="clearfix"></div>
    </div>
  </section>


  <section class="projects-section" id="portfilio">
    <div class="container">
      <div class="projects-section__title">
        <h2>Портфолио</h2>

      </div>

      <div class="projects-section__content">
        <div class="projects-section__col">
          <div class="projects-section__img">
            <img src="img/projects/photo.png">
            <img src="img/projects/arrow.png" class="projects__arrow">
          </div>
          <h2>Claritas Etiam Processus</h2>
          <h4>Photography, Nature</h4>
        </div> <!-- Col-column колонка-->
        <div class="projects-section__col">
          <div class="projects-section__img">
            <img src="img/projects/photo2.png">
            <img src="img/projects/arrow.png" class="projects__arrow">
          </div>
          <h2>Quam Nutamus Farum</h2>
          <h4>Graphic Design, Mock-Up</h4>
        </div> <!-- Col-column колонка-->
        <div class="projects-section__col">
          <div class="projects-section__img">
            <img src="img/projects/photo3.png">
            <img src="img/projects/arrow.png" class="projects__arrow">
          </div>
          <h2>Usus Legentis Videntur</h2>
          <h4>Photography, Holiday</h4>
        </div> <!-- Col-column колонка-->
        <div class="projects-section__col">
          <div class="projects-section__img">
            <img src="img/projects/photo4.png">
            <img src="img/projects/arrow.png" class="projects__arrow">
          </div>
          <h2>Claritas Etiam Processus</h2>
          <h4>Photography, Nature</h4>
        </div> <!-- Col-column колонка-->
        <div class="projects-section__col">
          <div class="projects-section__img">
            <img src="img/projects/photo5.png">
            <img src="img/projects/arrow.png" class="projects__arrow">
          </div>
          <h2>Quam Nutamus Farum</h2>
          <h4>Graphic Design, Mock-Up</h4>
        </div> <!-- Col-column колонка-->
        <div class="projects-section__col">
          <div class="projects-section__img">
            <img src="img/projects/photo6.png">
            <img src="img/projects/arrow.png" class="projects__arrow">
          </div>
          <h2>Usus Legentis Videntur</h2>
          <h4>Photography, Holiday</h4>
        </div> <!-- Col-column колонка-->
        <button class="button" class="header__content__button1" id="open_close1">Оставить заявку</button>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>


  <section class="video-section">
    <div class="container">
      <div class="video__content">
        <div class="video__picture">
          <center><img src="#"></center>
        </div>
        <h2>"В будущем на рынке останется два вида компаний: те, кто в Интернете и те, кто вышел из бизнеса"</h2>
        <p>Билл Гейтс. Cамый богатый человек на земле.</p>
      </div>
    </div>
  </section>


  <section class="adaptive-section">
    <div class="container">
      <div class="adaptive__col">
        <img src="img/modile-device/mobile-bg.png">
      </div>
      <div class="adaptive__content">
        <h2>Почему Лендинг эффективней обычного сайта:</h2>

        <ul>
          <li><img src="img/modile-device/arrow.svg"><h4>Захватывает внимание посетителя
и удерживает его на сайте;</h4></li>
          <li><img src="img/modile-device/arrow.svg"><h4>Предлагает посетителю только то,
что его интересует;</h4></li>
          <li><img src="img/modile-device/arrow.svg"><h4>Показывает товар или услугу в самом
выгодном свете;</h4></li>
          <li><img src="img/modile-device/arrow.svg"><h4>Предлагает решение проблемы посетителя
прямо сейчас;</h4></li>
          <li><img src="img/modile-device/arrow.svg"><h4>Вызывает желание действовать и мотивирует оставить контакты</h4></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>


  <section class="counter-section" id="us">
    <div class="container">
      <center>
        <div class="counter__col">

          <h2>3</h2>
          <h4>3 года на рынке</h4>
          <hr>
        </div>
        <div class="counter__col">

          <h2>43</h2>
          <h4>Более 43 выполненных работ</h4>
          <hr>
        </div>
        <div class="counter__col">

          <h2>4</h2>
          <h4>Команда из 4 специалистов</h4>
          <hr>
        </div>
        <div class="counter__col">

          <h2><img src="img/counter/message.png" alt="873"></h2>
          <h4>Работаем с пользой на результат</h4>
          <hr>
        </div>
        <div class="counter__col">

          <h2><img src="img/counter/client.png" alt="900"></h2>
          <h4>Клиенты рекомендуют нас</h4>
          <hr>
        </div>
        <div class="clearfix"></div>
      </center>
    </div>
  </section>




  <section class="footer-bottom" id="contacts">
    <div class="container">
      <div class="header__logo">
            <center><img src="img/logos.png" alt="Image n1"></center>
          </div>
          <div class="header__table">
            <ul>
              <li><a href="#us">О нас</a></li>
              <li><a href="#services" class="active">Услуги</a></li>
              <li><a href="#portfilio">Портфолио</a></li>
              <li><a href="#price">Стоимость и сроки</a></li>
              <li><a href="#contacts">Контакты</a></li>
            </ul>
            <span class="header__bag">
              <img src="img/cart.svg" alt="Image n1">
            </span>
            <span class="header__search">
              <img src="img/search.svg" alt="Image n1">
            </span>
          </div>
      <div class="clearfix"></div>
    </div>
  </section>



  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-3.2.0.min.js"></script>
  <script src="js/common.js"></script>
</body>
</html>
