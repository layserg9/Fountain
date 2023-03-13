"use strict"
/*--------------КНОПКА БУРГЕР_______---------*/
const iconMenu = document.querySelector(".header__icon");
const headerMenu = document.querySelector(".header__menu");
if (iconMenu) {
   iconMenu.addEventListener("click", function (e) {
      document.body.classList.toggle("_lock");
      headerMenu.classList.toggle('_active');
      iconMenu.classList.toggle('_active');
   });
}
/* ----------------прокрутка при клике--------------------------------------------*/


/*Выбираем все объекты menu__link с атрибутом data-goto*/
const menuLinks = document.querySelectorAll('.menu__link[data-goto], .main-block__button[data-goto]');
/*Если объекты menuLinks существуют, то*/
if (menuLinks.length > 0) {
   /*на каждый элемент массива накладываем обработчик событий и функцию*/
   menuLinks.forEach(menuLink => {
      menuLink.addEventListener("click", onMenuItemClick);

   });
   function onMenuItemClick(e) {
      /* e.target - объект, на который мы кликнули*/
      const menuLink = e.target;

      /* Если дата атрибут заполнен И объект, на который ссылаемся существует, то*/
      if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
         /*Получаем в константу объект, на который должен идти переход*/
         const gotoBlock = document.querySelector(menuLink.dataset.goto);
         /*Вычисляем местоположение объекта от верха (top) в пикселях с учетом прокрученных пикселей*/
         const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset
         /*Если шапка фиксирована сверху, тогда отнимаем её ширину*/
         /* - document.querySelector('header').offsetHeight*/;

         /*Закрыть бургер-меню, при нажатии на раздел меню*/

         if (iconMenu.classList.contains('_active')) {
            document.body.classList.remove("_lock");
            headerMenu.classList.remove('_active');
            iconMenu.classList.remove('_active');
         }

         window.scrollTo({
            top: gotoBlockValue,
            behavior: "smooth"
         });
         e.preventDefault();
      }
   }
};

/*________________________SLIDER________________________________________*/
$(document).ready(function () {
   $('.slider__slider').slick({
      dots: true,
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
         {
            breakpoint: 768,
            settings: {
               slidesToShow: 2,
            }
         }, {
            breakpoint: 550,
            settings: {
               slidesToShow: 1,
            }
         }
      ]
   });
   $('.slider__slider_text').slick({
      dots: true,
      slidesToShow: 1,
      autoplay: false,
   });
});

/*=============Кнопка вверх===========================*/
window.addEventListener('scroll', function () {
   const scroll = document.querySelector('.upBotton__body');
   scroll.classList.toggle("active", window.scrollY > 500)
});
function scrollTopTop() {
   window.scrollTo({
      top: 0,
      behavior: "smooth",
   });
};

/*--------------Обработчик формы заявки--------------------*/
document.addEventListener('DOMContentLoaded', function () {
   const form = this.document.getElementById('form');
   form.addEventListener('submit', formSend);

   async function formSend(e) {
      e.preventDefault();
      let error = formValidate(form);
   }


   function formValidate(form) {
      let error = 0;
      let formReq = document.querySelectorAll('._req');

      for (let index = 0; index < formReq.lenght; index++) {
         const input = formReq[index];
         formRemoveError(input);

         if (input.value === '') {
            formAddError(input);
            error++;
         }


      }
   }
   function formAddError(input) {
      input.parentElement.classlist.add('_error');
      input.classList.add('_error');
   }
   function formRemoveError(input) {
      input.parentElement.classlist.remove('_error');
      input.classList.remove('_error');
   }
});