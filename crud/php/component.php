<?php

function inputElement($icon,$placeholder,$name,$value)
{
	$ele ="

	<div class=\"input-group mb-2\">
       	<div class=\"input-group-prepend\">
          	<div class=\"input-group-text bg-dark px-3\">$icon</div>

        </div>
        	<input type=\"text\" name='$name'value='$value'class=\"form-control\" id=\"inlineFormInputGroup\" placeholder='$placeholder'>
     </div>";

      	echo $ele;
}

function inputElement_pass($icon,$placeholder,$name,$value)
{
	$ele ="

	<div class=\"input-group mb-2\">
       	<div class=\"input-group-prepend\">
          	<div class=\"input-group-text bg-dark px-3\">$icon</div>

        </div>
        	<input type=\"password\" name='$name'value='$value'class=\"form-control\" id=\"inlineFormInputGroup\" placeholder='$placeholder'>
     </div>";

      	echo $ele;
}