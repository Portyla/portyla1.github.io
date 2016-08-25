<?php
require_once "./config.php";
require_once $inc_path."functions.php";

$tmp_type = "php";
$tmp_file = "A.tmp";
?>
<?php
session_start();
// проверка агентского ID
get_agent_id();

// заголовок страницы
$head["title"] = "Агентская программа";

// функция вывода контента
function show_content() {
?>
<div id="main_data">
<h3 class="agent">Агентская программа</h3>
<?php
echo "<p>Наш магазин предлагает вам участвовать в агентской(партнерской) программе. Агент, продавая товар магазина будет получать вознаграждение(% от продажи, в описании товара пункт \"Агентское вознаграждение\"), в размере, установленным администрацией магазина. Зачисление средств происходит сразу после оплаты товара на личный счет сервиса Digiseller.ru, если покупатель пришел в наш магазин по <a href=\"agent_url.php\" title=\"агентская ссылка\">агентской ссылке</a>.</p>
<p>Если агент не был зарегистрирован в данном сервисе(Digiseller.ru), то регистрация пройдёт автоматически, причитающее агентское вознаграждение будет зачислено на личный счет, а на email придет сообщение с реквизитами доступа к счету и уведомление о успешном зачислении агентских комиссионных.</p>
<p>Если вы решили стать агентом, разместите <a href=\"agent_url.php\" title=\"агентская ссылка\">агентскую ссылку</a> на своем сайте, форуме, доске объявлений и пр. и получайте прибыль!</p>";
?>
</div>
<?php }
// функция шаблонизации
tmp_open("php", $tmp_dir, $tmp_file, $head);
?>