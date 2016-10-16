<?php
/**
 * @var $this AdminParamController
 * @var $params Param[]
 * @var Param $param
 */

$this->breadcrumbs=array(
    'Admin Param'=>array('/adminParam'),
    'List',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<a href="javascript: void(0)" class="toggle_category_param_header"> <?= __('Показать/скрыть категории') ?></a>
<table id="Params">
  <thead>
  <tr>
    <td><?= __('ID') ?> </td>
    <td><?= __('Название') ?> </td>
    <td><?= __('Включен') ?> </td>
    <td><?= __('Сравнение') ?> </td>
    <td><?= __('Значения') ?> </td>
    <td><?= __('Действия') ?> </td>
    <? /** @var AdvertCategory $category */
    $categories = AdvertCategory::model()->findAll();
    foreach ($categories as $category) {
      ?>
      <td class="category_param_header"><?= __($category->name) ?></td>
      <?
    }
    ?>
  </tr>
  </thead>
  <tbody>
  <tr id="param_add">
    <td><input type="number" readonly name="param[id]"></td>
    <td><input name="param[name]"></td>
    <td><input type="checkbox" name="param[enabled]"></td>
    <td>
      <select name="param[compare]">
        <option value="string"><?= __('Точное соответствие') ?></option>
        <option value="like"><?= __('Частичное сответствие') ?></option>
        <option value="int"><?= __('Целое число') ?></option>
        <option value="float"><?= __('Вещественное число') ?></option>
        <option value="bool"><?= __('Да/Нет') ?></option>
      </select>
    </td>
    <td></td>
    <td><button id="param_add_btn" type="button"><?= __('Добавить') ?></button></td>
    <? /** @var AdvertCategory $category */
    foreach ( $categories as $category) {
      ?>
      <td class="category_param_header"><input type="checkbox" class="category_param_checkbox"></td>
      <?
    }
    ?>
  </tr>
  <?
  foreach ($params as $param) { ?>
    <tr class="param_row" data-id="<?= $param->id ?>">
      <td>
        <input type="number" readonly name="params[<?= $param->id ?>][id]" value="<?= $param->id ?>">
      </td>
      <td>
        <input name="params[<?= $param->id ?>][name]" value="<?= $param->name ?>">
      </td>
      <td>
        <input type="checkbox" name="params[<?= $param->id ?>][enabled]" <?= $param->enabled ? 'checked' : '' ?>>
      </td>
      <td>
        <select name="params[<?= $param->id ?>][compare]">
          <?= Param::getParamComparesOptions($param) ?>
        </select>
      </td>
      <td>
        <?= $this->getParamValuesHtml($param)?>
      </td>
      <td><button class="param_edit_btn" type="button"><?= __('Сохранить') ?></button></td>
        <?
        foreach($categories as $category) {?>
      <td class="category_param_header">
      <input type="checkbox" class="category_param_checkbox" data-category="<?= $category->id ?>" data-param="<?= $param->id ?>" <?= $category->hasParam($param->id) ? 'checked' : '' ?>>
      </td>
        <? } ?>
    </tr>
    <?
  }
  ?>
  </tbody>
</table>