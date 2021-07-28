<?php

class Pengguna
{
    public $nama;
    public $mail;
    public $dob;

    public function __construct($data)
    {
        $this->nama = $data['nama'];
        $this->mail = $data['mail'];
        $this->dob = $data['dob'];
    }
}
class UserReq
{
    protected static $rules = [
        'nama' => 'string',
        'mail' => 'string',
        'dob' => 'string'
    ];

    public static function validate($data){
        foreach (static::$rules as $property => $type){
            if (gettype($data[$property]) != $type){
                throw new \Exception("User property {$property} must be of type {$type}" );
            }
        }
    }
}

class Json{
    public static function from ($data){
        return json_encode($data);
    }
}

class Age{
    public static function now($data){
        $dob = new DateTime($data['dob']);
        $today = new Datetime(date('d.m.y'));
        return [
            'year' => $today->diff($dob)->y,
            'month' => $today->diff($dob)->m,
            'day' => $today->diff($dob)->d,
        ];
    }
}

$data = [
    'nama' => 'Elsera Aginza', 
    'mail' => 'elsera1900018187@webmail.uad.ac.id',
    'dob' => '01.11.01'
];

UserReq::validate($data);
$user = new Pengguna($data);
print_r(Json::from($user));
echo '<br><br>';
print_r(Age::now($data));
?> 