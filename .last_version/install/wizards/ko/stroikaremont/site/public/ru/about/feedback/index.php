<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� �����");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedback_by_ko",
	Array(
		"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
		"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
		"AJAX_MODE" => "Y",  // ����� AJAX
		"AJAX_OPTION_SHADOW" => "N", // ��������� �������
		"AJAX_OPTION_JUMP" => "N", // ��������� �������� �� ����������
		"AJAX_OPTION_STYLE" => "Y", // ���������� �����
		"AJAX_OPTION_HISTORY" => "N",
		"OK_TEXT" => "�������, ���� ��������� �������.",
		"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "Y"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

