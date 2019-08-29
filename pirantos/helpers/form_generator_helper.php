<?php
function form($type, $name, $value = ''){
	$attr_class = ['form-control'];
	$attr_style = [];
	$attr_disabled = FALSE;

	$id = $name;

	if(strpos($name, '.id') !== FALSE){ 
		$name = str_replace('.id', '', $name);
		$id = $name;
		$name = '';
	}

	if(strpos($type, '.array') !== FALSE){ 
		$type = str_replace('.array', '', $type);
		$name = $name.'[]';
	}

	if(strpos($type, '.hidden') !== FALSE){ 
		$type = str_replace('.hidden', '', $type);
		array_push($attr_style, 'display: none');
	}

	if(strpos($type, '.disabled') !== FALSE){ 
		$type = str_replace('.disabled', '', $type);
		$attr_disabled = TRUE;
	}

	array_push($attr_class, "$name");

	$c_id = "id='$id' ";
	$c_name = "name='$name' ";
	$c_value = "value='$value' ";

	$attr = $c_id.$c_name.$c_value;

	if(count($attr_class) > 0){
		if ($type == 'img') {
			array_push($attr_class, "img-form-generator");
		}
		$c_class = "class='".implode(' ', $attr_class)."' ";
		$attr .= $c_class;
	}
	if(count($attr_style) > 0){
		$c_style = "style='".implode(';', $attr_style)."' ";
		$attr .= $c_style;
	}
	if($attr_disabled == TRUE){
		$c_style = "disabled='true' ";
		$attr .= $c_style;
	}



	if($type == 'text'){
		$output = "<input type='text' $attr>";
	} else if ($type == 'password') {
		$output = "<input type='password' $attr>";
	} else if ($type == 'number') {
		$output = "<input type='number' $attr>";
	} else if ($type == 'select') {
		$output = "";
	}else if ($type == 'textarea') {
		$output = "<textarea $attr>$value</textarea>";
	} else if ($type == 'img') {
		$output = "<input type='file' $attr>";
		$output .= "<img class='preview_img'>";
	} else {
		$output = 'Cant find type of form!';
	}
	return $output;
}
?>
