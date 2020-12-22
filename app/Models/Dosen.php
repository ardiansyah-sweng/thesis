<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
        'nipy'
    ];
	
    //Fungsi login untuk dosen
    public function loginFunctionDosen($id){
        if(!isset($id)){
            //Buat ngusir, bisa di hapus sebenarnya
            echo "hush";
            return redirect('/');
        }
        //Ambil datanya
        $db = DB::select('SELECT *FROM dosen WHERE nipy = ?',[$id]);
        if(empty($db)) {
            $array = array("null", $id, false, 'null');
            return $array;
        }
        $db_encode = json_encode($db, true);
        $db_decode = json_decode($db_encode, true);
        $namadsn = $db_decode[0]['nama'];
        $avatar = $db_decode[0]['avatar'];
        $array = array($namadsn, $id, true, $avatar);
        return $array;
    }
}
