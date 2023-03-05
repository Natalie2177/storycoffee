<?
class Clear{
    static function value($value){
    $value = trim($value);
    $value = htmlspecialchars($value);
    return $value;
    }
    
    static function password($password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;
    }
}