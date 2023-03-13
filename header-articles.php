<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
   <link
      href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700,800&display=swap&subset=cyrillic-ext"
      rel="stylesheet" />
</head> 

 <body>

   <div class="wrapper">
      <header class="header _other">
         <div class="header__container _container">
            <a href="/home/" class="header__logo">Fountain</a>
            <div class="main-header__menu">
               <div class="header__icon">
                  <span></span>
               </div>
               <nav class="header__menu menu">
                  <ul class="menu__list">
                     <li class="menu__item">
                        <a href="/home/" class="menu__link">Главная</a>
                     </li>
                     <li class="menu__item">
                        <a data-goto=".page__getintouch" href="#" class="menu__link">Контакты</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </header> 