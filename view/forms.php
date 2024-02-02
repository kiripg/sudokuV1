<?php

function openForm($name, $action) {
    printf("<form name=\"$name\" action=\"$action\" method=\"post\" enctype=\"multipart/form-data\">");
}

function closeForm() {
    printf("</form>");
}

function showLabel($for, $label) {
    printf("<label for=\"$for\">$label:</label>\n");
}

function showSelect($id, $name, $values, $texts, $selected) {
    printf("<select id=\"$id\" name=\"$name\">\n");
    $len = count($values);
    for ($i = 0; $i < $len; $i++) {
        printf("<option value=\"$values[$i]\"");
        if ($texts[$i] == $selected)
            printf(" selected = \"selected\"");
        printf(">$texts[$i]");
        printf("</option>\n");
    }
    printf("</select>\n");
}

function showHidden($id, $name, $text) {
    printf("<input id=\"$id\" name=\"$name\" type=\"hidden\" value=\"$text\">\n");
}

function showButton($id, $name, $type, $text) {
    printf("<button id=\"$id\" name=\"$name\" type=\"$type\">$text</button>\n");
}

function inputTxt($id, $name, $text){
    printf("<input type=\"text\" id=\"$id\" name=\"$name\" value=\"$text\">\n");
}



?>

