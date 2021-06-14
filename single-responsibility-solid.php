<?php
class User
{
    public $nama;
    public $email;
    public $dob;

    public function __construct($data)
    {
        $this->nama = $data['nama'];
        $this->email = $data['email'];
        $this->dob = $data['dob'];
    }
}

class UserRequest
{
    protected static $rules = [
        'nama' => 'string',
        'email' => 'string',
        'dob' => 'string'
    ];

    public static function validate($data)
    {
        foreach (static::$rules as $property => $type) {
            if (gettype($data[$property]) != $type) {
                throw new \Exception("User property {$property} must be of type {$type}");
            }
        }
    }
}

class Json
{
    public static function from($data)
    {
        return json_encode($data);
    }
}

class Age
{
    public static function now($data)
    {
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
    'nama' => 'Rafa',
    'email' => 'rafa1900018087@webmail.uad.ac.id',
    'dob' => '09.03.2000'
];

UserRequest::validate($data);
$user = new User($data);
print_r(Json::from($user));
echo '<br>';
print_r(Age::now($data));