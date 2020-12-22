<?php

//Helper untuk cek login
if(!function_exists('auth_log')){
    function auth_log(){
        if(Session::get('nipy') != null){
            return "nipy";
        }
        if(Session::get('nim') != null){
            return "nim";
        }
        return null;
    } 
}
//tambahkan lagi dibawah kalau mau helper baru
?>
