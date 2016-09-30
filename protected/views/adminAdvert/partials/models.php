<?php
/**
 *
 * @var AdminAdvertController $this
 * @var AdvertModel[] $models
 * @var CWebApplication $app
 * @var integer $model
 */
$app = Yii::app();
?>
<table id="autocomplete_models">
  <thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>
      <input type="hidden" name="make" value="<?=
      $make ?>">
    </td>
    <td><input type="text" name="name"></td>
    <td><textarea name="description"></textarea></td>
    <td><button type="button" class="autocomplete_model_add"> <?= __('Добавить') ?></button></td>
  </tr>
  <?
  foreach($models as $model) { ?>
    <tr>
      <td>
        <input type="hidden" name="make" value="<?=
        $make ?>">

        <input type="hidden" name="id" value="<?= $model->id ?>">
        <?= $model->id ?>
      </td>
      <td><input type="text" name="name" data-value="<?= $model->name ?>" value="<?= $model->name ?>"></td>
      <td><textarea name="description" data-value="<?= $model->description ?>"><?= $model->description ?></textarea></td>
      <td><button type="button" class="model_edit" value="<?= __('Сохранить') ?>"><?= __('Сохранить') ?></td>
    </tr>
    <?
  }
  ?>

  </tbody>
</table>

<script type="text/javascript">
  $('.autocomplete_model_add').click(function(e){
    var $this = $(this);
    var $row = $this.parents('tr');
    var $table = $this.parents('table');
    var $newRow = $row.clone();
    $.ajax({
      url : '/adminModel/add',
      data : {
        name : $row.find('[name=name]').val(),
        description : $row.find('[name=description]').val(),
        model : $row.find('[name=model]').val(),
        ajax : 'ajax'
      },
      success : function(data){
        try {
          data = JSON.parse(data);
          if(data.status == 'OK') {
            $newRow.find('[name=id]').val(data.id);
            var $newBtn = $newRow.find('.autocomplete_model_add');
            $newBtn.removeClass('autocomplete_model_add').addClass('autocomplete_model_delete').text('Удалить');
            $newBtn.unbind('click').click(function(e){
              $.ajax({
                url : '/adminModel/delete',
                data : {
                  model : $newRow.find('[name=model]').val(),
                  ajax : 'ajax',
                  id : $newRow.find('[name=id]')
                },
                success : function(data){
                  $(this).remove();
                },
                error : function(data) {
                  alert('Ошибка удаления');
                  console.dir(data);
                }
              });
            });
            $newRow.appendTo($table.find('tbody'));
            $row.find('input:visible, textarea').val('');
          } else {
            alert ('Error\n'+date.msg);
          }
        } catch (e) {
          alert('Некорректный ответ сервера');
        }
      }
    });


  });
</script>
