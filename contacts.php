<?php
require_once "./inc/functions.php";

$tmp_type = "php";
$tmp_file = "A.tmp";
?>
<?php
// заголовок страницы, массив контактов
$head["title"] = "Контактная информация";
$GLOBALS["contacts"] = $contacts;
// функция вывода контента
function show_content(){
?>
			<!-- Список товаров -->
			<div class="digiseller-contacts">
			
			<h1>Контактная информация</h1>

				<div class="digiseller-breadcrumbs">
				<a href="./" title="Магазин">Магазин</a> > <strong>Контактная информация</strong>
				

</div>
				
			
			</div>
Skype: Neo_Airmax
<br>
VK: <a href="http://vk.com/neo_airmax">vk.com/neo_airmax </a>



			<!-- end.Список товаров -->
<?php }
// функция шаблонизации
tmp_open($tmp_type,$tmp_dir,$tmp_file,$head);
?>