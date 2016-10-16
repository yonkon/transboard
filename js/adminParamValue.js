$(document).ready(function(){

    $('.param_value_add button.submit_btn').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var $tr = $this.parents('tr');
        var _param = $tr.find('[name=param]').val();
        var _string = $tr.find('[name=string]').val();
        var _number = $tr.find('[name=number]').val();
        $.ajax({
            url : '/adminParamValue/add',
            data : {
                param : _param,
                string : _string,
                number : _number,
                ajax : 'ajax'
            },
            type : 'post',
            success : function(data) {
                try {
                    data = JSON.parse(data);
                    if(data.status == 'OK') {
                        $this.text('Сохранить');
                        var $newtr = $tr.clone();
                        $newtr.removeClass('param_value_add').addClass('param_value_edit');
                        $newtr.insertAfter($tr);
                        $newtr.find('td').css('background-color', 'rgb(100, 200, 100)');
                        $this.text('Добавить');
                    } else {
                        alert('Ошибка запроса:\n' + data.msg);
                    }
                } catch(e) {
                    alert('Некорректный ответ сервера');
                    console.dir(e);
                    $tr.find('td').css('background-color' ,'rgb(200, 100, 100)');
                } finally {
                    setTimeout(function () {
                        $tr.find('td').css('background-color' , '');
                        if(typeof $newtr != 'undefined') {
                            $newtr.find('td').css('background-color' , '');
                        }
                    }, 1500)
                }
            },
            error : function(data, err) {
                alert('Error');
                console.dir(data);
            }
        });
    });
    
    $('.param_value_edit button.delete_btn').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var $tr = $this.parents('tr');
        var _id = $tr.find('[name=id]').val();
        $.ajax({
            url : '/adminParamValue/delete' ,
            data : {
                id : _id,
                ajax : 'ajax'
            },
            type : 'post',
            success : function(data) {
                try {
                    data = JSON.parse(data);
                    if(data.status == 'OK') {
                        $tr.remove();
                    } else {
                        alert('Ошибка запроса:\n' + data.msg);
                    }
                } catch(e) {
                    alert('Некорректный ответ сервера');
                    console.dir(e);
                    $tr.find('td').css('background-color' ,'rgb(200, 100, 100)');
                }
            },
            error : function(data, err) {
                alert('Error');
                console.dir(data);
            }
        });
    });

});

