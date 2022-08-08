<?php
function form_daten() {
if isset ($_POST)) {
foreach ($_POST as $key => $element) {
echo "<input type=\"hidden\"
name=\"$key\" value=\="$element\?">";
}
}
else {
foreach ($_GET as $key => $elem) {
echo "<input type=\"hidden\"
name=\"$key" value=\"$element\">";
}
}
}
?>