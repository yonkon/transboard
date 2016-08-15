<?php
/**
 * @var $app CWebApplication
 */
$app = Yii::app();
?>

<div id="burgerNav" class="burger-nav"></div>
<div id="siteWrap" class="site-wrap">
  <header class="header-container">
    <div class="inner">
      <div class="clr">
        <a class="website-icon" href="" title="<?= $app->params['metaTitle']; ?>"><h1><?= $app->params['siteName']; ?></h1></a>
        <div class="nav-box">
          <a class="postnewlink om-button blue icon-plus" data-toggle="modal" data-href="#postAdLayer" href="/advert/add" title="<?= __("Добавить объявление")?>"><?= __("Добавить объявление")?></a>
          <script type="text/javascript">
            observedNC = [];
            observedNC['ads'] = [];
            observedNC['searches'] = [];
            observedNC['toSynchronize'] = '';
          </script>
          <ul class="userbox">
            <li id="observed-counter" class="star-box hidden">
              <a id="observed-ads-link" class="icon-observe_Active hidden" href="/advert/viewed" title="<?= __("Просмотренные")?>">
                <strong class="counter"></strong>
                <span class="text hidden-sm hidden-md"><?= __("Просмотренные")?></span>
              </a>
              <a id="observed-search-link" class="icon-observe_Active " href="/advert/search" title="<?= __("Поиск")?>">
                <strong class="counter"></strong>
                <span class="text hidden-sm hidden-md"><?= __("Найденные")?></span>
              </a>
            </li>
            <li id="my-account-link" class="user-box">
              <a class="icon-mojeotomoto action-link" href="/profile" id="topLoginLink">
			<span class="text hidden-sm hidden-md">
               <?= __("Личный кабинет")?></span>
              </a>
            </li>
          </ul>
          <div class="hidden" id="burgerNavSource">
            <a class="icon-plus newad-link" href="/advert/add"><?= __("Добавить объявление")?></a>
            <h5><?= __("Просмотренные")?>:</h5>
            <ul>
              <li><a href="/advert/favourites"><?= __("Избранные объявления")?><span class="notifycircle hidden" id="observed-counter-ads-rwd"><?= $viewed_count ?></span></a></li>
              <li><a href="/advert/search"><?= __("Сохраненный поиск")?><span class="notifycircle hidden" id="observed-counter-searches-rwd"><?= $search_count ?></span></a></li>
            </ul>
            <h5>Моя <?= $app->params['siteName']?></h5>
            <ul>
              <li><a class="login-link" href="/login"><?= __("Войти")?><span class="icon-mojeotomoto"></span></a></li>
              <li><a href="/register"><?= __("Регистрация")?></a></li>
              <li><a href="/register_dealer"><?= __("Регистрация торговых представителей")?></a></li>
            </ul>
          </div>
        </div>
        <div class="nav-box-mobile visible-xs-block">
          <a id="openLeftMenu" class="menu-burger icon-burger abs" href="<?= $app->createUrl('') ?>"></a>
          <a class="icon-plus" href="<?= $app->createUrl('/advert/add') ?>"></a>
          <a class="menu-filters icon-search_filters_bars abs" href="<?= $app->createUrl('/advert/favourites') ?>"><span class="icon-sercz"></span></a>
        </div>
      </div>
    </div>
  </header>
  <div class="social-float-bar">
    <a class="social-float-bar__link" data-website="facebook" href="<?= $app->params['social']['fb']['page']?>" target="_blank" >
      <span class="social-float-bar__label"><?=__("Страница Facebook") ?></span>
    </a>
    <a class="social-float-bar__link" data-website="youtube" href="<?= $app->params['social']['youtube']['page']?>" target="_blank" >
      <span class="social-float-bar__label"><?= __('YouTube') ?></span>
    </a>
  </div>
  <main class="body-container">
    <div class="full-branding clr rel">
      <div id="homebanner" class="full-branding__wrapper">
        <a href="<?= $app->createUrl('') ?>" target="_blank" data-homebanner-link class="full-branding__banner"
           style="background-image: url('/images_homepagebanner_otomotopl/829190881_1_1920x480_rev006.jpg')">&nbsp;</a><? //todo link?>
        <img src="http://pubads.g.doubleclick.net/gampad/ad?iu=/55100874/Otomoto_pl/Mainpage/Background&sz=1x1&t=&c=12345678" height="1" width="1" />
        <script type="text/javascript">document.body.className += " has-bg-banner";</script>
      </div>
    </div>

    <div class="container-fluid container-md no-gutter">
      <div class="row no-gutter">
        <div class="om-searcharea js-search-area search-area">
          <div class="categories-main-block search-area__tabs-header">
            <ul id="categories-main" class="om-tabs search-area__tabs-header-inner-wrapper">
              <li data-click-report data-content="params_29" class="selected search-area__tab-item">
                <a href="<?= $app->createUrl('/cars') ?>" title="<?= __('Легковые') ?>" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-osobowe"></span>
                  <h2 class="search-area__tab-label"><?= __('Легковые') ?></h2>
                </a>
              </li>
              <li data-click-report data-content="params_1" class=" search-area__tab-item">
                <a href="<?= $app->createUrl('/maszyny-rolnicze/') ?>" title="Maszyny rolnicze" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-maszyny-rolnicze"></span>
                  <h2 class="search-area__tab-label">Rolnicze</h2>
                </a>
              </li>
              <li data-click-report data-content="params_73" class=" search-area__tab-item">
                <a href="<?= $app->createUrl('/dostawcze/') ?>" title="Samochody dostawcze" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-dostawcze"></span>
                  <h2 class="search-area__tab-label">Dostawcze</h2>
                </a>
              </li>
              <li data-click-report data-content="params_57" class=" search-area__tab-item">
                <a href="<?= $app->createUrl('/ciezarowe/') ?>" title="Samochody ciężarowe" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-ciezarowe"></span>
                  <h2 class="search-area__tab-label">Ciężarowe</h2>
                </a>
              </li>
              <li data-click-report data-content="params_65" class=" search-area__tab-item">
                <a href="<?= $app->createUrl('/motocykle-i-quady/') ?>" title="" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-motocykle-i-quady"></span>
                  <h2 class="search-area__tab-label">Motocykle</h2>
                </a>
              </li>
              <li data-click-report data-content="params_31" class=" search-area__tab-item">
                <a href="<?= $app->createUrl('/maszyny-budowlane/') ?>" title="Maszyny budowlane" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-maszyny-budowlane"></span>
                  <h2 class="search-area__tab-label">Budowlane</h2>
                </a>
              </li>
              <li data-click-report data-content="params_9" class=" search-area__tab-item">
                <a href="<?= $app->createUrl('/przyczepy/') ?>" title="Przyczepy i naczepy" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-przyczepy"></span>
                  <h2 class="search-area__tab-label">Przyczepy</h2>
                </a>
              </li>
              <li class="ignore search-area__tab-item search-area__dropdown-tab">
                <a href="#" class="search-area__tab-link search-area__dropdown-link"><?= __('Другие категории') ?></a>
                <div class="search-area__dropdown">
                  <a href="<?= $app->createUrl('/osobowe/') ?>" class="search-area__dropdown-option" data-click-report data-category="29"><h2 class="search-area__dropdown-option-text">Osobowe</h2></a>
                  <a href="<?= $app->createUrl('/maszyny-rolnicze/') ?>" class="search-area__dropdown-option" data-click-report data-category="1"><h2 class="search-area__dropdown-option-text">Rolnicze</h2></a>
                  <a href="<?= $app->createUrl('/dostawcze/') ?>" class="search-area__dropdown-option" data-click-report data-category="73"><h2 class="search-area__dropdown-option-text">Dostawcze</h2></a>
                  <a href="<?= $app->createUrl('/ciezarowe/') ?>" class="search-area__dropdown-option" data-click-report data-category="57"><h2 class="search-area__dropdown-option-text">Ciężarowe</h2></a>
                  <a href="<?= $app->createUrl('/motocykle-i-quady/') ?>" class="search-area__dropdown-option" data-click-report data-category="65"><h2 class="search-area__dropdown-option-text">Motocykle</h2></a>
                  <a href="<?= $app->createUrl('/maszyny-budowlane/') ?>" class="search-area__dropdown-option" data-click-report data-category="31"><h2 class="search-area__dropdown-option-text">Budowlane</h2></a>
                  <a href="<?= $app->createUrl('/przyczepy/') ?>" class="search-area__dropdown-option" data-click-report data-category="9"><h2 class="search-area__dropdown-option-text">Przyczepy</h2></a>
                  <a href="<?= $app->createUrl('http://allegro.pl/czesci-samochodowe-620') ?>" class="search-area__dropdown-option" data-category="allegro" target="_blank">
                    <h2 class="search-area__dropdown-option-text">Części <span>Allegro</span></h2></a>
                </div>
              </li>
              <li class="ignore search-area__tab-item" data-content="allegro">
                <a href="<?= $app->createUrl('http://allegro.pl/czesci-samochodowe-620') ?>" target="_blank" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-czesci"></span>
                  <strong class="search-area__tab-label">Części <span>Allegro</span></strong>
                </a>
              </li>
            </ul>
            <span class="search-area__arrow" data-action="prev">&lt;</span>
            <span class="search-area__arrow" data-action="next">&gt;</span>
          </div>
          <div class="om-tabs-content search-area__tabs-content">
            <script type="text/javascript">
              function replacePlaceholder(id, text) {
                document.getElementById(id).setAttribute('title', text);
                document.getElementById(id).setAttribute('placeholder', text);
              }
            </script>

            <ul class="advanced-search searchmain search-area__tabs-inner-wrapper" id="indexSearchParameters">
              <li data-content="params_29" class="selected clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_29" method="POST" action="/advert/" data-category="29">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="condition" id="status_both-29" />
                      <label for="status_both-29" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="condition" id="status_new-29" value="new" />
                      <label for="status_new-29" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="condition" id="status_used-29" value="used" />
                      <label for="status_used-29" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="category" value="29" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      <?= __('Модель и марка') ?>                                                                                                                                                                                                                                                                                                                </label>
                    <select name="make" data-default-label="<?= __('Марка') ?>" data-key="make" id="param571" data-param-id="571" class="custom searchFormParam" title="<?= __('Марка') ?>">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value=""><?= __('Марка') ?></option>
                      <option value="acura"><?= __('Acura') ?></option>
                      <option value="aixam">Aixam</option>
                      <option value="alfa-romeo">Alfa Romeo</option>
                      <option value="aro">Aro</option>
                      <option value="asia">Asia</option>
                      <option value="aston-martin">Aston Martin</option>
                      <option value="audi">Audi</option>
                      <option value="austin">Austin</option>
                      <option value="bentley">Bentley</option>
                      <option value="bmw">BMW</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <select name="model" data-default-label="Model" data-key="model" id="param573" data-param-id="573" class="custom searchFormParam" title="Model">
                      <!-- data-name="search[filter_enum_model][]"  -->
                    </select>
                  </div>
                  <div class="advanced-search-box fblock price filter-item search-area__field" data-key="price">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      <?= __('Цена') ?>
                    </label>
                    <input type="number" maxlength="13" name="price_from" value="" id="search[filter_float_price:from]-cat_id-29"
                           class="search-area__input from-value-input" title="<?= __('Цена от ') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:from]-cat_id-29",
                          "<?= __('от') ?>"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="price_to" value="" id="search[filter_float_price:to]-cat_id-29"
                           class="search-area__input to-value-input" title="<?= __('Цена до ') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:to]-cat_id-29",
                          "<?= __('до') ?>"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      <?= __('Год выпука') ?>:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="year_from" value="" id="search[filter_float_year:from]-cat_id-29"
                           class="search-area__input from-value-input" title="<?= __('Год выпуска, от') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-29",
                          "<?= __('от') ?>"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="year_to" value="" id="search[filter_float_year:to]-cat_id-29"
                           class="search-area__input to-value-input" title="<?= __('Год выпуска, до') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-29",
                          "<?= __('до') ?>"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock mileage filter-item search-area__field" data-key="mileage">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      <?= __('Пробег') ?>
                    </label>
                    <input type="number" maxlength="13" name="mileage" value="" id="search[filter_float_mileage:from]-cat_id-29"
                           class="search-area__input from-value-input" title="<?= __('Пробег, от') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_mileage:from]-cat_id-29",
                          "<?= __('от') ?>"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="mileage_to" value="" id="search[filter_float_mileage:to]-cat_id-29"
                           class="search-area__input to-value-input" title="<?= __('Пробег, до') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_mileage:to]-cat_id-29",
                          "<?= __('до') ?>"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock fuel_type filter-item search-area__field" data-key="fuel_type">
                    <!-- closes before foreach ends -->
                    <input type="hidden" value="" name="fuel_type" id="fuel_type" />
                    <span class="fuel_type_label search-area__fuel-type-label"><?= __('Подача топлива') ?>:</span>
                    <span data-key="petrol" class="fuel_type_box search-area__fuel-type-option"><?= __('Бензин') ?></span>
                    <span data-key="diesel" class="fuel_type_box search-area__fuel-type-option"><?= __('Дизель') ?></span>
                    <span class="fuel_type_box search-area__fuel-type-option active"><?= __('Другой') ?></span>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label"><?= __('Искать') ?></span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});"><?= __('Расширенный поиск') ?></button>
                </form>
              </li>
              <li data-content="params_1" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_1" method="POST" action="/advert/search" data-category="1">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="condition" id="status_both-1" />
                      <label for="status_both-1" class="search-area__status-label"><?= __('Все') ?></label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-1" value="new" />
                      <label for="status_new-1" class="search-area__status-label"><?= __('Новые') ?></label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-1" value="used" />
                      <label for="status_used-1" class="search-area__status-label"><?= __('Подержанные') ?></label>
                    </div>
                  </div>
                  <input type="hidden" name="category" value="1" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      <?= __('Марка и модель') ?>
                    </label>
                    <select name="make" data-default-label="<?= __('Марка') ?>" data-key="make" id="param1" data-param-id="1" class="custom searchFormParam" title="<?= __('Марка') ?>">
                      <option value=""><?= __('Марка') ?></option>
                      <option value="accord"><?= __('Аккорд') ?></option>
                      <option value="agco">Agco</option>
                      <option value="aguirre">Aguirre</option>
                      <option value="allis">Allis</option>
                      <option value="amazone">Amazone</option>
                      <option value="ausa">Ausa</option>
                      <option value="avant">Avant</option>
                      <option value="bargam">Bargam</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <input class="search-area__input" type="text" maxlength="13" name="q" value="" placeholder="<?= __('Модель') ?>" />
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      <?= __('Год выпуска') ?>
                    </label>
                    <input type="number" maxlength="4" name="year_from" value="" id="search[filter_float_year:from]-cat_id-1"
                           class="search-area__input from-value-input" title="<?= __('Год выпуска, от') ?>" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-1",
                          "<?= __('от') ?>"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="year_to" value="" id="search[filter_float_year:to]-cat_id-1"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-1",
                          "<?= __('до') ?>"
                        );
                      }
                    </script>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label"><?= __('Искать') ?></span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});"><?= __('Расширенный поиск') ?></button>
                </form>
              </li>
            </ul>
          </div>
        </div>


        <div class="daily-offers offer-big">
          <div class="item-box">
            <div class="item-body big">
              <a class="rel img-cover" href="<?= $app->createUrl('/view/bmw-seria-4-xdrive-cabrio-dealer-bmw-zdunek-2015r-ID4p5dq3') ?>" style="background-image: url('/images_otomotopl/817196879_8_732x488_xdrive-cabrio-dealer-bmw-zdunek-2015r-_rev002.jpg')" title="BMW Seria 4 xdrive Cabrio Dealer BMW Zdunek 2015r">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <div class="clr">
                    <strong><?= __('Предложение дня') ?></strong>
                    <span class="om-price">246 900 <sup>UAH</sup></span>
                  </div>
                  <h3 class="om-title">
                    <a href="<?= $app->createUrl('/view/bmw-seria-4-xdrive-cabrio-dealer-bmw-zdunek-2015r-ID4p5dq3.html') ?>" title="BMW Seria 4 xdrive Cabrio Dealer BMW Zdunek 2015r">
                      <span class="visible-tablet-up">BMW Seria 4 xdrive Cabrio ...</span>
                      <span class="visible-mobile">BMW Seria 4 xdrive Cabrio Dealer BMW Zdunek 2015r</span>
                    </a>
                  </h3>
                </div>
                <ul class="offer-params">
                  <li>2015</li>
                  <li>10000 km</li>
                </ul>
              </div>
            </div>
          </div>
        </div>



        <div class="daily-offers offers-mid">
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/opel-insignia-ID6yjMD1.html') ?>" title="Opel Insignia" style="background-image: url('/images_otomotopl/829069509_6_732x488_rev001.jpg')">
                <span class="img-overlay"></span>
                <span class="om-price visible-tablet-up">52 000 <sup>PLN</sup></span>
              </a>
              <div class="details">
                <h3 class="om-title">
                  <a href="<?= $app->createUrl('/view/opel-insignia-ID6yjMD1.html') ?>" title="Opel Insignia">
                    <span class="visible-tablet-up">Opel Insignia</span>
                    <span class="visible-mobile">Opel Insignia</span>
                  </a>
                </h3>
                <span class="om-price visible-mobile">52 000 <sup>PLN</sup></span>
                <ul class="offer-params">
                  <li>2013</li>                        <li>209000 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/renault-megane-2014-1-6-16v-generation-salon-pl-polecam-ID6ykcsB.html') ?>" title="Renault Megane 2014 1.6 16V Generation salon PL POLECAM" style="background-image: url('/images_otomotopl/829270133_14_732x488_2014-16-16v-generation-salon-pl-polecam-.jpg')">
                <span class="img-overlay"></span>
                <span class="om-price visible-tablet-up">18 999 <sup>PLN</sup></span>
              </a>
              <div class="details">
                <h3 class="om-title">
                  <a href="<?= $app->createUrl('/view/renault-megane-2014-1-6-16v-generation-salon-pl-polecam-ID6ykcsB.html') ?>" title="Renault Megane 2014 1.6 16V Generation salon PL POLECAM">
                    <span class="visible-tablet-up">Renault Megane 2014 1.6 16...</span>
                    <span class="visible-mobile">Renault Megane 2014 1.6 16V Generation salon PL POLECAM</span>
                  </a>
                </h3>
                <span class="om-price visible-mobile">18 999 <sup>PLN</sup></span>
                <ul class="offer-params">
                  <li>2014</li>                        <li>32900 km</li>                    </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="daily-offers offers-small">
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/mercedes-benz-klasa-e-mercedes-e350-amg-306km-serwis-aso-romera-historia-do-wgladu-ID6yiZGF.html') ?>" title="Mercedes-Benz Klasa E Mercedes E350 AMG 306KM - serwis ASO Romera Historia do wglądu" style="background-image: url('/images_otomotopl/828717199_1_320x240_mercedes-e350-amg-306km-serwis-aso-romera-historia-do-wgladu-piaseczno.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="<?= $app->createUrl('/view/mercedes-benz-klasa-e-mercedes-e350-amg-306km-serwis-aso-romera-historia-do-wgladu-ID6yiZGF.html') ?>" title="Mercedes-Benz Klasa E Mercedes E350 AMG 306KM - serwis ASO Romera Historia do wglądu">
                      <span class="visible-tablet-up">Mercedes-Benz Kl...</span>
                      <span class="visible-mobile">Mercedes-Benz Klasa E Mercedes E350 AMG 306KM - serwis ASO Romera Historia do wglądu</span>
                    </a>
                  </h3>
                  <span class="om-price">95 000 <sup>PLN</sup></span>
                </div>
                <ul class="offer-params">
                  <li>2010</li>                        <li>91000 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/nissan-qashqai-1-6-dig-t-163km-tekna-panorama-czarny-od-reki-ID6yd9f9.html') ?>" title="Nissan Qashqai 1.6 DIG-T 163KM TEKNA + panorama czarny od ręki !" style="background-image: url('/images_otomotopl/825633955_1_320x240_16-dig-t-163km-tekna-panorama-czarny-od-reki-zielona-gora.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="<?= $app->createUrl('/view/nissan-qashqai-1-6-dig-t-163km-tekna-panorama-czarny-od-reki-ID6yd9f9.html') ?>" title="Nissan Qashqai 1.6 DIG-T 163KM TEKNA + panorama czarny od ręki !">
                      <span class="visible-tablet-up">Nissan Qashqai </span>
                      <span class="visible-mobile">Nissan Qashqai 1.6 DIG-T 163KM TEKNA + panorama czarny od ręki !</span>
                    </a>
                  </h3>
                  <span class="om-price">106 900 <sup>PLN</sup></span>
                </div>
                <ul class="offer-params">
                  <li>2016</li>                        <li>1 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/renault-trafic-klima-elektryka-parktronik-2012-rok-gwarancja-w-cenie-vat-1-odpis-100-vat-oferta-2193ga-ID6yiacp.html') ?>" title="Renault Trafic Klima Elektryka Parktronik 2012 Rok Gwarancja w Cenie .  Vat 1 - Odpis -100%Vat .Oferta 2193GA" style="background-image: url('/images_otomotopl/828305359_1_320x240_vat-1-odpis-100vat-oferta-2193ga-luban.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="<?= $app->createUrl('/view/renault-trafic-klima-elektryka-parktronik-2012-rok-gwarancja-w-cenie-vat-1-odpis-100-vat-oferta-2193ga-ID6yiacp.html') ?>" title="Renault Trafic Klima Elektryka Parktronik 2012 Rok Gwarancja w Cenie .  Vat 1 - Odpis -100%Vat .Oferta 2193GA">
                      <span class="visible-tablet-up">Renault Trafic K...</span>
                      <span class="visible-mobile">Renault Trafic Klima Elektryka Parktronik 2012 Rok Gwarancja w Cenie .  Vat 1 - Odpis -100%Vat .Oferta 2193GA</span>
                    </a>
                  </h3>
                  <span class="om-price">31 600 <sup>PLN</sup></span>
                </div>
                <ul class="offer-params">
                  <li>2012</li>                        <li>225639 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/scania-r-480-topline-6x2-bdf-do-zabudowy-firanka-plandeka-ID6yicsP.html') ?>" title="Scania R 480 TOPLINE 6X2 BDF  do zabudowy, firanka, plandeka" style="background-image: url('/images_otomotopl/828325009_1_320x240_do-zabudowy-firanka-plandeka-braniewo_rev002.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="<?= $app->createUrl('/view/scania-r-480-topline-6x2-bdf-do-zabudowy-firanka-plandeka-ID6yicsP.html') ?>" title="Scania R 480 TOPLINE 6X2 BDF  do zabudowy, firanka, plandeka">
                      <span class="visible-tablet-up">Scania R 480 TOP...</span>
                      <span class="visible-mobile">Scania R 480 TOPLINE 6X2 BDF  do zabudowy, firanka, plandeka</span>
                    </a>
                  </h3>
                  <span class="om-price">85 000 <sup>PLN</sup></span>
                </div>
                <ul class="offer-params">
                  <li>2008</li>                        <li>972000 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="<?= $app->createUrl('/view/ford-transit-warsztat-serwis-mobilny-pogotowie-techniczne-po-oplatach-vat-1-warsztaty-duzy-wybor-na-miejscu-oferta-4724ga-ID6yj4in.html') ?>" title="Ford Transit Warsztat Serwis Mobilny Pogotowie techniczne - po Opłatach - Vat-1 .  Warsztaty duży wybór na miejscu. Oferta 4724GA" style="background-image: url('/images_otomotopl/828749029_1_320x240_warsztaty-duzy-wybor-na-miejscu-oferta-4724ga-luban.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="<?= $app->createUrl('/view/ford-transit-warsztat-serwis-mobilny-pogotowie-techniczne-po-oplatach-vat-1-warsztaty-duzy-wybor-na-miejscu-oferta-4724ga-ID6yj4in.html') ?>" title="Ford Transit Warsztat Serwis Mobilny Pogotowie techniczne - po Opłatach - Vat-1 .  Warsztaty duży wybór na miejscu. Oferta 4724GA">
                      <span class="visible-tablet-up">Ford Transit War...</span>
                      <span class="visible-mobile">Ford Transit Warsztat Serwis Mobilny Pogotowie techniczne - po Opłatach - Vat-1 .  Warsztaty duży wybór na miejscu. Oferta 4724GA</span>
                    </a>
                  </h3>
                  <span class="om-price">23 600 <sup>PLN</sup></span>
                </div>
                <ul class="offer-params">
                  <li>2006</li>                        <li>129548 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="/view/volkswagen-transporter-t5-lift-brygadowka-doka-na-6-osob-serwisowana-po-wszystkich-oplatach-gwarancja-fv23-duzy-wybor-oferta-3474-ID6ygCWB.html" title="Volkswagen Transporter T5 Lift Brygadówka Doka na 6 Osób , Serwisowana ,po wszystkich Opłatach  Gwarancja FV23% Duży wybór - Oferta 3474" style="background-image: url('/images_otomotopl/827552177_1_320x240_gwarancja-fv23-duzy-wybor-oferta-3474-luban_rev012.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/view/volkswagen-transporter-t5-lift-brygadowka-doka-na-6-osob-serwisowana-po-wszystkich-oplatach-gwarancja-fv23-duzy-wybor-oferta-3474-ID6ygCWB.html" title="Volkswagen Transporter T5 Lift Brygadówka Doka na 6 Osób , Serwisowana ,po wszystkich Opłatach  Gwarancja FV23% Duży wybór - Oferta 3474">
                      <span class="visible-tablet-up">Volkswagen Trans...</span>
                      <span class="visible-mobile">Volkswagen Transporter T5 Lift Brygadówka Doka na 6 Osób , Serwisowana ,po wszystkich Opłatach  Gwarancja FV23% Duży wybór - Oferta 3474</span>
                    </a>
                  </h3>
                  <span class="om-price">40 500 <sup>PLN</sup></span>
                </div>
                <ul class="offer-params">
                  <li>2010</li>                        <li>253000 km</li>                    </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row promoted-block">
          <a class="promoted-block__link" href="/promoted/" title="<?= __('Смотреть объявления в ТОПе')?>"><?= __('Смотреть объявления в ТОПе') ?></a>
        </div>

      </div>
    </div>

    <div id="div-gpt-homepage-double-triple-billboard" class="hidden-xs hidden-sm">
      <!-- DIV_GPT_HOMEPAGE_DOUBLE_TRIPLE_BILLBOARD -->
      <div id="div-gpt-ad-1450447394233-0"><script type="text/javascript">googletag.cmd.push(function() { googletag.display('div-gpt-ad-1450447394233-0'); });</script></div><div id="div-gpt-ad-1450447394233-0-after"></div>    </div>

    <div id="div-gpt-rwd-homepage-billboard" class="visible-sm-block">
      <div class="sticky750-gpt-wrapper">
        <!-- DIV_GPT_RWD_HOMEPAGE_BILLBOARD -->
        <div id="div-gpt-ad-1450446389839-0"><script type="text/javascript">googletag.cmd.push(function() { googletag.display('div-gpt-ad-1450446389839-0'); });</script></div><div id="div-gpt-ad-1450446389839-0-after"></div>            <div class="sticky-gpt-close">x</div>
      </div>
    </div>

    <div id="div-gpt-rwd-homepage-billboard-2" class="visible-sm-block">
      <!-- DIV_GPT_RWD_HOMEPAGE_BILLBOARD_2 -->
      <div id="div-gpt-ad-1450446532988-0"><script type="text/javascript">googletag.cmd.push(function() { googletag.display('div-gpt-ad-1450446532988-0'); });</script></div><div id="div-gpt-ad-1450446532988-0-after"></div>    </div>

    <div id="div-gpt-rwd-homepage-mob-ldb" class="visible-xs-block">
      <!-- DIV_GPT_RWD_HOMEPAGE_MOB_LDB -->
      <div id="div-gpt-ad-1451391897179-0"><script type="text/javascript">googletag.cmd.push(function() { googletag.display('div-gpt-ad-1451391897179-0'); });</script></div><div id="div-gpt-ad-1451391897179-0-after"></div>    </div>

    <div class="container-fluid container-fluid-sm">
      <div class="row bottom-info" role="otomotopl">
        <div class="col-sm-4 no-gutter-xs m-grid-50 box_50">
          <a class="box-business inner" href="/business">
            <small><?= __('Увеличьте свои продажи с нашим бизнес предложением') ?>></small>
            <span><?= __('Узнать больше о сотредничестве с нами') ?></span>
            <p>
              <em class="om-button-em"><?= __('Перейти') ?></em>
            </p>
          </a>
        </div>
        <div class="col-sm-4 hidden-xs hidden-sm box_50">
          <a class="box-3in1 inner postnewlink" href="/advert/add/" data-toggle="modal" data-href="#postAdLayer">
            <small><?= __('Выставляйте свои предложения на TransBoard и OLX одним нажатием') ?></small>
            <span><?= __('Уникальное предложение') ?></span>
            <p>
              <em class="om-button-em"><?= __('Разместить объявление') ?></em>
            </p>
          </a>
        </div>
      </div>

      <div class="row om-popularlinks hidden-xs hidden-sm">
        <div class="col-xs-12">
          <div class="header">
            <?= __('Популярные') ?>:
            <ul id="popular" class="popular">
              <li>
                <a class="topLink" href="/category/cars/volkswagen/" data-id="volkswagen" title="Volkswagen">Volkswagen</a>
                <span class="counter">(21035)</span>
              </li>
              <li>
                <a class="topLink" href="/category/cars/opel/" data-id="opel" title="Opel">Opel</a>
                <span class="counter">(16157)</span>
              </li>
              <li>
                <a class="topLink" href="/category/cars/renault/" data-id="renault" title="Renault">Renault</a>
                <span class="counter">(10895)</span>
              </li>
              <li>
                <a class="topLink" href="/category/cars/mercedes-benz/" data-id="mercedes-benz" title="Mercedes-Benz">Mercedes-Benz</a>
                <span class="counter">(9467)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="helpinfo">
      <div class="inner container-fluid container-fluid-sm">
        <div class="col-sm-6 col-md-5 contact-box no-gutter">
          <div class="col-sm-12 no-gutter">
            <h5><?= __('Нужна помощь?') ?></h5>
            <h3><?= __('Служба поддержки клиентов') ?></h3>
          </div>
          <div class="col-lg-7 no-gutter">
                    <span class="phone-text">
                        <span class="phone-number"><span class="icon-phone"></span>+48 61 880 32 21</span><br><small>(od pn. do pt. w godz. 08:00 - 17:00)</small>
                    </span>
          </div>
          <div class="col-lg-5 no-gutter">
            <span class="email-text">&#112;&#111;&#109;&#111;&#99;&#64;&#111;&#116;&#111;&#109;&#111;&#116;&#111;&#46;&#112;&#108</span>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- help costumer service -->
  <div class="helpinfo">
    <div class="professional-box">
      <span><?= __('Являетесь торговым представителем?') ?></span>
      <a href="/regitration_dealer/">
        <em class="om-button-em"><?= __('Зарегистрировать учётную запись агента') ?></em>
      </a>
    </div>
    <!-- share box -->
    <div class="main-share-box">
      <h5><?= __('Следите за нами на:') ?></h5>
      <a id="facebook" href="<?= $app->params['social']['fb']['page'] ?>" target="_blank"><span class="icon-facebook2"></span>Facebook</a>
      <a id="youtube" href="<?= $app->params['social']['youtube']['page'] ?>" target="_blank"><span class="icon-youtube"></span>Youtube</a>
    </div>
    <!-- /share box -->
  </div>
  <!-- /help costumer service -->
</div>		<!-- BODY CONTRIB -->

