$(document).ready(function(){
    $('.toggle_param_value_list').click(function (e) {
      e.preventDefault();
      var $this = $(this);
      var alt = $this.data('alt');
      $this.data('alt', $this.text());
      $this.text(alt);
      $this.toggleClass('opened');
      $this.siblings('.param_value_list').toggle();
    });

  $('.toggle_category_param_header').click(function (e) {
      e.preventDefault();
      $('.category_param_header').toggle();
  });
  
  $('.category_param_checkbox').click(function (e) {
    var url = '/adminCategoryParam/edit';
    var $this = $(this);
    var enabled = $this.is(':checked');
    var data = {
      id_category : $this.data('category'),
      id_param : $this.data('param'),
      ajax : 'ajax',
      enabled : enabled
    };
    $.ajax({
      url : url,
      data : data,
      type : 'post',
      success : function(ans) {
        try {
          data = JSON.parse(ans);
          if(typeof data.status != 'undefined' && data.status == 'OK') {
            $this.parent().append('<div class="ajax_msg success">OK</div>');
          } else {
            $this.parent().append('<div class="ajax_msg error">' + data.msg + '</div>');
            $this.attr('checked', enabled ? false :'checked')
          }
        } catch(e) {
          $this.parent().append('<div class="ajax_msg error">Некорректный ответ сервера</div>');
          console.dir(e);
          $this.attr('checked', enabled ? false :'checked')
        } finally {
          setTimeout(function(){
            $this.parent().find('.ajax_msg').remove();
          }, 1500);
        }
      },
      error : function(ans) {
        $this.parent().append('<div class="ajax_msg error">Некорректный ответ сервера</div>');
        console.dir(ans);
        $this.attr('checked', enabled ? false :'checked')
        setTimeout(function(){
          $this.parent().find('.ajax_msg').remove();
        }, 1500);
      }
    });
  });
  
  


});

