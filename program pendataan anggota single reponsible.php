<?php 

class Json{
	public static function from ($data){
		return json_encode($data);
	}
}

class UserRequest {
	protected static $rules = [
		'name' => 'string',
		'email' => 'string',
        'address' => 'string',


	];

	public static function validate($data){
		foreach ($data as $property => $type) {
			if (typeOf($data[$property]) !== $type) 
			throw new \Exception(message:"User  Property {$property} Must Be Of  Type {$type}");
		}
	}

}


Class User 
{
	public $name;
	public $email;
    public $address;

	public function __construct($data)
	{
		$this->name = $data['name'];
		$this->email = $data['email'];
        $this ->address = $data['address'];
	}

	// public function formatJson(){
	// 	return json_encode(['name' => $this->name, 'email' => $this->email]);
	// }

	
	public function validate($data){
		if (!isset($data['name'])) {
			
		}
		if (!isset($data['email'])) {
			
		}
        if (!isset($data['address'])) {
            
        }
	}

}

$data = [
    
    'name' => 'Hafizh Nauval Eka R',
    'email' => 'hafizhnaufaleka27@gmail.com',
    'address' => 'Brebes'
];

Route::get('/', function()  {
	$data = request()->query();

	UserRequest::validate($data);

	// $user = new User($data);
	// $user->validate($data);
	user = new User($data);

	// return $user->formatJson();
	return Json::from($user);
    $akun = new User($data);
    print_r(Json::from($akun));

    echo '<br><br>';
    print_r(Age::now($data));
});

 ?>
