<?php
/**
 *
 * @var AdminAdvertController $this
 * @var AdvertCategory[] $categories
 * @var CWebApplication $app
 * @var integer $category
 */
$app = Yii::app();
?>
<table id="autocomplete_categories">
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
      <input type="hidden" name="category" >
    </td>
    <td><input type="text" name="name"></td>
    <td><textarea name="description"></textarea></td>
    <td><button type="button" class="autocomplete_category_add"> <?= __('Добавить') ?></button></td>
  </tr>
  <?
  foreach($categories as $category) { ?>
    <tr>
      <td>
        <input type="hidden" name="id"  value="<?= $category->id ?>">
        <?= $category->id ?>
      </td>
      <td><input type="text" name="name" data-value="<?= $category->name ?>" value="<?= $category->name ?>"></td>
      <td><textarea name="description" data-value="<?= $category->description ?>"><?= $category->description ?></textarea></td>
      <td><button type="button" class="category_edit" value="<?= __('Сохранить') ?>"><?= __('Сохранить') ?></td>
    </tr>
    <?
  }
  ?>

  </tbody>
</table>

<script type="text/javascript">
  debugger;
  $('.autocomplete_category_add').click(function(e){
    var $this = $(this);
    var $row = $this.parents('tr');
    var $table = $this.parents('table');
    var $newRow = $row.clone();
    var name = $row.find('[name=name]').val().trim();
    var description = $row.find('[name=description]').val().trim();
    var category = $row.find('[name=category]').val();
    $.ajax({
      url : '/adminCategory/add',
      data : {
        name : name,
        description : description,
        category : category,
        ajax : 'ajax'
      },
      success : function(data){
        try {
          data = JSON.parse(data);
          if(data.status == 'OK') {

            $newRow.find('[name=id]').val(data.id);
            $newRow.find('[name=name]').data('value', name);
            $newRow.find('[name=description]').data('value', description);
            $newRow.find('[name=category]').data('value', category);

            var $newBtn = $newRow.find('.autocomplete_category_add');
            $newBtn.removeClass('autocomplete_category_add').addClass('autocomplete_category_delete').text('Удалить');
            $newBtn.unbind('click').click(function(e){
              $.ajax({
                url : '/adminCategory/delete',
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
            alert ('Error\n'+data.msg);
          }
        } catch (e) {
          alert('Некорректный ответ сервера');
        }
      }
    });


  });
</script>
