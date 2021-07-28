1.	<?php 

class User {
    public $name;
    public $email;
    public $dob;

    public function __construct($data){
        $this -> name = $data['name'];
        $this -> email = $data['email'];
        $this -> dob = $data['dob'];
    }
}

class UserRequest {
    protected static $rules = [
        'name' => 'string',
        'email' => 'string',
        'dob' => 'string'   ///ini adalah date of birth yaitu tanggal lahir
    ];

    public static function validate($data) {
        foreach (static::$rules as $property => $type) {
            if (gettype($data[$property]) != $type) {
                throw new Exception("User Property {$property} Must be of Type {$type}");
            }
        }
    }
}

class Json {
    public static function from($data) {
        return json_encode($data);
    }
}



$data = [
    'name' => 'Hafizh Nauval Eka Rahmatullah',
    'email' => 'hafizhnaufaleka27@gmail.com',
    'dob' => '03.05.2001'
];

UserRequest::validate($data);
$akun = new User($data);
print_r(Json::from($akun));
echo '<br>';
echo ' Usia : 20 tahun 2 bulan 25 hari'
?>
