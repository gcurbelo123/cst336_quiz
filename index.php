<?php
    $personality1 = $_POST['value1'];
    $personality2 = $_POST['value2'];
    $personality3 = $_POST['value3'];
    $personality4 = $_POST['value4'];
    $personality5 = $_POST['value5'];
    $personality6 = $_POST['value6'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>
            Overwatch Character
        </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "result">
            <?php if(isset($_POST['value6'])){
                $arr = array(
                    $choice1 = 0,
                    $choice2 = 0,
                    $choice3 = 0,
                    $choice4 = 0,
                    $choice5 = 0,
                    $choice6 = 0
                );
                $arr[$_POST['value1']]++;
                $arr[$_POST['value2']]++;
                $arr[$_POST['value3']]++;
                $arr[$_POST['value4']]++;
                $arr[$_POST['value5']]++;
                $arr[$_POST['value6']]++;
                
                $max = 0;
                for($i = 0; $i < 6; $i++){
                    if($arr[$i] > $max){
                        $max = $i;
                    }
                }
                if($max == 0){
                    echo '<img src = "./pics/1.jpg">';   
                    echo '<h1> You got D.Va! </h1>';
                }
                if($max == 1){
                    echo '<img src = "./pics/2.jpg">';
                    echo '<h1> You got Genji! </h1>';
                }
                if($max == 2){
                    echo '<img src = "./pics/3.jpg">';
                    echo '<h1> You got Tracer! </h1>';
                }
                if($max == 3){
                    echo '<img src = "./pics/4.jpg">';
                    echo '<h1> You got Zenyatta! </h1>';
                }
                if($max == 4){
                    echo '<img src = "./pics/5.jpg">';
                    echo '<h1> You got Soldier 76! </h1>';
                }
                if($max == 5){
                    echo '<img src = "./pics/6.jpg">';
                    echo '<h1> You got Sombra! </h1>';
                } 
            }
            else {
            ?>
        </div>
        <fieldset id = 'field'>
        <form action = 'index.php' method = 'post'>
            <?php if(!isset($_POST['value1']) && !isset($_POST['value2']) && !isset($_POST['value3']) && !isset($_POST['value4']) && !isset($_POST['value5']) && !isset($_POST['value6'])){ ?>
            Which would you rather use in a fight? </br>
            <div id = 'question'>
            <input type='radio' name='value1' value = '0'> A Giant Robot<br>
            <input type='radio' name='value1' value = '1'> A sword<br>
            <input type='radio' name='value1' value = '2'> Two pistols<br>
            <input type='radio' name='value1' value = '3'> Orbs of death<br>
            <input type='radio' name='value1' value = '4'> Assault Rifle<br>
            <input type='radio' name='value1' value = '5'> Submachine Guns<br>
            </div>
            </br> </br>
            <input type = 'submit' value = "Next"></br>
            <?php } ?>
            <?php if(isset($_POST['value1'])){ ?>
            Your teammate is injured, what do you do? </br>
            <div id = 'question'>
            <input type='radio' name='value3' value = '0'> Absorb incoming bullets<br>
            <input type='radio' name='value3' value = '1'> Reflect incoming bullets back at enemy<br>
            <input type='radio' name='value3' value = '2'> Take them away<br>
            <input type='radio' name='value3' value = '3'> Heal them and fight<br>
            <input type='radio' name='value3' value = '4'> Kill everything first then take care of them<br>
            <input type='radio' name='value3' value = '5'> Leave before you get hurt<br>
            </div>
            </br> </br>
            <input type = 'submit' value = "Next"></br>
            <?php } ?>
            <?php if(isset($_POST['value3'])){ ?>
            What's your favorite color? </br>
            <div id = 'question'>
            <input type='radio' name='value4' value = '0'> Pink<br>
            <input type='radio' name='value4' value = '1'> Green<br>
            <input type='radio' name='value4' value = '2'> Orange<br>
            <input type='radio' name='value4' value = '3'> Red<br>
            <input type='radio' name='value4' value = '4'> Blue<br>
            <input type='radio' name='value4' value = '5'> Purple<br>
            </div>
            </br> </br>
            <input type = 'submit' value = "Next"></br>
            <?php } ?>
            <?php if(isset($_POST['value4'])){ ?>
            What's your dream future career? </br>
            <div id = 'question'>
            <input type='radio' name='value5' value = '0'> Professional Gamer<br>
            <input type='radio' name='value5' value = '1'> Ninja<br>
            <input type='radio' name='value5' value = '2'> Pilot<br>
            <input type='radio' name='value5' value = '3'> Peace Advocate<br>
            <input type='radio' name='value5' value = '4'> Military<br>
            <input type='radio' name='value5' value = '5'> Software Engineer<br>
            </div>
            </br> </br>
            <input type = 'submit' value = "Next"></br>
            <?php } ?>
            <?php if(isset($_POST['value5'])){ ?>
            What's your favorite past time activity? </br>
            <div id = 'question'>
            <input type='checkbox' name='value2' value = '0'> Video Games<br>
            <input type='checkbox' name='value2' value = '1'> Parkour<br>
            <input type='checkbox' name='value2' value = '2'> Traveling<br>
            <input type='checkbox' name='value2' value = '3'> Meditating<br>
            <input type='checkbox' name='value2' value = '4'> Running<br>
            <input type='checkbox' name='value2' value = '5'> Coding<br>
            </div>
            </br> </br>
            <input type = 'submit' value = "Next"></br>
            <?php } ?>
            <?php if(isset($_POST['value2'])){ ?>
            Choose a number </br>
            <div id = 'question'>
            <select name = 'value6'>
                <option value = '0'>18</option>
                <option value = '1'>35</option>
                <option value = '2'>26</option>
                <option value = '3'>20</option>
                <option value = '4'>76</option>
                <option value = '5'>30</option>
            </select>
            </div>
            </br> </br>
            <input type = 'submit' value = "Become A Hero"></br>
            <?php } ?>
            </form></br>
        </fieldset>
        <?php } ?>
    </body>
</html>