<?php
/* @var $this AdminAdvertController */

$this->breadcrumbs=array(
	'Admin Advert'=>array('/adminAdvert'),
	'List',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<div class="table list">
  <table class="tablesorter">
    <thead>
    <tr>
      <th><?= __('ID') ?></th>
      <th><?= __('Название') ?></th>
      <th><?= __('Фото') ?></th>
      <th><?= __('Категория') ?></th>
      <th><?= __('Автор') ?></th>
      <th><?= __('Статус') ?></th>
      <th><?= __('Цена') ?></th>
      <th><?= __('Опубликовано до') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    /** @var Advert[] $items */
    foreach($items as $ad) { ?>
      <tr>
        <td><?= $ad->id ?></td>
        <td><?= $ad->name ?></td>
        <td><?= $ad->makeAdminThumb() ?></td>
        <td><?= $ad->category0->name ?></td>
        <td><?= $ad->user0->email ?></td>
        <td><?= $ad->status0->name ?></td>
        <td><?= $ad->price . ' ' . $ad->currency0->name ?></td>
        <td><?= date('d-m-Y', $ad->published_to)  ?></td>
      <tr>
      <?
    }
    ?>
    </tbody>
  </table>

</div>
