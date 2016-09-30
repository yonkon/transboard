
function selectAutocomplete (field, url, param, select,  input ) {
    $(field).change(function(){
        var $this = $(this);
        var val = $this.val();
        var data = {};
        data[param] = val;
        $.ajax({
            url : url,
            data : data,
            success : function(data){
                data = $.trim(data);
                if(!data.length) {
                    return;
                }
                $(select).html(data);
                $(select).show();
                $this.hide();
                $(select).unbind("change").change(function(){
                    var $select = $(this);
                    $(input).val($select.val());
                    $(field).val($select.find("option:selected").text());
                    $select.hide();
                    $(field).show();
                });
                $(select).unbind("click").click(function(){
                    var $select = $(this);
                    if(!$select.hasClass('open')) {
                        $select.addClass('open');
                    } else {
                        $select.change();
                    }
                });
            }
        });
    });
}

function selectAutocompletePopup(field_selector, controller_url, popup_selector, input_selector, cb_data, cb_success, cb_error){
    var $field = $(field_selector);
    $field.dblclick(function(e){
            var $this = $(this);
            selectAutocompleteHandler($this, e, field_selector, controller_url, popup_selector, input_selector, cb_data, cb_success, cb_error);
        });
        $field.change(function(e){
            var $this = $(this);
            selectAutocompleteHandler($this, e, field_selector, controller_url, popup_selector, input_selector, cb_data, cb_success, cb_error);
        });
}

function selectAutocompleteHandler($this, e, field_selector, controller_url, popup_selector, input_selector, cb_data, cb_success, cb_error) {
    var $field = $(field_selector);
    var $popup = $(popup_selector);
    if(typeof input_selector == 'undefined' || !input_selector) {
        input_selector = field_selector;
    }

    if(typeof cb_data != 'undefined' && cb_data) {
        if(typeof cb_data != 'function') {
            if(typeof selectAutocompletePopup[cb_data] == 'function') {
                cb_data = selectAutocompletePopup[cb_data];
            } else {
                cb_data = function(){return {};};
            }
        }
    } else {
        cb_data = function(){return {};};
    }

    if(typeof cb_success != 'undefined' && cb_success) {
        if(typeof cb_success != 'function') {
            if(typeof selectAutocompletePopup[cb_success] == 'function') {
                cb_success = selectAutocompletePopup[cb_success];
            }
        }
    } else {
        cb_success = null;
    }

    if(typeof cb_error != 'undefined' && cb_error) {
        if(typeof cb_error != 'function') {
            if(typeof selectAutocompletePopup[cb_error] == 'function') {
                cb_error = selectAutocompletePopup[cb_error];
            }
        }
    } else {
        cb_error = null;
    }

    var $input = $(input_selector);
    e.preventDefault();
    e.stopPropagation();
    var val = $this.val();
    var data = cb_data($this);
    data.query = val;
    $.ajax({
        url : controller_url,
        data : data,
        success : function(data){
            if(typeof cb_success == 'function') {
                $popup.show();
                $popup.find('.autocomplete_window').show();
                cb_success($this, data);
            } else {
                try {
                    data = JSON.parse(data);
                    if(data.status == 'OK') {
                        $popup.find('.popup_window').show();
                        $popup.find('.popup_content').html(data.data.html);
                    } else {
                        alert('Ошибка запроса:\n' + data.msg);
                    }
                } catch(e) {
                    alert('Некорректный ответ сервера');
                    console.dir(e);
                }
            }
        },
        error : function(data, err) {
            if(typeof cb_error == 'function') {
                cb_error($this, data, err);
            } else {
                alert('Error');
                console.dir(data);
            }
        }
    });
}

$(document).ready(function(){
    $('#autocomplete_popup, #autocomplete_close').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('#autocomplete_popup').hide();
    });
    $('.autocomplete_window, .autocomplete_content').click(function(e){
        e.preventDefault();
        e.stopPropagation();
    });
});

selectAutocompletePopup.dataMake = function($input){ return {
    category : $('#category').val()
};};
selectAutocompletePopup.errorMake = function($input, data){
    console.dir(data.errorMessage);
};
selectAutocompletePopup.successMake = function($input, data){
    $('.autocomplete_content').html(data);
    $('.autocomplete_content .make_edit').click(function(e){
        var $this = $(this);
        var $row = $this.parents('tr');

        var id = $row.find('td:first').text().trim();

        var name = $row.find('td:nth(1) input').val().trim();
        var old_name = $row.find('td:nth(1) input').data('value');

        var descr = $row.find('td:nth(2) textarea').val().trim();
        var old_descr = $row.find('td:nth(2) textarea').data('value');

        $input.val(name);
        $('#make').val(id);

        if (name != old_name || descr != old_descr) {
            $.ajax({
                url : '/adminMake/edit/'+id,
                type : 'post',
                data : {
                    id : id,
                    name : name,
                    description : descr,
                    ajax : 'ajax'
                }
            });
        }

        closeAutocompletePopup();
    });
};

selectAutocompletePopup.successCategory = function($input, data){
    $('.autocomplete_content').html(data);
    $('.autocomplete_content .category_edit').click(function(e){
        var $this = $(this);
        var $row = $this.parents('tr');
        var id = $row.find('td:first').text().trim();
        var name = $row.find('td:nth(1) input').val().trim();
        var old_name = $row.find('td:nth(1) input').data('value');

        var descr = $row.find('td:nth(2) textarea').val().trim();
        var old_descr = $row.find('td:nth(2) textarea').data('value');

        $input.val(name);
        $('#category').val(id);

        if (name != old_name || descr != old_descr) {
            $.ajax({
                url : '/adminCategory/edit/'+id,
                type : 'post',
                data : {
                    id : id,
                    name : name,
                    description : descr,
                    ajax : 'ajax'
                }
            });
        }

        closeAutocompletePopup();
    });
};

selectAutocompletePopup.dataModel = function($input){ return {
    make : $('#make').val()
}};

selectAutocompletePopup.successModel = function($input, data){
    $('.autocomplete_content').html(data);
    $('.autocomplete_content .model_edit').click(function(e){
        var $this = $(this);
        var $row = $this.parents('tr');
        id = $row.find('td:first').text().trim();
        name = $row.find('td:nth(1) input').val().trim();
        $input.val(name);
        $('#model').val(id);
        closeAutocompletePopup();
    });
};


function closeAutocompletePopup(){
    $('#autocomplete_popup').hide();
}
