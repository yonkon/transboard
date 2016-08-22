
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
