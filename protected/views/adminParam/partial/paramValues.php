<?php
/**
 *
 * @var AdminParamController $this
 * @var ParamValue[] $param_values
 * @var Param $param
 */

$param_values = $param->getParamValues();
?>
<a href="javascript: void(0)" class="toggle_param_value_list" data-alt="<?= __('Скрыть') ?>"><?= __('Показать') ?></a>
<div class="param_value_list">
  <? foreach ($param_values as $param_value) { ?>
    <div>
      <input readonly name="Param[<?= $param->id ?>][ParamValues][<?= $param_value->id ?>]" value="<?= $param_value->string ?>">
      <a href="javascript: void(0);" class="param_value_remove" data-id="<?= $param_value->id ?>" title="<?= __('Удалить') ?>">&nbsp;</a>
    </div>
  <? } ?>
</div>
