<?php
require_once "./config.php";
require_once $inc_path."functions.php";

$tmp_type = "php";
$tmp_file = "0.tmp";
?>
<?php
session_start();
// проверка агентского ID
get_agent_id();

// заголовок страницы
$head["title"] = "Steam vs Origin";

// функция вывода контента
function show_content() {
?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://primearea.ru/shopsite/v1.1/index.php?id=1976" charset="utf-8"></script>
<link media="screen" href="http://primearea.ru/shopsite/v1.1/my_site_style.css" type="text/css" rel="stylesheet" />


<div class="btn btn_my_site" onclick="primearea.change_page();" style="top: 32px; width: 485px; left: 282px;">Список товаров.</div>
<div id="primearea_main">
    <div style="text-align:center;"><img src="http://primearea.ru/shopsite/v1.1/img/preloader.gif" alt="��������..."></div>
    <noscript>��� ������� �� ������������ JavaScript.</noscript>
</div>




<?php }
// функция шаблонизации
tmp_open("php", $tmp_dir, $tmp_file, $head);
?>