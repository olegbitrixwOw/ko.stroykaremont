<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Строительство, ремонт домов, квартир, офисов любой сложности");
$APPLICATION->SetTitle("Строительство, ремонт домов, квартир, офисов любой сложности");
$APPLICATION->SetPageProperty("tags", "Строительство, ремонт домов, квартир, офисов любой сложности");
$APPLICATION->SetPageProperty("keywords", "Строительство, ремонт домов, квартир, офисов любой сложности");
$APPLICATION->SetPageProperty("description", "Строительство, ремонт домов, квартир, офисов любой сложности");
?>

	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/title_index.php"), false);?></h2>


	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/youtube_index.php"), false);?></h2>
						
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/title2_index.php"), false);?></h2>

	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>