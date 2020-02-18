<?
AddEventHandler("main", "OnBeforeUserLogin", 	"OnBeforeUserLoginHandler");
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
AddEventHandler("main", "OnBeforeUserUpdate", "OnBeforeUserRegisterHandler");

function OnBeforeUserLoginHandler($arFields)
{
    if (preg_match("/[0-9a-z]+@[a-z]/", $arFields["LOGIN"])) {
        $filter = Array("EMAIL" => $arFields["LOGIN"]);
    }
    else{
        $filter = Array("LOGIN" => $arFields["LOGIN"]);
    }
    $rsUsers = CUser::GetList(($by="LAST_NAME"), ($order="asc"), $filter);
    if($user = $rsUsers->GetNext()){
        $arFields["LOGIN"] = $user["LOGIN"];
    }
}

function OnBeforeUserRegisterHandler(&$arFields)
{
    if (preg_match("/[0-9a-z]+@[a-z]/", $arFields["LOGIN"])) {
        $arFields["EMAIL"] = $arFields["LOGIN"];
    }
    else{
        $arFields["EMAIL"] = 'temp_'.time().'@mail.ru';
    }
}

?>