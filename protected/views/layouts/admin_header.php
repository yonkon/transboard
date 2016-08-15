<div class="top-menu">
  <a class="menu-link" href="<?= $app->getBaseUrl(true) ?>" target="_blank"><?= __('На главную сайта') ?></a>
  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminAdvert') ?>"><?= __('Объявления') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminAdvert/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminAdvert/list') ?>"><?= __('Список') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminAdvert/new') ?>"><?= __('Новые') .'/'. __('На модерации')  ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminCategory') ?>"><?= __('Категории') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminCategory/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminCategory/list') ?>"><?= __('Список') ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminParam') ?>"><?= __('Параметры') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminParam/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminParam/list') ?>"><?= __('Список') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminParamValue/add') ?>"><?= __('Создать значение параметра') ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminMake') ?>"><?= __('Марки') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminMake/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminMake/list') ?>"><?= __('Список') ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminModel') ?>"><?= __('Модели') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminModel/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminModel/list') ?>"><?= __('Список') ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminUser') ?>"><?= __('Пользователи') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminUser/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminUser/list') ?>"><?= __('Список') ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminSeo') ?>"><?= __('SEO') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminSeo/pages') ?>"><?= __('Настроить страницы') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminSeo/index') ?>"><?= __('Общие настройки сайта') ?></a></nav>
    </div>
  </nav>

  <nav class="menu-item">
    <a class="menu-link" href="<?= $app->createUrl('/adminBanner') ?>"><?= __('Баннеры') ?></a>
    <br>
    <div class="submenu">
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminBanner/add') ?>"><?= __('Создать') ?></a></nav>
      <nav class="menu-item"><a class="menu-link" href="<?= $app->createUrl('/adminBanner/list') ?>"><?= __('Список') ?></a></nav>
    </div></nav>
</div>
