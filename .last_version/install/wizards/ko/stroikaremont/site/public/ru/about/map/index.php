<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����� �����");
?><?$APPLICATION->IncludeComponent("bitrix:main.map", "map", Array(
	"CACHE_TIME" => "3600",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"COL_NUM" => "1",	// ���������� �������
		"LEVEL" => "3",	// ������������ ������� ����������� (0 - ��� �����������)
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"SHOW_DESCRIPTION" => "N",	// ���������� ��������
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>