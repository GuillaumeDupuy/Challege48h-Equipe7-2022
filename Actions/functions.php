<?php  
function verify_valid_characters($str,$data):string{
    for ($i=0; $i<strlen($str); $i++){
        if ((strtoupper($str[$i])<'A'||strtoupper($str[$i])>'Z')
        &&($str[$i]<'0'||$str[$i]>'9')
        &&($str[$i]!=='-')&&($str[$i]!=='_')){
            return $data." doit contenir que A-Za-z0-9_-";
        }
    }
    return "true";
    }
function verify_data_length($str,$MIN_LENGTH,$MaxLength,$data):string{
    if (strlen($str)<$MIN_LENGTH){
        return "$data doit contenir au moins $MIN_LENGTH caractères";
    }
    if(strlen($str)>$MaxLength){
        return "La taille de $data ne dépasse pas $MaxLength caractères";
    }
    return "true";
}
function check_Data($str,$MIN_LENGTH,$MaxLength,$data){
    if(verify_data_length($str,$MIN_LENGTH,$MaxLength,$data)!="true"){
        return verify_data_length($str,$MIN_LENGTH,$MaxLength,$data);
    }else if (verify_valid_characters($str,$data)){
return verify_valid_characters($str,$data);
    }else{
        return "true";
    }

}
function User_exists($data,$strdata){
    $mysql = new PDO('mysql:host=localhost;dbname=conference;charset=utf8;', 'root', '');
    $req_User_Exists = $mysql->prepare("SELECT $strdata FROM utilisateurs WHERE $strdata= ?");
    $req_User_Exists->execute(array($data));
    return $req_User_Exists;
}


?>