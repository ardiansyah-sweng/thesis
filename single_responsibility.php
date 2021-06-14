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
            'year' => $today -> diff($dob) -> y,
            'month' => $today -> diff($dob) -> m,
            'day' => $today -> diff($dob) -> d,
        ];
    }
}

$data = [
    'name' => 'Edo Kurniawan',
    'email' => 'edok7179@gmail.com',
    'dob' => '18.03.2001'
];

UserRequest::validate($data);
$akun = new User($data);
print_r(Json::from($akun));
echo '<br><br>';
print_r(Age::now($data));
?>