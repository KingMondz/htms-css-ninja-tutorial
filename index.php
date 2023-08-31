<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Forms
    </title>
</head>
<body>
    <div>
        <a href="index1.php">
        <button href="index1.php">
            Index1
        </button>
        </a>
    </div>
    <h1>Html forms</h1>
    <form>
        <!-- The "ID" tag can ce used to hook from JS/
         can also be used to syle in CSS/ BAsically a refrence/
         Even linking it up with a label as I proceed
         Also note that the ID is a unique Identifier -->
         <!-- the name taf thet will be adding here ca be used for server 
         side processing like calling it from PHP and shit like that 
        NAme tag is also usefull or grouping tugetha radio buttons and also enables that 
        you only select one of them at a time, for exampo.. somewhere below -->
        <!-- also discovered the shortcut (input:radio) which translates to (<input type="radio" name="" id="">)
            very nais indeed-->
        <!-- Also discovered that "value" attribute is what is submitted when the radio group is actioned -->
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username">
        <br><br>
        <label for="email">Enter Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password">
        
        <div>
        <?php
        #call me genius coz i've just thought this one through...Yeabooo
        $genders = array('Male','Female','Other','Rather_Not_Say');
        /*
            $genderValues = count($genders);
            $genderValue = 0;
            while ($genderValue <= ($genderValues - 1) ) 
                {
                echo "<input type='radio' name='gender' value='. $genders[$genderValue] .'> $genders[$genderValue] ";
                $genderValue++;
                }
        */
        #This is the newest one...a For-each loop. convenience
        foreach ($genders as $key => $value) {
            echo  "<input type='radio' name='gender' value='.$value.'> $value";
            echo "<br>";
        }
        ?>
        </div>

    </form>
</body>
</html>