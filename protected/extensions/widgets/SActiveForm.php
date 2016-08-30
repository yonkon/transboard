<?php


class SActiveForm extends CActiveForm
{

  public function autoComboboxField($model, $field, $url, $initial_query = null, $id_input = null, $id_query = null,  $id_select = null)
  {
    $app = Yii::app();
    $id_input = empty($id_input) ? $field : $id_input;
    $id_query = empty($id_query) ? $id_input.'_query' : $id_query;
    $id_select = empty($id_select) ? $id_input.'_select' : $id_select;
    $res = $this->hiddenField($model, $field, array(
        'id' => $id_input)
    );
    $res .= "\n
<input type=\"text\" id=\"{$id_query}\" value=\"{$initial_query}\">\n
<select class=\"hidden\" id=\"{$id_select}\"></select>";
    $res .=
      "\n<script type='text/javascript'>
$(document).ready(function(){\n
    selectAutocomplete(\"#{$id_query}\", \"". $app->createUrl($url)."\", \"query\", \"#{$id_select}\", \"#{$id_input}\");\n
});\n
</script>";
    return $res;
  }

  public function autocompletePopupField($model, $field, $url, $popup_selector = '#autocomplete_popup', $initial_query = null, $cb_data = null, $cb_success = null, $cb_error = null, $id_input = null, $id_query = null,  $id_select = null)
  {
    $app = Yii::app();
    $id_input = empty($id_input) ? $field : $id_input;
    $id_query = empty($id_query) ? $id_input.'_query' : $id_query;
    $id_select = empty($id_select) ? $id_input.'_select' : $id_select;
    $popup_selector = empty($popup_selector)? '#autocomplete_popup' : $popup_selector;
    $res = $this->hiddenField($model, $field, array(
        'id' => $id_input)
    );
    $res .= "\n
<input type=\"text\" id=\"{$id_query}\" value=\"{$initial_query}\">\n
<select class=\"hidden\" id=\"{$id_select}\"></select>";
    $res .=
      "\n<script type='text/javascript'>
$(document).ready(function(){\n
    selectAutocompletePopup(
    \"#{$id_query}\",
    \"". $app->createUrl($url)."\",
    \"{$popup_selector}\",
     \"#{$id_input}\",
     '{$cb_data}',
     '{$cb_success}',
     '{$cb_error}');\n
});\n
</script>";
    return $res;
  }

}
