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
    <form action="">
        <!-- The "ID" tag can ce used to hook from JS/
         can also be used to syle in CSS/ BAsically a refrence/
         Even linking it up with a label as I proceed.
         Also note that the ID is a unique Identifier -->
         <!-- the name taf thet will be adding here ca be used for server 
         side processing like calling it from PHP and shit like that 
         Name tag is also usefull or grouping tugetha radio buttons and also enables that 
         you only select one of them at a time, for exampo.. somewhere below -->
        <!-- also discovered the shortcut (input:radio) which translates to (<input type="radio" name="" id="">)
         very nais indeed -->
        <!-- Also discovered that "value" attribute is what is submitted when the radio group is actioned -->
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username" required placeholder="Enter Username Here">
        <br><br>
        <label for="email">Enter Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter Email Here">
        <br><br>
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter Password Here">
        
        <div>
        <?php
        #call me genius coz i've just thought this one through...Yeabooo
        #$genders = array('Male','Female','Other','Rather_Not_Say');
        /*
            Less efficient
            $genderValues = count($genders);
            $genderValue = 0;
            while ($genderValue <= ($genderValues - 1) ) 
                {
                echo "<input type='radio' name='gender' value='. $genders[$genderValue] .'> $genders[$genderValue] ";
                $genderValue++;
                }
        */
        #This is the newest one...a For-each loop. convenience
        #AKA more efficient
        // foreach ($genders as $key => $value) {
        //     echo  "<input type='radio' name='gender' value='.$value.' id='.$value.'>";
        //     echo "<label for='.$value.'> $value</label>";
        //     echo "<br>";
        // }
        ?>
        </div>
        <br>
        <div>
        <p>Please select your age</p>
        <input type="radio" name="age" value="0-25" id="option-1" required>
        <label for="option-1">0-25</label>
        <input type="radio" name="age" value="26-50" id="option-2" required>
        <label for="option-2">26-50</label>
        <input type="radio" name="age" value="51+" id="option-3" required>
        <label for="option-3">51+</label>
        </div>
        <br><br>
        
        <div>
            <label for="question">Security Question</label>
            <select name="question" id="question" required>
                <option value="q1">What is your deepest desire</option>
                <option value="q2">Whats your take on communism?</option>
                <option value="q3">What is your best ever security question</option>
            </select>

            <br><br>

            <label for="answer">Security answer</label>
            <input type="text" name="answer" id="answer" required>

            <br><br>
        </div>

        <div>
            <label for="bio">Your bio:</label>
            <br>
            <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Enter your bio..." required></textarea>
        </div>
        <br><br>
        <div>
            <input type="submit" value="submit the form">
        </div>

    </form>
</body>
</html>