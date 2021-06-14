<?php 
class Json {
    public static public function from($data) {
        return json_encode($data);
    }
}

class UserRequest {
    protected static $rules = [
        'name' => 'string'
        'email' => 'string'
        'dob' => 'string'   //ini adalah date of birth yaitu tanggal lahir
    ];

    public static function validation($data) {
        foreach (static:$rules as $property => $type) {
            if (gettype($data[$property]) != $type) {
                throw new Exception("User Property {$property} Must be of Type {$type}");
            }
        }
    }
}

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
    'nama' => 'Sendy Apriatna',
    'email' => 'sendy1900018205@webmail.uad.ac.id',
    'dob' => '20.04.2001'
];

UserRequest::validation($data);
$akun = new User($data);
print_r(Json::from($akun));
echo '<br><br>'
print_r(Age::now($data));
?>