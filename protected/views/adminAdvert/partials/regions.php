<?php
/**
 *
 * @var AdminAdvertController $this
 * @var Region[] $regions
 * @var CWebApplication $app
 * @var integer $region
 */
$app = Yii::app();
?>
<table id="autocomplete_regions">
  <thead>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>
      <input type="hidden" name="region" >
    </td>
    <td><input type="text" name="name"></td>
    <td><button type="button" class="autocomplete_region_add"> <?= __('Добавить') ?></button></td>
  </tr>
  <?
  foreach($regions as $region) { ?>
    <tr>
      <td>
        <input type="hidden" name="id"  value="<?= $region->id ?>">
        <?= $region->id ?>
      </td>
      <td><input type="text" name="name" data-value="<?= $region->name ?>" value="<?= $region->name ?>"></td>
      <td><textarea name="description" data-value="<?= $region->description ?>"><?= $region->description ?></textarea></td>
      <td><button type="button" class="region_edit" value="<?= __('Сохранить') ?>"><?= __('Сохранить') ?></td>
    </tr>
    <?
  }
  ?>

  </tbody>
</table>

<script type="text/javascript">
  debugger;
  $('.autocomplete_region_add').click(function(e){
    var $this = $(this);
    var $row = $this.parents('tr');
    var $table = $this.parents('table');
    var $newRow = $row.clone();
    var name = $row.find('[name=name]').val().trim();
    var description = $row.find('[name=description]').val().trim();
    var region = $row.find('[name=region]').val();
    $.ajax({
      url : '/adminRegion/add',
      data : {
        name : name,
        description : description,
        region : region,
        ajax : 'ajax'
      },
      success : function(data){
        try {
          data = JSON.parse(data);
          if(data.status == 'OK') {

            $newRow.find('[name=id]').val(data.id);
            $newRow.find('[name=name]').data('value', name);
            $newRow.find('[name=description]').data('value', description);
            $newRow.find('[name=region]').data('value', region);

            var $newBtn = $newRow.find('.autocomplete_region_add');
            $newBtn.removeClass('autocomplete_region_add').addClass('autocomplete_region_delete').text('Удалить');
            $newBtn.unbind('click').click(function(e){
              $.ajax({
                url : '/adminRegion/delete',
                data : {
                  region : $newRow.find('[name=region]').val(),
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
            alert ('Error\n'+data.msg);
          }
        } catch (e) {
          alert('Некорректный ответ сервера');
        }
      }
    });


  });
</script>
