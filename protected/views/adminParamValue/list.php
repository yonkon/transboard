<?php
/**
 * @var $this AdminParamValueController
 * @var $param Param
 * @var $values ParamValue[]
 * */

$this->breadcrumbs=array(
	'Admin Param Value'=>array('/adminParamValue'),
	'List',
);
?>
<h1><?php echo $param->name; ?></h1>

<table>
	<thead>
	<tr>
		<th>ID</th>
		<th>param</th>
		<th>Текстовое значение</th>
		<th>Числовое значение</th>
		<th>Действия</th>
	</tr>
	</thead>
	<tbody>
	
	</tbody>
	<tr class="param_value_add">
		<td><input readonly name="id" </td>
		<td><input readonly name="param" value="<?= $param->id ?>"></td>
		<td><input type="text" name="string"></td>
		<td>
			<input type="number" name="number" >
		</td>
		<td>
			<button class="submit_btn" type="button"><?= __('Добавить'); ?></button>
			<button class="delete_btn" type="button"><?= __('Удалить'); ?></button>
		</td>
	</tr>
	<?php

	foreach ($values as $values_array) {
		foreach($values_array as $value) { ?>
			<tr class="param_value_edit">
				<td><input readonly name="id" value="<?= $value->id ?>"></td>
				<td><input readonly name="param" value="<?= $value->param ?>"></td>
				<td><input type="text" name="string" value="<?= $value->string ?>"></td>
				<td>
					<input type="number" name="number" value="<?= $value->number ?>">
				</td>
				<td>
					<button class="submit_btn" type="button"><?= __('Сохранить'); ?></button>
					<button class="delete_btn" type="button"><?= __('Удалить'); ?></button>
				</td>
			</tr>
			<?
		}
	}
	?>
</table>
