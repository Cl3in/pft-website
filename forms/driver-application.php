<?php
if($_FILES){

move_uploaded_file($_FILES['file']['tmp_name'],
"../uploads/".$_FILES['file']['name']);

echo "Application submitted";
}