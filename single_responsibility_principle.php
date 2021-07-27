  
<?php 

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

class Age {
    public static function now ($data){
        $dob = new DateTime($data['dob']);
        $today = new DateTime(date('d.m.y'));
        return [
            'Tahun' => $today -> diff($dob) -> y,
            'Bulan' => $today -> diff($dob) -> m,
            'Hari' => $today -> diff($dob) -> d,
        ];
    }
}

$data = [
    'name' => 'Ikhsan Aditya Nuur Qodri',
    'email' => 'ikhsanaditya33@gmail.com',
    'dob' => '06.10.2000'
];

UserRequest::validate($data);
$akun = new User($data);
print_r(Json::from($akun));
echo '<br><br>';
print_r(Age::now($data));
?>