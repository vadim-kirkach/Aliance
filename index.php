<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="/css/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="/css/normalize.css"/>
  <link rel="stylesheet" href="/css/style.css"/>
  <title>Aliance Production</title>
</head>
<body class="front-page">
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">О компании</a>
      </li>

      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>

      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
      </li>

      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Новости</a>
      </li>

      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="mobile-icon" width="24px" height="24px">
        <use href="img/sprite.svg#mark"></use>
      </svg>
      <address class="mobile-info-address">г. Москва, Холодильный пер. 4к1с8</address>
    </div>

    <div class="mobile-info">
      <svg class="mobile-icon" width="24px" height="24px">
        <use href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
    </div>
    <div class="mobile-info">

    <a href="#" class="mobile-info-email">
        <svg class="mobile-icon" width="24px" height="24px">
        <use href="img/sprite.svg#vk"></use>
      </svg>
    </a>
    <a href="#" class="mobile-info-email">
        <svg class="mobile-icon" width="24px" height="24px">
        <use href="img/sprite.svg#inst"></use>
      </svg>
    </a>

    </div>

  </div>

  <nav class="navbar">
    <a href="" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light" width="140px" height="44px">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark" width="140px" height="44px">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="./about.php" class="header-nav-link">О компании</a>
      </li>

      <li class="header-nav-item">
        <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
      </li>

      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>

      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a>
      </li>

      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>

    <div class="header-phone">
      <svg class="phone-icon" width="24px" height="24px">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <!-- /.header-phone -->
     <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="24px" height="24px">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
     </button>

  </nav>
  <!-- /.navbar -->
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
        <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
        <div class="button header-button" data-toggle="modal" data-target="#feedback-modal">
          Подробнее о компании</div>
       </div>

       <?php include_once('./template-parts/features-slider.php');?>


       <!-- <ul class="header-features">
        <li class="header-features-item">
          <svg class="logo-svg" width="36px" height="36px">
            <use href="img/sprite.svg#time"></use>
          </svg>
          <p class="header-features-text">Непрерывная работа c 2017 года</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg" width="36px" height="36px">
            <use href="img/sprite.svg#certificate"></use>
          </svg>
          <p class="header-features-text">Вся продукция сертифицирована</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg" width="36px" height="36px">
            <use href="img/sprite.svg#quality"></use>
          </svg>
          <p class="header-features-text">Контроль качества на всех этапах</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg" width="36px" height="36px">
            <use href="img/sprite.svg#delivery"></use>
          </svg>
          <p class="header-features-text">Возможны поставки по всей России</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg" width="36px" height="36px">
            <use href="img/sprite.svg#speed"></use>
          </svg>
          <p class="header-features-text">Оперативное производство</p>
        </li>
       </ul> -->
    </div>
    <!-- /.container -->
  </header>
  
  <?php include_once('./template-parts/steps-slider.php');?>

  <?php $block_title = "контрактное производство"; include_once('./template-parts/production-block.php');?>

  <?php $block_title = "собственные торговые марки"; include_once('./template-parts/trademarks-block.php');?>

  <!--<div class="section section-mark">
    <div class="container-white">
      <div class="seporator"></div>
      <h2 class="section-title">собственные торговые марки</h2>
      <div class="cards-mark">

        <a href="#" class="card-mark">
          <img src="/img/AGTECH.png" alt="" class="card-mark-image">
          <div class="card-mark-content">
            
            <h3 class="card-mark-title">Автомобильная химия</h3>
            <p class="card-mark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </div>
        </a>

        <a href="#" class="card-mark">
          <img src="/img/AP.png" alt="" class="card-mark-image">
          <div class="card-mark-content">
            
            <h3 class="card-mark-title">Бытовая химия</h3>
          <p class="card-mark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </div>
        </a>

      </div>
    </div>
  </div>-->
  <?php include_once('./template-parts/founder-block.php');?>
  
  <?php include_once('./template-parts/clients-block.php');?>
  <!-- /.section clients -->
   <section class="section blog">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">Блог экспертов в области производства</h2>
      
      <!-- Slider main container -->
<div class="swiper blog-slider">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <a href="#" class="swiper-slide blog-card">
        <picture class="blog-card-image">
              <source type="image/webp" srcset="/img/blog/blog1.webp">
              <source type="image/png" srcset="/img/blog/blog1.png">
              <img src="/img/blog/blog1.png" alt="">
        </picture>
      
      <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
      <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>
    <a href="#" class="swiper-slide blog-card">
        <picture class="blog-card-image">
              <source type="image/webp" srcset="/img/blog/blog2.webp">
              <source type="image/png" srcset="/img/blog/blog2.png">
              <img src="/img/blog/blog2.png" alt="">
        </picture>
      
      <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
      <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>
    <a href="#" class="swiper-slide blog-card">
        <picture class="blog-card-image">
              <source type="image/webp" srcset="/img/blog/blog1.webp">
              <source type="image/png" srcset="/img/blog/blog1.png">
              <img src="/img/blog/blog1.png" alt="">
        </picture>
      
      <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
      <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>
  </div>
  
  <div class="blog-slider-footer">
    <a href="#" class="button-link">Весь блог</a>
    <!-- navigation buttons -->
  <div class="blog-buttons primary-buttons-wrapper">
    <div class="blog-button-prev primary-button-prev">
      <svg width="36px" height="24px">
        <use href="img/sprite.svg#arrow-prev"></use>
      </svg>
    </div>
    <div class="blog-button-next primary-button-next">
      <svg width="36px" height="24px">
        <use href="img/sprite.svg#arrow-next"></use>
      </svg>
    </div>
  </div>
  </div>

</div>
    </div>
   </section>
   <!-- /.section blog -->
  
   <?php include_once('footer.php');?>