<?php
class Session {
    public static function init(){
        session_start();
    }
    public static function set($key, $val){
        $_SESSION[$key] = $val;
    }
    public static function get($key){
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
    public static function checkSession(){
        self::init();
        if (self::get("user_login") == false) {
            location('login.php');
        }
        elseif(self::get('vaitro') != 1){
            location('home');
        }
    }
    public static function destroy(){
        session_destroy();
        // location('home');
    }
    public static function unset($key){
        unset($_SESSION[$key]);
    }
}
