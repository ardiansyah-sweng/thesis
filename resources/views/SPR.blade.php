<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;

// use Illuminate\Http\Resources\json;

$data = 
[
    [
        'name' => 'Teguh',
        'email' => 'teguhbayu52@gmail.com',
        'Dob' => '29.9.2001'
    ],
    [
        'name' => 'Luthfi',
        'email' => 'luthfi123@gmail.com',
        'Dob' => '1.8.2007'
    ],
    [
        'name' => 'Septia',
        'email' => 'septia12@gmail.com',
        'Dob' => '11.6.2013'
    ],
    [
        'name' => 'Hafidz',
        'email' => 'hafidz2@gmail.com',
        'Dob' => '14.9.2016'
    ]
];

class json
{
    public static function from($data)
    {
        return json_encode($data);
    }
}

class UserRequest
{
    protected static $rules =
    [
        'name' => 'string',
        'email' => 'string',
        'Dob' => 'string'
    ];
    public static function validate($data)
    {
        foreach(static::$rules as $property => $type)
        {
            if (gettype($data[$property]) != $type)
            {
                throw new \Exception("User property {$property} Must Be ofType {$type}");
            }
        }
    }
}

class user
{
    public $name, $email, $Dob;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->Dob = $data['Dob'];
    }

    public function validate($data)
    {
        if(!isset($data['name']))
        {
            throw new \Exception("Bad request, User requires a name"); 
        }
        if(!isset($data['email']))
        {
            throw new \Exception("Bad request, User email required"); 
        }
        if(!isset($data['Dob']))
        {
            throw new \Exception("Bad request, User Date of Birthday required"); 
        }
    }
}


class Age
{
    public static function now($data)
    {
        $Dob = new DateTime($data['Dob']);
        $today = new DateTime(date('d.m.y'));
        return
        [
            'year' => $today -> diff($Dob) -> y,
            'month' => $today -> diff($Dob) -> m,
            'day' => $today -> diff($Dob) -> d
        ];
    }
}
Route::get('/', function(){
    $data = request()->query();

    return $data;
    $user = new User($data);
    $user->validate($data);
    print Json::from($data);
    print (Age::now($data));
})


?>