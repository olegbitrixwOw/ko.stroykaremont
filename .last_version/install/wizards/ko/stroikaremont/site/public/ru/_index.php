<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "�������������, ������ �����, �������, ������ ����� ���������");
$APPLICATION->SetTitle("�������������, ������ �����, �������, ������ ����� ���������");
$APPLICATION->SetPageProperty("tags", "�������������, ������ �����, �������, ������ ����� ���������");
$APPLICATION->SetPageProperty("keywords", "�������������, ������ �����, �������, ������ ����� ���������");
$APPLICATION->SetPageProperty("description", "�������������, ������ �����, �������, ������ ����� ���������");
?>

	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/title_index.php"), false);?></h2>


	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/youtube_index.php"), false);?></h2>
						
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/title2_index.php"), false);?></h2>

	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>