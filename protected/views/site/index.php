<?php
$app = Yii::app();
?>

<div id="burgerNav" class="burger-nav"></div>
<div id="siteWrap" class="site-wrap">
  <header class="header-container">
    <div class="inner">
      <div class="clr">
        <a class="website-icon" href="" title="OTOMOTO - nowe i używane samochody i motocykle"><h1>OTOMOTO</h1></a>
        <div class="nav-box">
          <a class="postnewlink om-button blue icon-plus" data-toggle="modal" data-href="#postAdLayer" href="/nowe-ogloszenie/" title="Dodaj ogłoszenie">Dodaj ogłoszenie</a>
          <script type="text/javascript">
            observedNC = [];
            observedNC['ads'] = [];
            observedNC['searches'] = [];
            observedNC['toSynchronize'] = '';
          </script>
          <ul class="userbox">
            <li id="observed-counter" class="star-box hidden">
              <a id="observed-ads-link" class="icon-observe_Active hidden" href="/obserwowane/" title="Obserwowane">
                <strong class="counter"></strong>
                <span class="text hidden-sm hidden-md">Obserwowane</span>
              </a>
              <a id="observed-search-link" class="icon-observe_Active " href="/obserwowane/wyszukiwania/" title="Obserwowane">
                <strong class="counter"></strong>
                <span class="text hidden-sm hidden-md">Obserwowane</span>
              </a>
            </li>
            <!--<li class="help-box">
            <a class="icon-towing" href="http://pomoc.otomoto.pl" target="_blank" title="Pomoc"><span class="text hidden-sm hidden-md">Pomoc</span></a>
        </li>-->
            <li id="my-account-link" class="user-box">
              <a class="icon-mojeotomoto action-link" href="/mojekonto/" id="topLoginLink">
			<span class="text hidden-sm hidden-md">
               Moje OTOMOTO                	        </span>
              </a>
            </li>
          </ul>
          <div class="hidden" id="burgerNavSource">
            <a class="icon-plus newad-link" href="/nowe-ogloszenie/">Dodaj ogłoszenie</a>
            <h5>Obserwowane:</h5>
            <ul>
              <li><a href="/obserwowane/">Ogłoszenia <span class="notifycircle hidden" id="observed-counter-ads-rwd">0</span></a></li>
              <li><a href="/obserwowane/wyszukiwania/">Wyszukiwania <span class="notifycircle hidden" id="observed-counter-searches-rwd">0</span></a></li>
            </ul>
            <h5>Moje OTOMOTO:</h5>
            <ul>
              <li><a class="login-link" href="/mojekonto/">Zaloguj się <span class="icon-mojeotomoto"></span></a></li>
              <li><a href="/konto/rejestracja/">Zarejestruj się</a></li>
              <li><a href="/konto/rejestracja-dealer/">Utwórz konto dealera</a></li>
            </ul>
          </div>

        </div>
        <div class="nav-box-mobile visible-xs-block">
          <a id="openLeftMenu" class="menu-burger icon-burger abs" href=""></a>
          <a class="icon-plus" href="/nowe-ogloszenie/"></a>
          <a class="menu-filters icon-search_filters_bars abs" href="/osobowe/#form"><span class="icon-sercz"></span></a>
        </div>
      </div>
    </div>
  </header>
  <div class="social-float-bar">
    <a class="social-float-bar__link" data-website="google-play" href="https://play.google.com/store/apps/details?id=pl.otomoto" target="_blank" >
      <span class="social-float-bar__label">App on Google Play</span>
    </a>
    <a class="social-float-bar__link" data-website="apple-store" href="https://itunes.apple.com/us/app/id444086109?mt=8&uo=4" target="_blank" >
      <span class="social-float-bar__label">App on Apple Store</span>
    </a>
    <a class="social-float-bar__link" data-website="facebook" href="https://www.facebook.com/otomotopl" target="_blank" >
      <span class="social-float-bar__label">Facebook Page</span>
    </a>
    <a class="social-float-bar__link" data-website="youtube" href="https://www.youtube.com/user/otomotopl" target="_blank" >
      <span class="social-float-bar__label">YouTube Channel</span>
    </a>
  </div>
  <main class="body-container">
    <div class="full-branding clr rel">
      <div id="homebanner" class="full-branding__wrapper">
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=85481714&iu=/55100874/Otomoto_pl/MainPage/Background" target="_blank" data-homebanner-link class="full-branding__banner"
           style="background-image: url('/images_homepagebanner_otomotopl/829190881_1_1920x480_rev006.jpg')">&nbsp;</a>
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
                <a href="/osobowe/" title="Samochody osobowe" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-osobowe"></span>
                  <h2 class="search-area__tab-label">Osobowe</h2>
                </a>
              </li>
              <li data-click-report data-content="params_1" class=" search-area__tab-item">
                <a href="/maszyny-rolnicze/" title="Maszyny rolnicze" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-maszyny-rolnicze"></span>
                  <h2 class="search-area__tab-label">Rolnicze</h2>
                </a>
              </li>
              <li data-click-report data-content="params_73" class=" search-area__tab-item">
                <a href="/dostawcze/" title="Samochody dostawcze" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-dostawcze"></span>
                  <h2 class="search-area__tab-label">Dostawcze</h2>
                </a>
              </li>
              <li data-click-report data-content="params_57" class=" search-area__tab-item">
                <a href="/ciezarowe/" title="Samochody ciężarowe" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-ciezarowe"></span>
                  <h2 class="search-area__tab-label">Ciężarowe</h2>
                </a>
              </li>
              <li data-click-report data-content="params_65" class=" search-area__tab-item">
                <a href="/motocykle-i-quady/" title="" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-motocykle-i-quady"></span>
                  <h2 class="search-area__tab-label">Motocykle</h2>
                </a>
              </li>
              <li data-click-report data-content="params_31" class=" search-area__tab-item">
                <a href="/maszyny-budowlane/" title="Maszyny budowlane" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-maszyny-budowlane"></span>
                  <h2 class="search-area__tab-label">Budowlane</h2>
                </a>
              </li>
              <li data-click-report data-content="params_9" class=" search-area__tab-item">
                <a href="/przyczepy/" title="Przyczepy i naczepy" class="search-area__tab-link">
                  <span class="car-type search-area__tab-icon icon-przyczepy"></span>
                  <h2 class="search-area__tab-label">Przyczepy</h2>
                </a>
              </li>
              <li class="ignore search-area__tab-item search-area__dropdown-tab">
                <a href="#" class="search-area__tab-link search-area__dropdown-link">Więcej kategorii</a>
                <div class="search-area__dropdown">
                  <a href="/osobowe/" class="search-area__dropdown-option" data-click-report data-category="29"><h2 class="search-area__dropdown-option-text">Osobowe</h2></a>
                  <a href="/maszyny-rolnicze/" class="search-area__dropdown-option" data-click-report data-category="1"><h2 class="search-area__dropdown-option-text">Rolnicze</h2></a>
                  <a href="/dostawcze/" class="search-area__dropdown-option" data-click-report data-category="73"><h2 class="search-area__dropdown-option-text">Dostawcze</h2></a>
                  <a href="/ciezarowe/" class="search-area__dropdown-option" data-click-report data-category="57"><h2 class="search-area__dropdown-option-text">Ciężarowe</h2></a>
                  <a href="/motocykle-i-quady/" class="search-area__dropdown-option" data-click-report data-category="65"><h2 class="search-area__dropdown-option-text">Motocykle</h2></a>
                  <a href="/maszyny-budowlane/" class="search-area__dropdown-option" data-click-report data-category="31"><h2 class="search-area__dropdown-option-text">Budowlane</h2></a>
                  <a href="/przyczepy/" class="search-area__dropdown-option" data-click-report data-category="9"><h2 class="search-area__dropdown-option-text">Przyczepy</h2></a>
                  <a href="http://allegro.pl/czesci-samochodowe-620" class="search-area__dropdown-option" data-category="allegro" target="_blank">
                    <h2 class="search-area__dropdown-option-text">Części <span>Allegro</span></h2></a>
                </div>
              </li>
              <li class="ignore search-area__tab-item" data-content="allegro">
                <a href="http://allegro.pl/czesci-samochodowe-620" target="_blank" class="search-area__tab-link">
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
                <form class="searchmain search-area__form" id="searchmain_29" method="POST" action="/oferty/" data-category="29">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-29" />
                      <label for="status_both-29" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-29" value="new" />
                      <label for="status_new-29" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-29" value="used" />
                      <label for="status_used-29" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="29" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param571" data-param-id="571" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="acura">Acura</option>
                      <option value="aixam">Aixam</option>
                      <option value="alfa-romeo">Alfa Romeo</option>
                      <option value="aro">Aro</option>
                      <option value="asia">Asia</option>
                      <option value="aston-martin">Aston Martin</option>
                      <option value="audi">Audi</option>
                      <option value="austin">Austin</option>
                      <option value="bentley">Bentley</option>
                      <option value="bmw">BMW</option>
                      <option value="brilliance">Brilliance</option>
                      <option value="bugatti">Bugatti</option>
                      <option value="buick">Buick</option>
                      <option value="cadillac">Cadillac</option>
                      <option value="chatenet">Chatenet</option>
                      <option value="chevrolet">Chevrolet</option>
                      <option value="chrysler">Chrysler</option>
                      <option value="citroen">Citroën</option>
                      <option value="dacia">Dacia</option>
                      <option value="daewoo">Daewoo</option>
                      <option value="daihatsu">Daihatsu</option>
                      <option value="dkw">DKW</option>
                      <option value="dodge">Dodge</option>
                      <option value="ferrari">Ferrari</option>
                      <option value="fiat">Fiat</option>
                      <option value="ford">Ford</option>
                      <option value="gaz">Gaz</option>
                      <option value="gmc">GMC</option>
                      <option value="gonow">Gonow</option>
                      <option value="grecav">Grecav</option>
                      <option value="honda">Honda</option>
                      <option value="hummer">Hummer</option>
                      <option value="hyundai">Hyundai</option>
                      <option value="infiniti">Infiniti</option>
                      <option value="isuzu">Isuzu</option>
                      <option value="iveco">Iveco</option>
                      <option value="jaguar">Jaguar</option>
                      <option value="jeep">Jeep</option>
                      <option value="kia">Kia</option>
                      <option value="lada">Lada</option>
                      <option value="lamborghini">Lamborghini</option>
                      <option value="lancia">Lancia</option>
                      <option value="land-rover">Land Rover</option>
                      <option value="lexus">Lexus</option>
                      <option value="ligier">Ligier</option>
                      <option value="lincoln">Lincoln</option>
                      <option value="lotus">Lotus</option>
                      <option value="mahindra">Mahindra</option>
                      <option value="maserati">Maserati</option>
                      <option value="maybach">Maybach</option>
                      <option value="mazda">Mazda</option>
                      <option value="mclaren">McLaren</option>
                      <option value="mercedes-benz">Mercedes-Benz</option>
                      <option value="mercury">Mercury</option>
                      <option value="mg">MG</option>
                      <option value="microcar">Microcar</option>
                      <option value="mini">Mini</option>
                      <option value="mitsubishi">Mitsubishi</option>
                      <option value="moskwicz">Moskwicz</option>
                      <option value="nissan">Nissan</option>
                      <option value="nsu">NSU</option>
                      <option value="nysa">Nysa</option>
                      <option value="oldsmobile">Oldsmobile</option>
                      <option value="opel">Opel</option>
                      <option value="peugeot">Peugeot</option>
                      <option value="piaggio">Piaggio</option>
                      <option value="plymouth">Plymouth</option>
                      <option value="polonez">Polonez</option>
                      <option value="pontiac">Pontiac</option>
                      <option value="porsche">Porsche</option>
                      <option value="proton">Proton</option>
                      <option value="renault">Renault</option>
                      <option value="rolls-royce">Rolls-Royce</option>
                      <option value="rover">Rover</option>
                      <option value="saab">Saab</option>
                      <option value="saturn">Saturn</option>
                      <option value="scion">Scion</option>
                      <option value="seat">Seat</option>
                      <option value="skoda">Škoda</option>
                      <option value="smart">Smart</option>
                      <option value="ssangyong">SsangYong</option>
                      <option value="subaru">Subaru</option>
                      <option value="suzuki">Suzuki</option>
                      <option value="syrena">Syrena</option>
                      <option value="tarpan">Tarpan</option>
                      <option value="tata">Tata</option>
                      <option value="tavria">Tavria</option>
                      <option value="tesla">Tesla</option>
                      <option value="toyota">Toyota</option>
                      <option value="trabant">Trabant</option>
                      <option value="triumph">Triumph</option>
                      <option value="uaz">Uaz</option>
                      <option value="vauxhall">Vauxhall</option>
                      <option value="volkswagen">Volkswagen</option>
                      <option value="volvo">Volvo</option>
                      <option value="warszawa">Warszawa</option>
                      <option value="wartburg">Wartburg</option>
                      <option value="wolga">Wołga</option>
                      <option value="zaporozec">Zaporożec</option>
                      <option value="zastawa">Zastawa</option>
                      <option value="zuk">Żuk</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <select name="search[filter_enum_model]" data-default-label="Model" data-key="model" id="param573" data-param-id="573" class="custom searchFormParam" title="Model">
                      <!-- data-name="search[filter_enum_model][]"  -->
                    </select>
                  </div>
                  <div class="advanced-search-box fblock price filter-item search-area__field" data-key="price">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Cena                                                                                                                                                                                                                        </label>
                    <input type="number" maxlength="13" name="search[filter_float_price:from]" value="" id="search[filter_float_price:from]-cat_id-29"
                           class="search-area__input from-value-input" title="Cena od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:from]-cat_id-29",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="search[filter_float_price:to]" value="" id="search[filter_float_price:to]-cat_id-29"
                           class="search-area__input to-value-input" title="Cena do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:to]-cat_id-29",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-29"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-29",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-29"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-29",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock mileage filter-item search-area__field" data-key="mileage">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Przebieg                                                                                                                                </label>
                    <input type="number" maxlength="13" name="search[filter_float_mileage:from]" value="" id="search[filter_float_mileage:from]-cat_id-29"
                           class="search-area__input from-value-input" title="Przebieg od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_mileage:from]-cat_id-29",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="search[filter_float_mileage:to]" value="" id="search[filter_float_mileage:to]-cat_id-29"
                           class="search-area__input to-value-input" title="Przebieg do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_mileage:to]-cat_id-29",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock fuel_type filter-item search-area__field" data-key="fuel_type">
                    <!-- closes before foreach ends -->
                    <input type="hidden" value="" name="search[filter_enum_fuel_type]" id="fuel_type" />
                    <span class="fuel_type_label search-area__fuel-type-label">Rodzaj paliwa:</span>
                    <span data-key="petrol" class="fuel_type_box search-area__fuel-type-option">Benzyna</span>
                    <span data-key="diesel" class="fuel_type_box search-area__fuel-type-option">Diesel</span>
                    <span class="fuel_type_box search-area__fuel-type-option active">Wszystkie</span>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
              <li data-content="params_1" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_1" method="POST" action="/oferty/" data-category="1">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-1" />
                      <label for="status_both-1" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-1" value="new" />
                      <label for="status_new-1" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-1" value="used" />
                      <label for="status_used-1" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="1" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param1" data-param-id="1" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="accord">Accord</option>
                      <option value="agco">Agco</option>
                      <option value="aguirre">Aguirre</option>
                      <option value="allis">Allis</option>
                      <option value="amazone">Amazone</option>
                      <option value="ausa">Ausa</option>
                      <option value="avant">Avant</option>
                      <option value="bargam">Bargam</option>
                      <option value="belarus">Belarus</option>
                      <option value="berthoud">Berthoud</option>
                      <option value="bizon">Bizon</option>
                      <option value="bobcat">Bobcat</option>
                      <option value="braud">Braud</option>
                      <option value="carraro">Carraro</option>
                      <option value="caruelle">Caruelle</option>
                      <option value="case-ih">Case IH</option>
                      <option value="caterpillar">Caterpillar</option>
                      <option value="celli">Celli</option>
                      <option value="claas">Claas</option>
                      <option value="cmt">CMT</option>
                      <option value="crystal">Crystal</option>
                      <option value="david-brown">David Brown</option>
                      <option value="deutz-fahr">Deutz-Fahr</option>
                      <option value="dieci">Dieci</option>
                      <option value="evrard">Evrard</option>
                      <option value="farmer">Farmer</option>
                      <option value="farmtrack">Farmtrack</option>
                      <option value="fendt">Fendt</option>
                      <option value="fiat">Fiat</option>
                      <option value="fiona">Fiona</option>
                      <option value="ford">Ford</option>
                      <option value="gaspardo">Gaspardo</option>
                      <option value="goldoni">Goldoni</option>
                      <option value="hanomag">Hanomag</option>
                      <option value="hardi">Hardi</option>
                      <option value="hassia">Hassia</option>
                      <option value="hinomoto">Hinomoto</option>
                      <option value="holder">Holder</option>
                      <option value="horsch">Horsch</option>
                      <option value="howard">Howard</option>
                      <option value="hurlimann">Hurlimann</option>
                      <option value="hydramet">Hydramet</option>
                      <option value="ick">ICK</option>
                      <option value="ifa">Ifa</option>
                      <option value="iseki">Iseki</option>
                      <option value="jcb">JCB</option>
                      <option value="john-deere">John Deere</option>
                      <option value="joskin">Joskin</option>
                      <option value="kioti">Kioti</option>
                      <option value="kockerling">Köckerling</option>
                      <option value="kongskilde">Kongskilde</option>
                      <option value="krone">Krone</option>
                      <option value="krukowiak">Krukowiak</option>
                      <option value="kubota">Kubota</option>
                      <option value="kuhn">Kuhn</option>
                      <option value="kverneland">Kverneland</option>
                      <option value="lamborgini">Lamborgini</option>
                      <option value="landini">Landini</option>
                      <option value="laverda">Laverda</option>
                      <option value="lely">Lely</option>
                      <option value="lemken">Lemken</option>
                      <option value="macks">Macks</option>
                      <option value="manitou">Manitou</option>
                      <option value="mascio">Mascio</option>
                      <option value="massey-ferguson">Massey Ferguson</option>
                      <option value="mat">MAT</option>
                      <option value="mccormic">McCormick</option>
                      <option value="meprozet">Meprozet</option>
                      <option value="moskit">Moskit</option>
                      <option value="mtz">MTZ</option>
                      <option value="new-holland">New Holland</option>
                      <option value="nodet">Nodet</option>
                      <option value="pichon">Pichon</option>
                      <option value="pom-augustow">POM Augustów</option>
                      <option value="pom-ltd">POM Ltd.</option>
                      <option value="pomarol">Pomarol</option>
                      <option value="pronar">Pronar</option>
                      <option value="rabe">Rabe</option>
                      <option value="rau">RAU</option>
                      <option value="renault">Renault</option>
                      <option value="roger">Roger</option>
                      <option value="samasz">SaMasz</option>
                      <option value="same">Same</option>
                      <option value="sampo">Sampo</option>
                      <option value="schaffer">Schaffer</option>
                      <option value="seguip">Seguip</option>
                      <option value="sigma">Sigma</option>
                      <option value="sipma">Sipma</option>
                      <option value="someca">Someca</option>
                      <option value="steyer">Steyer</option>
                      <option value="steyr">Steyr</option>
                      <option value="sulky">Sulky</option>
                      <option value="tecnoma">Tecnoma</option>
                      <option value="thaler">Thaler</option>
                      <option value="tym">TYM</option>
                      <option value="universal">Universal</option>
                      <option value="ursus">Ursus</option>
                      <option value="vaderstadt">Väderstadt</option>
                      <option value="valmet">Valmet</option>
                      <option value="valpadana">Valpadana</option>
                      <option value="valtra">Valtra</option>
                      <option value="vicon">Vicon</option>
                      <option value="vogel-noot">Vogel&Noot</option>
                      <option value="weidemann">Weidemann</option>
                      <option value="wielton">Wielton</option>
                      <option value="yanmar">Yanmar</option>
                      <option value="zetor">Zetor</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <input class="search-area__input" type="text" maxlength="13" name="q" value="" placeholder="Model" />
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-1"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-1",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-1"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-1",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
              <li data-content="params_73" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_73" method="POST" action="/oferty/" data-category="73">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-73" />
                      <label for="status_both-73" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-73" value="new" />
                      <label for="status_new-73" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-73" value="used" />
                      <label for="status_used-73" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="73" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param1503" data-param-id="1503" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="ader">ADER</option>
                      <option value="adria">Adria</option>
                      <option value="astra">Astra</option>
                      <option value="autosan">Autosan</option>
                      <option value="burstner">Burstner</option>
                      <option value="chevrolet">Chevrolet</option>
                      <option value="citroen">Citroën</option>
                      <option value="concorde">Concorde</option>
                      <option value="dacia">Dacia</option>
                      <option value="daewoo">Daewoo</option>
                      <option value="daf">DAF</option>
                      <option value="dethleffs">Dethleffs</option>
                      <option value="dodge">Dodge</option>
                      <option value="euramobil">Euramobil</option>
                      <option value="faro">Faro</option>
                      <option value="fendt">Fendt</option>
                      <option value="fiat">Fiat</option>
                      <option value="ford">Ford</option>
                      <option value="gaz">Gaz</option>
                      <option value="hymer-eriba">Hymer-Eriba</option>
                      <option value="hyundai">Hyundai</option>
                      <option value="isuzu">Isuzu</option>
                      <option value="iveco">Iveco</option>
                      <option value="jelcz">Jelcz</option>
                      <option value="kia">Kia</option>
                      <option value="knaus">KNAUS</option>
                      <option value="kogel">Kogel</option>
                      <option value="ldv">LDV</option>
                      <option value="lmc">LMC</option>
                      <option value="lublin">Lublin</option>
                      <option value="magirus">Magirus</option>
                      <option value="man">MAN</option>
                      <option value="mazda">Mazda</option>
                      <option value="mega">Mega</option>
                      <option value="mercedes-benz">Mercedes-Benz</option>
                      <option value="mitsubishi">Mitsubishi</option>
                      <option value="mobilvetta">Mobilvetta</option>
                      <option value="multicar">Multicar</option>
                      <option value="nissan">Nissan</option>
                      <option value="nysa">Nysa</option>
                      <option value="opel">Opel</option>
                      <option value="peugeot">Peugeot</option>
                      <option value="piaggio">Piaggio</option>
                      <option value="polonez">Polonez</option>
                      <option value="renault">Renault</option>
                      <option value="rimor">Rimor</option>
                      <option value="scania">Scania</option>
                      <option value="seat">Seat</option>
                      <option value="setra">Setra</option>
                      <option value="skoda">Škoda</option>
                      <option value="ssangyong">SsangYong</option>
                      <option value="star">Star</option>
                      <option value="tarpan">Tarpan</option>
                      <option value="tatra">Tatra</option>
                      <option value="toyota">Toyota</option>
                      <option value="trailor">Trailor</option>
                      <option value="uaz">Uaz</option>
                      <option value="unimog">Unimog</option>
                      <option value="van-hool">Van Hool</option>
                      <option value="volkswagen">Volkswagen</option>
                      <option value="volvo">Volvo</option>
                      <option value="zuk">Żuk</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <input class="search-area__input" type="text" maxlength="13" name="q" value="" placeholder="Model" />
                  </div>
                  <div class="advanced-search-box fblock price filter-item search-area__field" data-key="price">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Cena                                                                                                                                                                                                                        </label>
                    <input type="number" maxlength="13" name="search[filter_float_price:from]" value="" id="search[filter_float_price:from]-cat_id-73"
                           class="search-area__input from-value-input" title="Cena od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:from]-cat_id-73",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="search[filter_float_price:to]" value="" id="search[filter_float_price:to]-cat_id-73"
                           class="search-area__input to-value-input" title="Cena do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:to]-cat_id-73",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-73"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-73",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-73"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-73",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock fuel_type filter-item search-area__field" data-key="fuel_type">
                    <!-- closes before foreach ends -->
                    <input type="hidden" value="" name="search[filter_enum_fuel_type]" id="fuel_type" />
                    <span class="fuel_type_label search-area__fuel-type-label">Rodzaj paliwa:</span>
                    <span data-key="petrol" class="fuel_type_box search-area__fuel-type-option">Benzyna</span>
                    <span data-key="diesel" class="fuel_type_box search-area__fuel-type-option">Diesel</span>
                    <span class="fuel_type_box search-area__fuel-type-option active">Wszystkie</span>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
              <li data-content="params_57" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_57" method="POST" action="/oferty/" data-category="57">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-57" />
                      <label for="status_both-57" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-57" value="new" />
                      <label for="status_new-57" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-57" value="used" />
                      <label for="status_used-57" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="57" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param1987" data-param-id="1987" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="actm">ACTM</option>
                      <option value="avia">Avia</option>
                      <option value="berger">Berger</option>
                      <option value="chereau">Chereau</option>
                      <option value="citroen">Citroën</option>
                      <option value="dacia">Dacia</option>
                      <option value="daewoo">Daewoo</option>
                      <option value="daf">DAF</option>
                      <option value="fiat">Fiat</option>
                      <option value="ford">Ford</option>
                      <option value="freightliner">Freightliner</option>
                      <option value="fruehauf">Fruehauf</option>
                      <option value="gaz">Gaz</option>
                      <option value="grove">Grove</option>
                      <option value="hyundai">Hyundai</option>
                      <option value="ifa">Ifa</option>
                      <option value="isuzu">Isuzu</option>
                      <option value="iveco">Iveco</option>
                      <option value="jelcz">Jelcz</option>
                      <option value="kamaz">Kamaz</option>
                      <option value="kia">Kia</option>
                      <option value="kogel">Kogel</option>
                      <option value="kraz">Kraz</option>
                      <option value="krone">Krone</option>
                      <option value="lamberet">Lamberet</option>
                      <option value="ldv">LDV</option>
                      <option value="liaz">Liaz</option>
                      <option value="liebherr">Liebherr</option>
                      <option value="lublin">Lublin</option>
                      <option value="magirus">Magirus</option>
                      <option value="man">MAN</option>
                      <option value="maz">Maz</option>
                      <option value="meiller">Meiller</option>
                      <option value="mercedes-benz">Mercedes-Benz</option>
                      <option value="mitsubishi">Mitsubishi</option>
                      <option value="multicar">Multicar</option>
                      <option value="nissan">Nissan</option>
                      <option value="nysa">Nysa</option>
                      <option value="opel">Opel</option>
                      <option value="peugeot">Peugeot</option>
                      <option value="piaggio">Piaggio</option>
                      <option value="polonez">Polonez</option>
                      <option value="reisch">Reisch</option>
                      <option value="renault">Renault</option>
                      <option value="scania">Scania</option>
                      <option value="schmitz">Schmitz</option>
                      <option value="schwarzmuller">Schwarzmuller</option>
                      <option value="seat">Seat</option>
                      <option value="skoda">Škoda</option>
                      <option value="star">Star</option>
                      <option value="steyr">Steyr</option>
                      <option value="tatra">Tatra</option>
                      <option value="toyota">Toyota</option>
                      <option value="unimog">Unimog</option>
                      <option value="van-hool">Van Hool</option>
                      <option value="volkswagen">Volkswagen</option>
                      <option value="volvo">Volvo</option>
                      <option value="wielton">Wielton</option>
                      <option value="zil">Ził</option>
                      <option value="zuk">Żuk</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <input class="search-area__input" type="text" maxlength="13" name="q" value="" placeholder="Model" />
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-57"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-57",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-57"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-57",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock mileage filter-item search-area__field" data-key="mileage">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Przebieg                                                                                                                                </label>
                    <input type="number" maxlength="13" name="search[filter_float_mileage:from]" value="" id="search[filter_float_mileage:from]-cat_id-57"
                           class="search-area__input from-value-input" title="Przebieg od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_mileage:from]-cat_id-57",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="search[filter_float_mileage:to]" value="" id="search[filter_float_mileage:to]-cat_id-57"
                           class="search-area__input to-value-input" title="Przebieg do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_mileage:to]-cat_id-57",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
              <li data-content="params_65" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_65" method="POST" action="/oferty/" data-category="65">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-65" />
                      <label for="status_both-65" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-65" value="new" />
                      <label for="status_new-65" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-65" value="used" />
                      <label for="status_used-65" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="65" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param1437" data-param-id="1437" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="access">Access</option>
                      <option value="adly">Adly</option>
                      <option value="aeon">Aeon</option>
                      <option value="ajs">AJS</option>
                      <option value="aprilia">Aprilia</option>
                      <option value="arctic-cat">Arctic Cat</option>
                      <option value="atx">ATX</option>
                      <option value="awo">AWO</option>
                      <option value="baotian">Baotian</option>
                      <option value="barton">Barton</option>
                      <option value="bashan">Bashan</option>
                      <option value="benelli">Benelli</option>
                      <option value="benzer">Benzer</option>
                      <option value="beta">Beta</option>
                      <option value="big-dog">Big Dog</option>
                      <option value="bmw">BMW</option>
                      <option value="bombardier">Bombardier</option>
                      <option value="boss-hoss">Boss Hoss</option>
                      <option value="bsa">BSA</option>
                      <option value="buell">Buell</option>
                      <option value="cagiva">Cagiva</option>
                      <option value="can-am">Can-Am</option>
                      <option value="cectek">CECTEK</option>
                      <option value="cf-moto">CF Moto</option>
                      <option value="cpi">CPI</option>
                      <option value="cz">CZ</option>
                      <option value="daelim">Daelim</option>
                      <option value="derbi">Derbi</option>
                      <option value="diablo">Diabolini</option>
                      <option value="dinli">Dinli</option>
                      <option value="dniepr">Dniepr</option>
                      <option value="ducati">Ducati</option>
                      <option value="eagle-motorsports">Eagle Motorsports</option>
                      <option value="egl-eglmotor">EGL Eglmotor</option>
                      <option value="fantic">Fantic</option>
                      <option value="faspider">Faspider</option>
                      <option value="ferro">Ferro</option>
                      <option value="fym">FYM</option>
                      <option value="garelli">Garelli</option>
                      <option value="gas-gas">Gas Gas</option>
                      <option value="gateway">Gateway</option>
                      <option value="gb-motors">GB Motors</option>
                      <option value="generic">Generic</option>
                      <option value="gilera">Gilera</option>
                      <option value="harley-davidson">Harley-Davidson</option>
                      <option value="hm">HM</option>
                      <option value="honda">Honda</option>
                      <option value="hummer">Hummer</option>
                      <option value="husaberg">Husaberg</option>
                      <option value="husqvarna">Husqvarna</option>
                      <option value="hyosung">Hyosung</option>
                      <option value="indian">Indian</option>
                      <option value="italjet">Italjet</option>
                      <option value="iz">IŻ</option>
                      <option value="jawa">Jawa</option>
                      <option value="jincheng">Jincheng</option>
                      <option value="junak">Junak</option>
                      <option value="kawasaki">Kawasaki</option>
                      <option value="keeway">Keeway</option>
                      <option value="kingway">Kingway</option>
                      <option value="komar">Komar</option>
                      <option value="ktm">KTM</option>
                      <option value="kymco">Kymco</option>
                      <option value="lambretta">Lambretta</option>
                      <option value="laverda">Laverda</option>
                      <option value="lifan">Lifan</option>
                      <option value="linhai">Linhai</option>
                      <option value="lml">LML</option>
                      <option value="loncin">Loncin</option>
                      <option value="malaguti">Malaguti</option>
                      <option value="masai">Masai</option>
                      <option value="mbk">MBK</option>
                      <option value="mondial">Mondial</option>
                      <option value="moto-guzzi">Moto Guzzi</option>
                      <option value="moto-magnus">Moto Magnus</option>
                      <option value="motorro">Motorro</option>
                      <option value="mv-agusta">MV AGUSTA</option>
                      <option value="mz">MZ</option>
                      <option value="nsu">NSU</option>
                      <option value="peugeot">Peugeot</option>
                      <option value="piaggio">Piaggio</option>
                      <option value="polaris">Polaris</option>
                      <option value="rex">REX</option>
                      <option value="rieju">Rieju</option>
                      <option value="romet">Romet</option>
                      <option value="royal-enfield">Royal Enfield</option>
                      <option value="sachs">Sachs</option>
                      <option value="sherco">Sherco</option>
                      <option value="shineray">Shineray</option>
                      <option value="shl">SHL</option>
                      <option value="simson">Simson</option>
                      <option value="smc">SMC</option>
                      <option value="suzuki">Suzuki</option>
                      <option value="sym">SYM</option>
                      <option value="tgb">TGB</option>
                      <option value="tm">TM</option>
                      <option value="triton">Triton</option>
                      <option value="triumph">Triumph</option>
                      <option value="ural">Ural</option>
                      <option value="vespa">Vespa</option>
                      <option value="victory">Victory</option>
                      <option value="wfm">WFM</option>
                      <option value="wsk">WSK</option>
                      <option value="x-moto">X-Moto</option>
                      <option value="yamaha">Yamaha</option>
                      <option value="zipp">Zipp</option>
                      <option value="zonda">Zonda</option>
                      <option value="zongshen">Zongshen</option>
                      <option value="zumico">Zumico</option>
                      <option value="zundapp">Zundapp</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <select name="search[filter_enum_model]" data-default-label="Model" data-key="model" id="param1439" data-param-id="1439" class="custom searchFormParam" title="Model">
                      <!-- data-name="search[filter_enum_model][]"  -->
                    </select>
                  </div>
                  <div class="advanced-search-box fblock price filter-item search-area__field" data-key="price">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Cena                                                                                                                                                                                                                        </label>
                    <input type="number" maxlength="13" name="search[filter_float_price:from]" value="" id="search[filter_float_price:from]-cat_id-65"
                           class="search-area__input from-value-input" title="Cena od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:from]-cat_id-65",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="search[filter_float_price:to]" value="" id="search[filter_float_price:to]-cat_id-65"
                           class="search-area__input to-value-input" title="Cena do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_price:to]-cat_id-65",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-65"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-65",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-65"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-65",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <div class="advanced-search-box fblock engine_capacity filter-item search-area__field" data-key="engine_capacity">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Pojemność skokowa                                                                                    </label>
                    <input type="number" maxlength="13" name="search[filter_float_engine_capacity:from]" value="" id="search[filter_float_engine_capacity:from]-cat_id-65"
                           class="search-area__input from-value-input" title="Pojemnoś. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_engine_capacity:from]-cat_id-65",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="13" name="search[filter_float_engine_capacity:to]" value="" id="search[filter_float_engine_capacity:to]-cat_id-65"
                           class="search-area__input to-value-input" title="Pojemnoś. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_engine_capacity:to]-cat_id-65",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
              <li data-content="params_31" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_31" method="POST" action="/oferty/" data-category="31">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-31" />
                      <label for="status_both-31" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-31" value="new" />
                      <label for="status_new-31" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-31" value="used" />
                      <label for="status_used-31" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="31" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param683" data-param-id="683" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="abg">ABG</option>
                      <option value="ahlmann">Ahlmann</option>
                      <option value="ammann">Ammann</option>
                      <option value="atlas">Atlas</option>
                      <option value="ausa">Ausa</option>
                      <option value="barford">Barford</option>
                      <option value="belle">Belle</option>
                      <option value="bobcat">Bobcat</option>
                      <option value="bomag">Bomag</option>
                      <option value="bt">BT</option>
                      <option value="case">Case</option>
                      <option value="cat">Cat</option>
                      <option value="caterpillar">Caterpillar</option>
                      <option value="cesab">Cesab</option>
                      <option value="clark">Clark</option>
                      <option value="daewoo">Daewoo</option>
                      <option value="dantruck">Dantruck</option>
                      <option value="demag">Demag</option>
                      <option value="destas">Destas</option>
                      <option value="ditch-witch">Ditch Witch</option>
                      <option value="doosan">Doosan</option>
                      <option value="dynapac">Dynapac</option>
                      <option value="fadroma">Fadroma</option>
                      <option value="faun">Faun</option>
                      <option value="fendt">Fendt</option>
                      <option value="fermec">Fermec</option>
                      <option value="fiat">Fiat</option>
                      <option value="filnay">Filnay</option>
                      <option value="ford">Ford</option>
                      <option value="fuchs">Fuchs</option>
                      <option value="furukawa">Furukawa</option>
                      <option value="gehl">Gehl</option>
                      <option value="genie">Genie</option>
                      <option value="grove">Grove</option>
                      <option value="hako">Hako</option>
                      <option value="hamm">Hamm</option>
                      <option value="hangcha">Hangcha</option>
                      <option value="hanix">Hanix</option>
                      <option value="hanomag">Hanomag</option>
                      <option value="hartl">Hartl</option>
                      <option value="haulotte">Haulotte</option>
                      <option value="hc">HC</option>
                      <option value="heden">Heden</option>
                      <option value="hiab">Hiab</option>
                      <option value="hinowa">Hinowa</option>
                      <option value="hitachi">Hitachi</option>
                      <option value="hsw">HSW</option>
                      <option value="hydrema">Hydrema</option>
                      <option value="hyster">Hyster</option>
                      <option value="hyundai">Hyundai</option>
                      <option value="iveco">Iveco</option>
                      <option value="jcb">JCB</option>
                      <option value="jelcz">Jelcz</option>
                      <option value="john-deere">John Deere</option>
                      <option value="jungheinrich">Jungheinrich</option>
                      <option value="kalmar">Kalmar</option>
                      <option value="kamaz">Kamaz</option>
                      <option value="kmm">KMM</option>
                      <option value="kobelco">Kobelco</option>
                      <option value="komatsu">Komatsu</option>
                      <option value="kramer">Kramer</option>
                      <option value="kubota">Kubota</option>
                      <option value="liaz">Liaz</option>
                      <option value="libra">Libra</option>
                      <option value="liebherr">Liebherr</option>
                      <option value="linde">Linde</option>
                      <option value="lonking">Lonking</option>
                      <option value="man">MAN</option>
                      <option value="manitou">Manitou</option>
                      <option value="mecalac">Mecalac</option>
                      <option value="mercedes-benz">Mercedes-Benz</option>
                      <option value="merlo">Merlo</option>
                      <option value="mitsubishi">Mitsubishi</option>
                      <option value="moxy">Moxy</option>
                      <option value="mtz">MTZ</option>
                      <option value="neuson">Neuson</option>
                      <option value="new-holland">New Holland</option>
                      <option value="nissan">Nissan</option>
                      <option value="o-k">O&K</option>
                      <option value="ostrowek">Ostrówek</option>
                      <option value="palfinger">Palfinger</option>
                      <option value="paus">Paus</option>
                      <option value="powerscreen">Powerscreen</option>
                      <option value="pramac">Pramac</option>
                      <option value="putzmeister">Putzmeister</option>
                      <option value="rammax">Rammax</option>
                      <option value="renault">Renault</option>
                      <option value="samsung">Samsung</option>
                      <option value="scania">Scania</option>
                      <option value="schaeff">Schaeff</option>
                      <option value="schaffer">Schäffer</option>
                      <option value="steinbock">Steinbock</option>
                      <option value="steyr">Steyr</option>
                      <option value="still">Still</option>
                      <option value="sunward">SUNWARD</option>
                      <option value="svettruck">Svettruck</option>
                      <option value="takeuchi">Takeuchi</option>
                      <option value="tatra">Tatra</option>
                      <option value="tcm">TCM</option>
                      <option value="terberg">Terberg</option>
                      <option value="terex">Terex</option>
                      <option value="tesab">Tesab</option>
                      <option value="toyota">Toyota</option>
                      <option value="unimog">Unimog</option>
                      <option value="venieri">Venieri</option>
                      <option value="vermeer">Vermeer</option>
                      <option value="vogele">Vogele</option>
                      <option value="volvo">Volvo</option>
                      <option value="wacker">Wacker</option>
                      <option value="weber">WEBER</option>
                      <option value="wirtgen">Wirtgen</option>
                      <option value="yale">Yale</option>
                      <option value="yamaguchi">Yamaguchi</option>
                      <option value="yanmar">Yanmar</option>
                      <option value="zeppelin">Zeppelin</option>
                      <option value="zettelmeyer">Zettelmeyer</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <input class="search-area__input" type="text" maxlength="13" name="q" value="" placeholder="Model" />
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-31"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-31",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-31"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-31",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
              <li data-content="params_9" class=" clearfix search-area__tab-content">
                <form class="searchmain search-area__form" id="searchmain_9" method="POST" action="/oferty/" data-category="9">
                  <div class="search-area__status">
                    <div class="search-area__status-option">
                      <input type="radio" checked="checked" class="search-area__status-checkbox" name="search[new_used]" id="status_both-9" />
                      <label for="status_both-9" class="search-area__status-label">Wszystkie</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_new-9" value="new" />
                      <label for="status_new-9" class="search-area__status-label">Nowe</label>
                    </div>
                    <div class="search-area__status-option">
                      <input type="radio" class="search-area__status-checkbox" name="search[new_used]" id="status_used-9" value="used" />
                      <label for="status_used-9" class="search-area__status-label">Używane</label>
                    </div>
                  </div>
                  <input type="hidden" name="search[category_id]" value="9" />
                  <div class="advanced-search-box fblock make filter-item search-area__field" data-key="make">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Marka i Model                                                                                                                                                                                                                                                                                                                </label>
                    <select name="search[filter_enum_make]" data-default-label="Marka" data-key="make" id="param165" data-param-id="165" class="custom searchFormParam" title="Marka">
                      <!-- data-name="search[filter_enum_make][]"  -->
                      <option value="">Marka</option>
                      <option value="acerbi">Acerbi</option>
                      <option value="ackermann">Ackermann</option>
                      <option value="actm">ACTM</option>
                      <option value="adria">Adria</option>
                      <option value="alkom">ALKOM</option>
                      <option value="asko">Asko</option>
                      <option value="atc">ATC</option>
                      <option value="atm">ATM</option>
                      <option value="avia">Avia</option>
                      <option value="bannert">BANNERT</option>
                      <option value="benalu">Benalu</option>
                      <option value="berger">Berger</option>
                      <option value="beyerland">Beyerland</option>
                      <option value="blomenrohr">Blomenröhr</option>
                      <option value="blumhardt">Blumhardt</option>
                      <option value="blyss">Blyss</option>
                      <option value="bockmann">Böckmann</option>
                      <option value="bodex">Bodex</option>
                      <option value="boeckmann">Boeckmann</option>
                      <option value="bos">Bos</option>
                      <option value="boro">Boro</option>
                      <option value="brenderup">Brenderup</option>
                      <option value="broshuis">Broshuis</option>
                      <option value="bsl">BSL</option>
                      <option value="buca">Buca</option>
                      <option value="bunge">Bunge</option>
                      <option value="burg">Burg</option>
                      <option value="burstner">Burstner</option>
                      <option value="caldal">Caldal</option>
                      <option value="caravelair">Caravelair</option>
                      <option value="carmosino">Carmosino</option>
                      <option value="carnehl">Carnehl</option>
                      <option value="chateau">Chateau</option>
                      <option value="chereau">Chereau</option>
                      <option value="cmt">Cmt</option>
                      <option value="cobo">Cobo</option>
                      <option value="coder">Coder</option>
                      <option value="cometto">Cometto</option>
                      <option value="daf">DAF</option>
                      <option value="dbm">DBM</option>
                      <option value="dethleffs">Dethleffs</option>
                      <option value="doll">Doll</option>
                      <option value="draco">Draco</option>
                      <option value="eggers">Eggers</option>
                      <option value="eifelland">Eifelland</option>
                      <option value="emtech">EMTECH</option>
                      <option value="es-ge">ES-GE</option>
                      <option value="esterer">Esterer</option>
                      <option value="faro">Faro</option>
                      <option value="faymonville">Faymonville</option>
                      <option value="feber-intercars">Feber-InterCars</option>
                      <option value="feldbinder">Feldbinder</option>
                      <option value="fendt">Fendt</option>
                      <option value="fiat">Fiat</option>
                      <option value="fliegl">Fliegl</option>
                      <option value="floor">Floor</option>
                      <option value="frappa">Frappa</option>
                      <option value="fruehauf">Fruehauf</option>
                      <option value="general-trailer">General Trailer</option>
                      <option value="general-trailers">General Trailers</option>
                      <option value="gofa">Gofa</option>
                      <option value="goldhofer">Goldhofer</option>
                      <option value="graaff">Graaff</option>
                      <option value="gras">Gras</option>
                      <option value="gray-adams">Gray&Adams</option>
                      <option value="groenewegen">Groenewegen</option>
                      <option value="guillen">Guillen</option>
                      <option value="hapert">Hapert</option>
                      <option value="heinemann">Heinemann</option>
                      <option value="hendricks">Hendricks</option>
                      <option value="hermanns">Hermanns</option>
                      <option value="hfm">HFM</option>
                      <option value="hobby">Hobby</option>
                      <option value="hoffmann">Hoffmann</option>
                      <option value="home-car">Home-Car</option>
                      <option value="hrd">HRD</option>
                      <option value="huffermann">Huffermann</option>
                      <option value="humbaur">Humbaur</option>
                      <option value="hymer-eriba">Hymer-Eriba</option>
                      <option value="ifa">Ifa</option>
                      <option value="indox">Indox</option>
                      <option value="janmil">Janmil</option>
                      <option value="jilko">Jilko</option>
                      <option value="jotha">Jotha</option>
                      <option value="jung">JUNG</option>
                      <option value="kaessbohrer">Kaessbohrer</option>
                      <option value="kaiser">Kaiser</option>
                      <option value="karfa">Karfa</option>
                      <option value="kassbohrer">Kässbohrer</option>
                      <option value="kel-berg">Kel-Berg</option>
                      <option value="kempf">Kempf</option>
                      <option value="kip">Kip</option>
                      <option value="klaus">Klaus</option>
                      <option value="knapen">Knapen</option>
                      <option value="knaus">KNAUS</option>
                      <option value="kogel">Kögel</option>
                      <option value="kotschenreuther">Kotschenreuther</option>
                      <option value="kraker">Kraker</option>
                      <option value="kraker-trailers">Kraker Trailers</option>
                      <option value="kramer">Kramer</option>
                      <option value="kroeger">Kroeger</option>
                      <option value="kroll">Kroll</option>
                      <option value="krone">Krone</option>
                      <option value="lag">Lag</option>
                      <option value="lamberet">Lamberet</option>
                      <option value="lambrecht">Lambrecht</option>
                      <option value="langendorf">Langendorf</option>
                      <option value="latre">Latre</option>
                      <option value="lecitrailer">LeciTrailer</option>
                      <option value="legras">Legras</option>
                      <option value="lmc">LMC</option>
                      <option value="lohr">Lohr</option>
                      <option value="mado">MaDo</option>
                      <option value="magyar">Magyar</option>
                      <option value="maisonneuve">Maisonneuve</option>
                      <option value="man">MAN</option>
                      <option value="max-trailer">MAX Trailer</option>
                      <option value="mega">Mega</option>
                      <option value="meierling">Meierling</option>
                      <option value="meiller">Meiller</option>
                      <option value="menci">Menci</option>
                      <option value="mercedes-benz">Mercedes Benz</option>
                      <option value="merker">Merker</option>
                      <option value="meusburger">Meusburger</option>
                      <option value="miller">Miller</option>
                      <option value="mirofret">Mirofret</option>
                      <option value="mol">Mol</option>
                      <option value="montenegro">Montenegro</option>
                      <option value="montracon">Montracon</option>
                      <option value="moslein">Möslein</option>
                      <option value="muller-mitteltal">Müller-Mitteltal</option>
                      <option value="narko">Närko</option>
                      <option value="neptun">Neptun</option>
                      <option value="niewiadow">Niewiadów</option>
                      <option value="nooteboom">Nooteboom</option>
                      <option value="nova">Nova</option>
                      <option value="obermaier">Obermaier</option>
                      <option value="omar">Omar</option>
                      <option value="omt">OMT</option>
                      <option value="orten">Orten</option>
                      <option value="orthaus">Orthaus</option>
                      <option value="ova">OVA</option>
                      <option value="ovibos">Ovibos</option>
                      <option value="pacton">Pacton</option>
                      <option value="panav">Panav</option>
                      <option value="panissars">Panissars</option>
                      <option value="pezzaioli">Pezzaioli</option>
                      <option value="polkon">Polkon</option>
                      <option value="pongratz">Pongratz</option>
                      <option value="reisch">Reisch</option>
                      <option value="renault">Renault</option>
                      <option value="renders">Renders</option>
                      <option value="rydwan">Rydwan</option>
                      <option value="samro">Samro</option>
                      <option value="saxas">Saxas</option>
                      <option value="scania">Scania</option>
                      <option value="scheuerle">Scheuerle</option>
                      <option value="schmidt">Schmidt</option>
                      <option value="schmitz-cargobull">Schmitz Cargobull</option>
                      <option value="schrader">Schrader</option>
                      <option value="schwarzmuller">Schwarzmuller</option>
                      <option value="sdc">SDC</option>
                      <option value="setra-kaessbohrer">Setra/Kaessbohrer</option>
                      <option value="sidecar">Sidecar</option>
                      <option value="smit">Smit</option>
                      <option value="sommer">Sommer</option>
                      <option value="sor">Sor</option>
                      <option value="spier">Spier</option>
                      <option value="spitzer">Spitzer</option>
                      <option value="stas">Stas</option>
                      <option value="stema">Stema</option>
                      <option value="stokota">Stokota</option>
                      <option value="stopexim">Stopexim</option>
                      <option value="swidnik-tema">Swidnik TEMA</option>
                      <option value="syland">SYLAND</option>
                      <option value="system-trailers">System Trailers</option>
                      <option value="tabbert">Tabbert</option>
                      <option value="tec">TEC</option>
                      <option value="tijhof">Tijhof</option>
                      <option value="tirsan">Tirsan</option>
                      <option value="tisvol">Tisvol</option>
                      <option value="titan">Titan</option>
                      <option value="trailis">Trailis</option>
                      <option value="trailor">Trailor</option>
                      <option value="trouillet">Trouillet</option>
                      <option value="van-eck">Van Eck</option>
                      <option value="van-hool">Van Hool</option>
                      <option value="viberti">Viberti</option>
                      <option value="wabco">Wabco</option>
                      <option value="wecon">Wecon</option>
                      <option value="wellmeyer">Wellmeyer</option>
                      <option value="welgro">Welgro</option>
                      <option value="westfalia">Westfalia</option>
                      <option value="wielton">Wielton</option>
                      <option value="wilk">Wilk</option>
                      <option value="wiola">Wiola</option>
                      <option value="zaslaw">Zaslaw</option>
                      <option value="zorzi">Zorzi</option>
                      <option value="zremb">Zremb</option>
                      <option value="other">Inny</option>
                    </select>
                  </div>
                  <div class="advanced-search-box fblock model filter-item search-area__field" data-key="model">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      &nbsp;
                    </label>
                    <input class="search-area__input" type="text" maxlength="13" name="q" value="" placeholder="Model" />
                  </div>
                  <div class="advanced-search-box fblock year filter-item search-area__field" data-key="year">
                    <!-- closes before foreach ends -->
                    <label class="search-area__field-label">
                      Rok produkcji:                                                                                                                                                                            </label>
                    <input type="number" maxlength="4" name="search[filter_float_year:from]" value="" id="search[filter_float_year:from]-cat_id-9"
                           class="search-area__input from-value-input" title="Rok prod. od" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:from]-cat_id-9",
                          "od"
                        );
                      }
                    </script>
                    <input type="number" maxlength="4" name="search[filter_float_year:to]" value="" id="search[filter_float_year:to]-cat_id-9"
                           class="search-area__input to-value-input" title="Rok prod. do" />
                    <script type="text/javascript">
                      if (document.body.clientWidth > 1024) {
                        replacePlaceholder(
                          "search[filter_float_year:to]-cat_id-9",
                          "do"
                        );
                      }
                    </script>
                  </div>
                  <button class="om-button search-area__button-submit" type="submit" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">
                    <span class="search-area__submit-label">Szukaj</span>
                    <span class="icon-sercz"></span>
                  </button>
                  <button type="submit" class="search-area__advanced-search-link" onclick="dataLayer.push({'event': 'homepage_search_advanced_search'});">Szczegółowe wyszukiwanie</button>
                </form>
              </li>
            </ul>
          </div>
        </div>


        <div class="daily-offers offer-big">
          <div class="item-box">
            <div class="item-body big">
              <a class="rel img-cover" href="/oferta/bmw-seria-4-xdrive-cabrio-dealer-bmw-zdunek-2015r-ID4p5dq3.html" style="background-image: url('/images_otomotopl/817196879_8_732x488_xdrive-cabrio-dealer-bmw-zdunek-2015r-_rev002.jpg')" title="BMW Seria 4 xdrive Cabrio Dealer BMW Zdunek 2015r">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <div class="clr">
                    <strong>Oferta dnia</strong>
                    <span class="om-price">246 900 <sup>PLN</sup></span>
                  </div>
                  <h3 class="om-title">
                    <a href="/oferta/bmw-seria-4-xdrive-cabrio-dealer-bmw-zdunek-2015r-ID4p5dq3.html" title="BMW Seria 4 xdrive Cabrio Dealer BMW Zdunek 2015r">
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
              <a class="rel  img-cover" href="/oferta/opel-insignia-ID6yjMD1.html" title="Opel Insignia" style="background-image: url('/images_otomotopl/829069509_6_732x488_rev001.jpg')">
                <span class="img-overlay"></span>
                <span class="om-price visible-tablet-up">52 000 <sup>PLN</sup></span>
              </a>
              <div class="details">
                <h3 class="om-title">
                  <a href="/oferta/opel-insignia-ID6yjMD1.html" title="Opel Insignia">
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
              <a class="rel  img-cover" href="/oferta/renault-megane-2014-1-6-16v-generation-salon-pl-polecam-ID6ykcsB.html" title="Renault Megane 2014 1.6 16V Generation salon PL POLECAM" style="background-image: url('/images_otomotopl/829270133_14_732x488_2014-16-16v-generation-salon-pl-polecam-.jpg')">
                <span class="img-overlay"></span>
                <span class="om-price visible-tablet-up">18 999 <sup>PLN</sup></span>
              </a>
              <div class="details">
                <h3 class="om-title">
                  <a href="/oferta/renault-megane-2014-1-6-16v-generation-salon-pl-polecam-ID6ykcsB.html" title="Renault Megane 2014 1.6 16V Generation salon PL POLECAM">
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
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="/oferta/audi-q7-audi-q7-s-line-i-wl-aso-bezwyp-fv-23-lux-ID6yeGNB.html" title="Audi Q7 Audi Q7, S-Line, I. WŁ, ASO, bezwyp, FV. 23%, Lux!" style="background-image: url('/images_otomotopl/826440401_1_732x488_audi-q7-s-line-i-wl-aso-bezwyp-fv-23-lux-wroclaw.jpg')">
                <span class="img-overlay"></span>
                <span class="om-price visible-tablet-up">89 900 <sup>PLN</sup></span>
              </a>
              <div class="details">
                <h3 class="om-title">
                  <a href="/oferta/audi-q7-audi-q7-s-line-i-wl-aso-bezwyp-fv-23-lux-ID6yeGNB.html" title="Audi Q7 Audi Q7, S-Line, I. WŁ, ASO, bezwyp, FV. 23%, Lux!">
                    <span class="visible-tablet-up">Audi Q7 Audi Q7, S-Line, I...</span>
                    <span class="visible-mobile">Audi Q7 Audi Q7, S-Line, I. WŁ, ASO, bezwyp, FV. 23%, Lux!</span>
                  </a>
                </h3>
                <span class="om-price visible-mobile">89 900 <sup>PLN</sup></span>
                <ul class="offer-params">
                  <li>2010</li>                        <li>183000 km</li>                    </ul>
              </div>
            </div>
          </div>
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="/oferta/jeep-grand-cherokee-ID6yjEtj.html" title="Jeep Grand Cherokee" style="background-image: url('/images_otomotopl/829010937_1_732x488.jpg')">
                <span class="img-overlay"></span>
                <span class="om-price visible-tablet-up">29 800 <sup>PLN</sup></span>
              </a>
              <div class="details">
                <h3 class="om-title">
                  <a href="/oferta/jeep-grand-cherokee-ID6yjEtj.html" title="Jeep Grand Cherokee">
                    <span class="visible-tablet-up">Jeep Grand Cherokee</span>
                    <span class="visible-mobile">Jeep Grand Cherokee</span>
                  </a>
                </h3>
                <span class="om-price visible-mobile">29 800 <sup>PLN</sup></span>
                <ul class="offer-params">
                  <li>2002</li>                        <li>170200 km</li>                    </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="daily-offers offers-small">
          <div class="item-box">
            <div class="item-body">
              <a class="rel  img-cover" href="/oferta/mercedes-benz-klasa-e-mercedes-e350-amg-306km-serwis-aso-romera-historia-do-wgladu-ID6yiZGF.html" title="Mercedes-Benz Klasa E Mercedes E350 AMG 306KM - serwis ASO Romera Historia do wglądu" style="background-image: url('/images_otomotopl/828717199_1_320x240_mercedes-e350-amg-306km-serwis-aso-romera-historia-do-wgladu-piaseczno.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/oferta/mercedes-benz-klasa-e-mercedes-e350-amg-306km-serwis-aso-romera-historia-do-wgladu-ID6yiZGF.html" title="Mercedes-Benz Klasa E Mercedes E350 AMG 306KM - serwis ASO Romera Historia do wglądu">
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
              <a class="rel  img-cover" href="/oferta/nissan-qashqai-1-6-dig-t-163km-tekna-panorama-czarny-od-reki-ID6yd9f9.html" title="Nissan Qashqai 1.6 DIG-T 163KM TEKNA + panorama czarny od ręki !" style="background-image: url('/images_otomotopl/825633955_1_320x240_16-dig-t-163km-tekna-panorama-czarny-od-reki-zielona-gora.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/oferta/nissan-qashqai-1-6-dig-t-163km-tekna-panorama-czarny-od-reki-ID6yd9f9.html" title="Nissan Qashqai 1.6 DIG-T 163KM TEKNA + panorama czarny od ręki !">
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
              <a class="rel  img-cover" href="/oferta/renault-trafic-klima-elektryka-parktronik-2012-rok-gwarancja-w-cenie-vat-1-odpis-100-vat-oferta-2193ga-ID6yiacp.html" title="Renault Trafic Klima Elektryka Parktronik 2012 Rok Gwarancja w Cenie .  Vat 1 - Odpis -100%Vat .Oferta 2193GA" style="background-image: url('/images_otomotopl/828305359_1_320x240_vat-1-odpis-100vat-oferta-2193ga-luban.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/oferta/renault-trafic-klima-elektryka-parktronik-2012-rok-gwarancja-w-cenie-vat-1-odpis-100-vat-oferta-2193ga-ID6yiacp.html" title="Renault Trafic Klima Elektryka Parktronik 2012 Rok Gwarancja w Cenie .  Vat 1 - Odpis -100%Vat .Oferta 2193GA">
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
              <a class="rel  img-cover" href="/oferta/scania-r-480-topline-6x2-bdf-do-zabudowy-firanka-plandeka-ID6yicsP.html" title="Scania R 480 TOPLINE 6X2 BDF  do zabudowy, firanka, plandeka" style="background-image: url('/images_otomotopl/828325009_1_320x240_do-zabudowy-firanka-plandeka-braniewo_rev002.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/oferta/scania-r-480-topline-6x2-bdf-do-zabudowy-firanka-plandeka-ID6yicsP.html" title="Scania R 480 TOPLINE 6X2 BDF  do zabudowy, firanka, plandeka">
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
              <a class="rel  img-cover" href="/oferta/ford-transit-warsztat-serwis-mobilny-pogotowie-techniczne-po-oplatach-vat-1-warsztaty-duzy-wybor-na-miejscu-oferta-4724ga-ID6yj4in.html" title="Ford Transit Warsztat Serwis Mobilny Pogotowie techniczne - po Opłatach - Vat-1 .  Warsztaty duży wybór na miejscu. Oferta 4724GA" style="background-image: url('/images_otomotopl/828749029_1_320x240_warsztaty-duzy-wybor-na-miejscu-oferta-4724ga-luban.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/oferta/ford-transit-warsztat-serwis-mobilny-pogotowie-techniczne-po-oplatach-vat-1-warsztaty-duzy-wybor-na-miejscu-oferta-4724ga-ID6yj4in.html" title="Ford Transit Warsztat Serwis Mobilny Pogotowie techniczne - po Opłatach - Vat-1 .  Warsztaty duży wybór na miejscu. Oferta 4724GA">
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
              <a class="rel  img-cover" href="/oferta/volkswagen-transporter-t5-lift-brygadowka-doka-na-6-osob-serwisowana-po-wszystkich-oplatach-gwarancja-fv23-duzy-wybor-oferta-3474-ID6ygCWB.html" title="Volkswagen Transporter T5 Lift Brygadówka Doka na 6 Osób , Serwisowana ,po wszystkich Opłatach  Gwarancja FV23% Duży wybór - Oferta 3474" style="background-image: url('/images_otomotopl/827552177_1_320x240_gwarancja-fv23-duzy-wybor-oferta-3474-luban_rev012.jpg')">
                <span class="img-overlay"></span>
              </a>
              <div class="details">
                <div class="inner">
                  <h3 class="om-title">
                    <a href="/oferta/volkswagen-transporter-t5-lift-brygadowka-doka-na-6-osob-serwisowana-po-wszystkich-oplatach-gwarancja-fv23-duzy-wybor-oferta-3474-ID6ygCWB.html" title="Volkswagen Transporter T5 Lift Brygadówka Doka na 6 Osób , Serwisowana ,po wszystkich Opłatach  Gwarancja FV23% Duży wybór - Oferta 3474">
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
          <a class="promoted-block__link" href="/promoted/" title="Zobacz wszystkie promowane ogłoszenia">Zobacz wszystkie promowane ogłoszenia</a>
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
        <div class="col-sm-4 hidden-xs m-grid-50 box_50">
          <a class="box-mobile inner" href="/mobilne/">
            <small>Oglądaj ogłoszenia niezależnie gdzie jesteś</small>
            <span>Zobacz nasze aplikacje mobilne</span>
            <p>
              <em class="om-button-em">Pobierz aplikację</em>
            </p>
          </a>
        </div>
        <div class="col-sm-4 no-gutter-xs m-grid-50 box_50">
          <a class="box-business inner" href="http://biznes.otomoto.pl">
            <small>Rozwiń swój biznes sprzedaży pojazdów</small>
            <span>Poznaj ofertę dla Klientów Biznesowych</span>
            <p>
              <em class="om-button-em">Przejdź</em>
            </p>
          </a>
        </div>
        <div class="col-sm-4 hidden-xs hidden-sm box_50">
          <a class="box-3in1 inner postnewlink" href="/nowe-ogloszenie/" data-toggle="modal" data-href="#postAdLayer">
            <small>Wystaw na OTOMOTO, bądź widoczny w OLX i Allegro</small>
            <span>Jedyna taka oferta 3w1</span>
            <p>
              <em class="om-button-em">Dodaj ogłoszenie</em>
            </p>
          </a>
        </div>
      </div>

      <div class="row om-popularlinks hidden-xs hidden-sm">
        <div class="col-xs-12">
          <div class="header">
            Popularne:
            <ul id="popular" class="popular">
              <li>
                <a class="topLink" href="/osobowe/volkswagen/" data-id="volkswagen" title="Volkswagen">Volkswagen</a>
                <span class="counter">(21035)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/opel/" data-id="opel" title="Opel">Opel</a>
                <span class="counter">(16157)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/renault/" data-id="renault" title="Renault">Renault</a>
                <span class="counter">(10895)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/mercedes-benz/" data-id="mercedes-benz" title="Mercedes-Benz">Mercedes-Benz</a>
                <span class="counter">(9467)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/audi/" data-id="audi" title="Audi">Audi</a>
                <span class="counter">(13753)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/bmw/" data-id="bmw" title="BMW">BMW</a>
                <span class="counter">(12407)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/ford/" data-id="ford" title="Ford">Ford</a>
                <span class="counter">(11490)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/peugeot/" data-id="peugeot" title="Peugeot">Peugeot</a>
                <span class="counter">(7488)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/toyota/" data-id="toyota" title="Toyota">Toyota</a>
                <span class="counter">(7676)</span>
              </li>
              <li>
                <a class="topLink" href="/osobowe/citroen/" data-id="citroen" title="Citroën">Citroën</a>
                <span class="counter">(6433)</span>
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
            <h5>Potrzebujesz pomocy?</h5>
            <h3>Biuro obsługi klienta</h3>
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
        <div class="col-sm-5 col-md-4 mobile-app-box no-gutter">
          <h5>Oglądaj ogłoszenia niezależnie gdzie jesteś</h5>
          <h3>Zobacz nasze aplikacje mobilne<span class="triangle-right"></span></h3>
        </div>
        <div class="col-sm-1 col-md-3">
          <a class="box-phone-red" href="/mobilne/"></a>
        </div>
      </div>
    </div>
  </main>
  <!-- help costumer service -->
  <div class="helpinfo">
    <div class="professional-box">
      <span>Jesteś klientem profesjonalnym?</span>
      <a href="/konto/rejestracja-dealer/">
        <em class="om-button-em">Załóż konto firmowe</em>
      </a>
    </div>
    <!-- share box -->
    <div class="main-share-box">
      <h5>Znajdź nas na:</h5>
      <a id="facebook" href="https://www.facebook.com/otomotopl" target="_blank"><span class="icon-facebook2"></span>Facebook</a>
      <a id="youtube" href="https://www.youtube.com/user/otomotopl" target="_blank"><span class="icon-youtube"></span>Youtube</a>
    </div>
    <!-- /share box -->
  </div>

  <!-- /help costumer service -->
  <footer class="footer-container">
    <div class="container-fluid container-fluid-sm">
      <div class="row footerlinks">
        <div class="col-item hidden-xs">
          <h5>Znajdź nas na:</h5>
          <a class="facebook-logo" href="https://www.facebook.com/otomotopl" target="_blank"><span class="icon-facebook2"></span>Facebook</a>
          <a class="youtube-logo" href="https://www.youtube.com/user/otomotopl" target="_blank"><span class="icon-youtube"></span>Youtube</a>
        </div>
        <div class="col-item inline">
          <h4 class="strong-upper">OTOMOTO</h4>
          <ul>
            <li><a href="http://pomoc.otomoto.pl" target="_blank" title="Pomoc">Pomoc</a></li>
            <li><a href="/kontakt/" title="Kontakt">Kontakt</a></li>
            <li><a href="http://handlowy.otomoto.pl" title="Reklama">Reklama</a></li>
            <li><a href="http://akademia.otomoto.pl/" title="Akademia Rozwoju Dealera">Akademia Rozwoju Dealera</a>
            </li>
            <li><a href="http://media.otomoto.pl/" title="Biuro prasowe">Biuro prasowe</a></li>
            <li><a href="/cookies/" title="Polityka prywatności">Polityka prywatności</a></li>
            <li><a href="/zasady/" title="Regulamin OTOMOTO">Regulamin OTOMOTO</a>
            </li>
            <li><a href="/zasady/business/" title="Regulamin dla klientów biznesowych ">Regulamin dla klientów biznesowych </a>
            </li>
          </ul>
        </div>
        <div class="col-item  inline">
          <h4 class="strong-upper">Usługi i narzędzia</h4>
          <ul>
            <li>
              <a href="/umowa-kupna-sprzedazy/" target="_blank" title="Umowa kupna sprzedaży">Umowa kupna sprzedaży</a>
            </li>
          </ul>
        </div>
        <div class="col-item hidden-xs">
          <h4 class="strong-upper">Przydatne informacje</h4>
          <ul>
            <li><a target="_blank" href="https://otomoto.zendesk.com/hc/pl/articles/216416787" title="Cennik ogłoszeń">Cennik ogłoszeń</a></li>

            <li><a target="_blank" href="/pdf/magazyn_otomoto_2015_12.pdf" title="Magazyn OTOMOTO">Magazyn OTOMOTO</a></li>
            <li><a target="_blank" href="http://motogazeta.mojeauto.pl/Testy_samochodow/" title="Testy samochodów">Testy samochodów</a>
            </li>
            <li><a target="_blank" href="http://cokupic.pl/Motoryzacja-Samochody" title="Opinie o samochodach">Opinie o
                samochodach</a></li>
            <li><a target="_blank" href="/isr/" title="Internetowy Samochód Roku 2015">Internetowy Samochód Roku 2015</a></li>
            <li><a href="/sitemap/" title="Mapa kategorii">Mapa kategorii</a></li>
            <li><a href="/sitemap/regions/" title="Mapa miejscowości">Mapa miejscowości</a></li>
            <li><a href="https://otomoto.zendesk.com/hc/pl/categories/200385037-Aktualno%C5%9Bci-i-komunikaty" target="_blank" title="Ważne informacje">Ważne informacje</a></li>
            <li><a href="http://joinolx.com" target="_blank" rel="nofollow" title="Kariera">Kariera</a></li>
          </ul>
        </div>
      </div>
      <div class="footerapps">
        <h5 class="strong-upper">Nasze aplikacje w Twoim telefonie:</h5>
        <a href="https://play.google.com/store/apps/details?id=pl.otomoto" id="footerAppAndroid" target="_blank" class="inlblk"
           title="otomoto.pl w Google Play">
          <span class="icon block googleplay">otomoto.pl w Google Play</span>
                    <span class="tag-line tleft hidden">
                        Do pobrania w                        <strong class="block">Google Play</strong>
                    </span>
        </a>
        <a href="https://itunes.apple.com/us/app/id444086109?mt=8&uo=4" id="footerAppIphone" target="_blank" class="inlblk"
           title="otomoto.pl w AppStore">
          <span class="icon block appstore">otomoto.pl w AppStore</span>
                    <span class="tag-line hidden">
                        Pobierz w                        <strong class="block">AppStore</strong>
                    </span>
        </a>
        <a href="http://www.windowsphone.com/pl-pl/store/app/otomoto/898c5867-6efb-4d85-b40d-28f73bba63f0" id="footerAppWindpws" target="_blank" class="inlblk"
           title="otomoto.pl w Windows Store">
          <span class="icon block windowsstore">otomoto.pl w Windows Store</span>
                    <span class="tag-line tright hidden">
                        Dostępne dla                        <strong class="block">Windows Phone</strong>
                    </span>
        </a>
      </div>
    </div>
  </footer>
  <div class="col-sm-12 footer-logo hidden-xs hidden-sm">
    <img src="/static/otomotopl/naspersclassifieds-regional/verticals-cars-atlas-web-otomotopl/static/img/otomoto-footer.png">
  </div>
  <div class="modal fade" id="postAdLayer" tabindex="-1" role="dialog" aria-labelledby="basicModal"
       aria-hidden="true">
    <div class="modal-dialog postad-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon-zamknij" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Wybierz kategorię</h4>
        </div>
        <div class="modal-body">
          <div class="postad-dialog-content">
            <ul class="category-select postad-dialog-content-cell">
              <li>
                <a class="cat" href="/osobowe/nowe-ogloszenie/">
                  <span class="car-type icon-osobowe"></span>Osobowe                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
              <li>
                <a class="cat" href="/maszyny-rolnicze/nowe-ogloszenie/">
                  <span class="car-type icon-maszyny-rolnicze"></span>Rolnicze                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
              <li>
                <a class="cat" href="/dostawcze/nowe-ogloszenie/">
                  <span class="car-type icon-dostawcze"></span>Dostawcze                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
              <li>
                <a class="cat" href="/ciezarowe/nowe-ogloszenie/">
                  <span class="car-type icon-ciezarowe"></span>Ciężarowe                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
              <li>
                <a class="cat" href="/motocykle-i-quady/nowe-ogloszenie/">
                  <span class="car-type icon-motocykle-i-quady"></span>Motocykle                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
              <li>
                <a class="cat" href="/maszyny-budowlane/nowe-ogloszenie/">
                  <span class="car-type icon-maszyny-budowlane"></span>Budowlane                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
              <li>
                <a class="cat" href="/przyczepy/nowe-ogloszenie/">
                  <span class="car-type icon-przyczepy"></span>Przyczepy                    <!-- [foreach|counter==1?YES:NO] -->
                </a>
              </li>
            </ul>
            <div class="professional-account postad-dialog-content-cell">
              <h4>Jesteś klientem <strong>profesjonalnym?</strong></h4>
              <div>
                <a href="/konto/" class="om-button">Zaloguj się</a>
              </div>
              <span>lub</span>
              <div>
                <a href="/konto/rejestracja-dealer/" class="om-button blue">Utwórz konto</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="message_system" style="display: none">
    <div class="messagesystem">
      <p>
        <span class="msg"></span>
      </p>
    </div>
  </div>
  <div id="dialogMessage" class="hidden">
    <div class="inner"></div>
  </div>
  <div id="saveFavDiv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon-zamknij" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title typeSearch">Wyszukiwanie zapisane w schowku</h4>
          <h4 class="modal-title typeOffer">Ogłoszenie zapisane w schowku</h4>
        </div>
        <div class="modal-body">
          <div class="modal-inner">
            <h4 class="typeSearch">Wyszukiwanie zostało dodane do obserwowanych</h4>
            <h4 class="typeOffer">Ogłoszenie dodane do obserwowanych</h4>
            <p>Zaloguj się do otomoto.pl aby zapamiętać je na "stałe"</p>
            <div class="modal-actions">
              <div class="modal-actions-row">
                <a class="om-button" href="/konto/?origin=observepopup">Zaloguj się</a>
                <a class="om-button" href="/konto/rejestracja/">Utwórz konto</a>
              </div>
              <div class="modal-actions-row">
                <a id="saveFavCancel" href="">Nie, dziękuję</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="synchroFavDiv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon-zamknij" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title typeSearch">Obserwowane ogłoszenia i wyszukiwania w Twoim Schowku</h4>
        </div>
        <div class="modal-body">
          <div class="modal-inner">
            <div class="inner"></div>
            <p>Zaloguj się do otomoto.pl aby zapamiętać je na "stałe"</p>
            <div class="modal-actions">
              <div class="modal-actions-row">
                <a id="synchronizeObservedConfirm" class="om-button" href="">Zapisz w Obserwowanych</a>
              </div>
              <div class="modal-actions-row">
                <a id="synchronizeObservedCancel" href="">Nie, dziękuję</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="cookiesBar" class="om-cookies-bar hidden">
    <div class="container-fluid container-fluid-sm">
      <div class="inner">
        <span class="cookie-icon"></span>
        <p>
          <strong>Ta strona używa plików cookies</strong> w celu realizacji usług i zgodnie z <a href="/cookies/" target="_blank">Polityką Plików Cookies</a>
        </p>
        <a href="" class="agree-button cookiesBarClose">OK</a>
      </div>
    </div>
  </div>

  <!-- otomotopl:bs -->
  <!-- otomotopl:w --></div>		<!-- BODY CONTRIB -->

