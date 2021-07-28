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
            'Tahun' => $today->diff($dob)->y,
            'Bulan' => $today->diff($dob)->m,
            'Hari' => $today->diff($dob)->d,
        ];
    }
}

$data = [
    'nama' => 'Sendy_Apriatna', 
    'email' => 'sendy19000285@webmail.uad.ac.id',
    'dob' => '20.04.2001'
];

UserRequest::validate($data);
$user = new User($data);
print_r(Json::from($user));
echo '<br>';
echo "Usia : " . Age::now($data)['Tahun'] . " Tahun " . Age::now($data)['Bulan'] . " Bulan " . Age::now($data)['Hari'] . " Hari ";