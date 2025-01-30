const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");


const lightModeOn = (event) => {
   navbar.classList.add("navbar-light");
 };
 const lightModeOff = (event) => {
   navbar.classList.remove("navbar-light");
 };

//прошлый способ замены логотипа
/*const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
};*/

const changeNavHeight = (height) => {
  navbar.style.height = height;
}

const openMenu = (event) => { // функция открывания меню
  menu.classList.add("is-open"); // вешает класс из-опен
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow="hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => { // функция закрывания меню
  menu.classList.remove("is-open"); // убирает класс из-опен
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow=""; // возвращаем прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
  } 
});


const swiper = new Swiper('.features-slider', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
    
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  } 
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 2,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 2,
    },
  } 
});

let currentModal; // текущее модальное окно
let modalDialog; // белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели окон
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => { /* клик по переключателю*/
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);/* определяем текущее откр окно*/
    /* открываем текущее окно */
    currentModal.classList.toggle("is-open");
    /* назначаем диалоговое окно */
    modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если клик в пустую область */
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем окно */
        currentModal.classList.remove("is-open");
      }
    });
  });
});

document.addEventListener('keyup', (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open"); 
  }
});


/*document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" || 
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) && 
    currentModal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    
    currentModal.classList.toggle("is-open");
  }
});
*/

/*модальное для спасибо мое с другим классом
const modalSuccess = document.querySelector(".modal-success");
const modalDialogSuccess = document.querySelector(".modal-dialog-success");


document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modalTh" || 
    event.target.parentNode.dataset.toggle == "modalTh" ||
    (!event.composedPath().includes(modalDialogSuccess) && 
    modalSuccess.classList.contains("is-open"))
  ) {
    event.preventDefault();
    
    modalSuccess.classList.toggle("is-open");
  }
});

document.addEventListener('keyup', (event) => {
  if (event.key == "Escape" && modalSuccess.classList.contains("is-open")) {
    modalSuccess.classList.toggle("is-open"); 
  }
});
*/


//не очень правильный способ но работает
/*const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");

console.log(modalToggle);
modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("is-open");
  });
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.remove("is-open");
});

//закрытие при клике на подложку
modalWindow = document.querySelector('.modal');
modalWindow.addEventListener('click', (e) => {
  if (e.target === modalWindow) {
     modalWindow.classList.add('is-open');
     modalWindow.classList.remove('is-open');
     document.body.style.overflow = '';
  }
});
// Закрытие модального - Клик на ESC
function closeModal(){
  modalWindow.classList.add('is-open');
  modalWindow.classList.remove('is-open');
  document.body.style.overflow = '';
};
document.addEventListener('keydown', (e) => {
  if (e.code === "Escape" && modalWindow.classList.contains('is-open')) {
    closeModal(); 
  }
});*/

const forms = document.querySelectorAll("form"); // собираем все формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation 
  .addField("[name=username]", [
    {
      rule: 'required',
      errorMessage: "Укажите имя"
    },
    {
      rule: 'maxLength',
      value: 30,
      errorMessage: "Максимально 30 символов"
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: 'required',
      errorMessage: "Укажите телефон"
    },
    {
      rule: 'required',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; 
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
       method: thisForm.getAttribute("method"),
       body: formData,
    }).then((response) => {
     if (response.ok) {
      thisForm.reset();
      currentModal.classList.remove("is-open");
      alertModal.classList.add("is-open");
      currentModal = alertModal;
      modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если клик в пустую область */
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем окно */
        currentModal.classList.remove("is-open");
      }
    });
     } else {
      alert("Ошибка. Текст ошибки: ".response.statusText);
     }
    });
    };
    ajaxSend(formData);
  });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});