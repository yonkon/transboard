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
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>
      <input type="hidden" name="category" value="<?=
      $category ?>">
    </td>
    <td><input type="text" name="name"></td>
    <td><textarea name="description"></textarea></td>
    <td><button type="button" class="autocomplete_make_add"> <?= __('Добавить') ?></button></td>
  </tr>
  <?
  foreach($makes as $make) { ?>
    <tr>
      <td>
        <input type="hidden" name="category" value="<?= $category ?>">
        <input type="hidden" name="id" value="<?= $make->id ?>">
        <?= $make->id ?>
      </td>
      <td><input type="text" name="name" value="<?= $make->name ?>"></td>
      <td><textarea name="description"><?= $make->description ?></textarea></td>
      <td><button type="button" class="make_edit" value="<?= __('Сохранить') ?>"><?= __('Сохранить') ?></td>
    </tr>
  <?
  }
  ?>

  </tbody>
</table>

<script type="text/javascript">
  $('.autocomplete_make_add').click(function(e){
    var $this = $(this);
    var $row = $this.parents('tr');
    var $table = $this.parents('table');
    var $newRow = $row.clone();
    $.ajax({
      url : '/adminMake/add',
      data : {
        name : $row.find('[name=name]').val(),
        description : $row.find('[name=description]').val(),
        category : $row.find('[name=category]').val(),
        ajax : 'ajax'
      },
      success : function(data){
        try {
          data = JSON.parse(data);
          if(data.status == 'OK') {
            $newRow.find('[name=id]').val(data.id);
            var $newBtn = $newRow.find('.autocomplete_make_add');
            $newBtn.removeClass('autocomplete_make_add').addClass('autocomplete_make_delete').text('Удалить');
            $newBtn.unbind('click').click(function(e){
              $.ajax({
                url : '/adminMake/delete',
                data : {
                  category : $newRow.find('[name=category]').val(),
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
