<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-04 14:05:06
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601bf102ec55e1_04282301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1611237234,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_601bf102ec55e1_04282301 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost:8080/6-python">
            <figure>
              <img src="http://localhost:8080/modules/ps_imageslider/images/d4a182201ba70b54ed5a0c8b492bd5eb88e71f84_slider1.png" alt="Promocja!">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Kodujesz?</h2>
                  <div class="caption-description"><p style="text-align:right;">Czy wiesz że python jest polecany, jako najlepszy i najłatwiejszy język do nauki programowania? Jeśli chcesz więc postawić swoje pierwsze kroki w IT, warto zacząć od oswajania właśnie pythona!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost:8080/14-inne">
            <figure>
              <img src="http://localhost:8080/modules/ps_imageslider/images/b88da84e5b6b150b8cc1a6a6ec9c9bca53e8f8d1_slider2.png" alt="świąteczna promocja -30%">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Czystość popłaca!</h2>
                  <div class="caption-description"><h3 style="text-align:right;"><span style="font-size:12.87px;">Dobrze wiemy, jak ogromne korzyści przynosi uporządkowany kod. Do końca roku możesz skorzystać z promocji -30% zamawiając dwie książki o poprawnym formatowaniu swojego kodu!</span></h3></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost:8080/najczesciej-kupowane">
            <figure>
              <img src="http://localhost:8080/modules/ps_imageslider/images/f05a7c175f277e000fd03c958a41850fe0a91a75_slider3.png" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Wszystko pod Kontrolą</h2>
                  <div class="caption-description"><h3 style="text-align:right;"><span style="font-size:12.87px;">Na naszych serwerach możesz czuć się bezpiecznie. Zapewniamy najlepszą jakość zabezpieczeń i prywatności Twoich zakupów. Dbamy o to, by Twoje dane nigdy nie wyciekły z naszego serwera.</span></h3></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
