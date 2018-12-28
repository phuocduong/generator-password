<?php
function randomPassword($length,$count, $character) {
 
    // $length - the length of the generated password
    // $count - number of passwords to be generated
    // $characters - types of characters to be used in the password
     
    // define variables used within the function    
        $symbols = array();
        $passwords = array();
        $used_symbols = '';
        $pass = '';
     
    // an array of different character types    
        $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
        $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols["numbers"] = '1234567890';
        $symbols["special_symbols"] = '!?~@#-_+<>[]{}';
     
        $characters = explode(",",$character); // get characters types to be used for the passsword
        foreach ($characters as $key=>$value) {
            $used_symbols .= $symbols[$value]; // build a string with all characters
        }
        $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
         
        for ($p = 0; $p < $count; $p++) {
            $pass = '';
            for ($i = 0; $i < $length; $i++) {
                $n = rand(0, $symbols_length); // get a random character from the string with all characters
                $pass .= $used_symbols[$n]; // add the character to the password string
            }
            $passwords[] = $pass;
        }
         
        return $passwords; // return the generated password
}

// generate one password using 5 upper and lower case characters
echo "<pre><br>Generate one password using 5 upper and lower case characters:<br>";
$pass = randomPassword(5,1,"lower_case,upper_case");
print_r ($pass);

// generate three passwords using 10 lower case characters and numbers
echo "<br>Generate three passwords using 10 lower case characters and numbers: <br>";
$pass =  randomPassword(10,3,"lower_case,numbers");
print_r ($pass);
 
// generate five passwords using 12 lower case and upper case characters, numbers and special symbols
echo "<br>Generate five passwords using 12 lower case and upper case characters, numbers and special symbols: <br>";
$pass =  randomPassword(12,5,"lower_case,upper_case,numbers,special_symbols");
print_r ($pass);

echo "</pre>";