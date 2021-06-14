<?php
$data = [
    'nama' => 'Zakiah', 
    'email' => 'zakiah@uad.ac.id',
    'dob' => '23.7.1990'
];
class Json{
    public static function from($data){
        return json_encode($data);
    }
}

class UserRequest{
    protected static $rules=[
        'name' = 'string',
        'email' = 'string',
        'date'='',
    ];

    public static validate($data){
        foreach($data as $property=>$type){
            if(typeOf($data[$property])!==$type){
                throw new \Exception("User Property {$property} Must Be Of Type {$type}");
            }
        }
    }
}

class User{
    public $name;
    public $email;
    public $dob;

    public function __construct($data){
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->dob = $data['dob'];
    }

    public function validate($data){
        if(!isset($data['name'])){
            throw new \Exception("Bad Request, User Requires A Name");
        }
        if(!isset($data['email'])){
            throw new \Exception("Bad Request, User Email Required");
        }
        if(!isset($data['dob'])){
            throw new \Exception("Bad Request, User Requires A Date of Birth");
        }
    }
}

Route::get('/', function(){
    $data = request()->query();

    return $data;
    $user = new User($data);
    $user->validate($data);
    return Json::from($data);
})
?>