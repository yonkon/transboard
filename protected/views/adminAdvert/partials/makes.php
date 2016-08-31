<?php
/**
 *
 * @var AdminAdvertController $this
 * @var AdvertMake[] $makes
 * @var CWebApplication $app
 * @var integer $category
 */
$app = Yii::app();
?>
<table id="autocomplete_makes">
  <thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><a id="autocomplete_make_add"><?= __('Добавить') ?></a></td>
    <td><input type="hidden" name="category" value="<?=
      $category ?>"></td>
  </tr>
  <?
  foreach($makes as $make) { ?>
    <tr>
      <td></td>
    </tr>
  <?
  }
  ?>

  </tbody>
</table>
