<?php
$countries = [
    [
        // ID страны
        'id' => 1,
        'name' => 'Italia'
    ],
    [
        'id' => 2,
        'name' => 'USA'
    ],
    [
        'id' => 3,
        'name' => 'Michigan'
    ]
];
function get_country($id){
    global $countries;
    for($i=0;$i<count($countries);$i++) {
        $country=$countries[$i];
        if ($country['id']==$id){
            return $country;
        }
    }
    return null;
}
print_r(get_country(2));
//2
$cities = [
    [
        // ID города
        'id' => 1,
        'name' => 'Milano',
        // ID Страны
        'country_id' => 1
    ],
    [
        'id' => 2,
        'name' => 'Flat Rock',
        'country_id' => 3
    ]
];
function get_country_city($id){
    global $cities;
    global $countries;
    $city=null;
    for($i = 0; $i < count($cities); $i++) {
        if($cities[$i]['id'] == $id) {
            $country_id = $cities[$i]['country_id'];
            break;
        }
    }

    for($i = 0; $i < count($countries); $i++){
        if($countries[$i]['id'] == $country_id) {
            return $countries[$i];
        }
    }

    return null;
}


print_r(get_country_city(2));

//3
function get_cities_country($country_id){
    global $cities;
    $cit=null;
    for($i=0;$i<count($cities);$i++){
        $cit=$cities[$i];
        if($cit['country_id']==$country_id){
            return $cit['name'];
        }
    }
    return null;
}
print_r(get_cities_country(3));
//4
function get_city($id){
    global $cities;
    for($i=0;$i<count($cities);$i++){
        $city=$cities[$i];
        if($city['id']==$id){
            return $city;
        }
    }
    return null;
}
print_r(get_city(2));
//5
define('GENDER_MALE', 'male');
define('GENDER_FEMALE', 'female');
$genders = [
    GENDER_MALE,
    GENDER_FEMALE
];
$users = [
    [
        // ID пользователя
        'id' => 1,
        'first_name' => 'Валентин',
        'last_name' => 'Радужный',
        'second_name' => 'Игоревич',
        'login' => 'valentin',
        'password' => '78vrE0871',
        'gender' => GENDER_MALE,
        'addition_info' => null,
        'birthday' => '14.05.1990',
    ],
    [
        'id' => 2,
        'first_name' => 'Олег',
        'last_name' => 'Мозговой',
        'second_name' => 'Дмитриевич',
        'login' => 'oleg',
        'password' => 'A87s08w7',
        'gender' => GENDER_MALE,
        'addition_info' => 'Машины - моя стихия',
        'birthday' => '10.07.1991',
    ],
    [
        'id' => 3,
        'first_name' => 'Виктория',
        'last_name' => 'Рыбкина',
        'second_name' => 'Александровна',
        'login' => 'prosto_vika',
        'password' => '9Wd803d',
        'gender' => GENDER_FEMALE,
        'addition_info' => 'Я феминистка',
        'birthday' => '23.07.1989',
    ],
];
function get_user($id){
    global $users;
    $us=null;
    for($i=0;$i<count($users);$i++){
        $us=$users[$i];
        if($us['id']==$id) {
            return $us;
        }
    }
    return null;
}
$a=1;
if(get_user($a)){
    print_r(get_user($a));
}
else{
    echo 'помилка';
}
//6
function create_user_full_name($first_name, $last_name, $second_name){
    $first_name.=$last_name;
    $first_name.=$second_name;
    return $first_name;
}
print_r(create_user_full_name('Илья ','Oлегович ','Козинец '));
//7
function get_user_full_name($id){
    global $users;
    $us=null;
    $a=null;
    for($i=0;$i<count($users);$i++){
        $us=$users[$i];
        if($us['id']==$id) {

            create_user_full_name($us['first_name'],$us['last_name'],$us['second_name']);
            return create_user_full_name($us['first_name'],$us['last_name'],$us['second_name']);
        }
    }
    return null;
}
print_r(get_user_full_name(2));
//8
define('CAR_CLASS_SEDAN', 'sedan');
$classes_cars = [
    CAR_CLASS_SEDAN,
];
$cars = [
    [
        // ID машины
        'id' => 1,
        'name' => 'Alfa Romeo MiTo',
        'company' => 'Alfa Romeo',
        'city_id' => 1,
        'class' => CAR_CLASS_SEDAN,
    ],
    [
        'id' => 2,
        'name' => 'Ford Mustang',
        'company' => 'Ford',
        'city_id' => 2,
        'class' => CAR_CLASS_SEDAN,
    ],
];
function get_car($id){
    global $cars;
    $vr=null;
    for($i=0;$i<count($cars);$i++){
        $vr=$cars[$i];
        if($vr['id']==$id){
            return $vr;
        }
    }
    return null;
}
print_r(get_car(1));
//9
function get_users($ids){
    global $users;
    $us=null;
    $ff=null;
    $array=null;
    for($i=0;$i<count($users);$i++){
        $us=$users[$i];
        for($j=0;$j<count($ids);$j++){
            $ff=$ids[$j];
            if($us['id']==$ff){
                $array[]=$us;
            }
        }
    }
    return $array;
}
$mm=['1','2'];
print_r(get_users($mm));
//10
//11
function change_user_password($user_id, $old_password, $new_password){
    global $users;
    $us=null;
    for($i=0;$i<count($users);$i++){
        $us=$users[$i];
        if($us['id']==$user_id) {
            if($us['password']==$old_password){
                $users[$i]['password']=$new_password;
            }
            return $users[$i];
        }
    }
    return null;
};
print_r(change_user_password(3,'9Wd803d','9379992'));
//12
$users_cars = [
    [
        // ID записи: <пользователь-машина>
        'id' => 1,
        'user_id' => 2,
        'car_id' => 1
    ],
    [
        'id' => 2,
        'user_id' => 3,
        'car_id' => 1
    ],
    [
        'id' => 3,
        'user_id' => 3,
        'car_id' => 2
    ],
    // И да, у феминистки 2 машины - это не ошибка
];
function get_cars_user($user_id){
    global $users_cars;
    global $cars;
    $us=null;
    $a=null;
    $m=null;
    for($i=0;$i<count($users_cars);$i++){
        $us=$users_cars[$i];
        if($us['user_id']==$user_id) {
            $m=$cars;
            $m['id']=$us['car_id'];

        }


    }
    return $m;

}
print_r(get_cars_user(3));