<?php
    //CPU
    class cpu {
        var $processor;
        var $ram;
        var $vga_card;
        var $harddisk;
        var $motherboard;
        var $power_supply;
        var $cooling_fan;
        var $casing_cpu;
                
        function cpuMerk1(){
            return "Intel i9";
        }
        function cpuMerk2(){
            return "Apple M2";
        }
    }

    $cpuA = new cpu();
    $cpuB = new cpu();
            
    $cpuA->name = "Andi";
    $cpuB->name = "Bobi";

    echo "This CPU belongs to " . $cpuA->name . " with processor " . $cpuA->cpuMerk1() . "<br>" . "This CPU belongs to " . $cpuB->name . " with processor " . $cpuA->cpuMerk2() . "<br><br>";

    //MOUSE
    class mouse {
        var $optical;
        var $connection_cable;
        var $x_axis;
        var $y_axis;
        var $rubber_ball;
                
        function mouseMerk1(){
            return "Logitech";
        }
        function mouseMerk2(){
            return "Razer";
        }
    }

    $mouseA = new mouse();
    $mouseB = new mouse();
            
    $mouseA->name = "Andi";
    $mouseB->name = "Bobi";

    echo "This mouse belongs to " . $mouseA->name . " with merk mouse " . $mouseA->mouseMerk1() . "<br>" . "This mouse belongs to " . $mouseB->name . " with merk mouse " . $mouseA->mouseMerk2() . "<br><br>";

    //KEYBOARD
    class keyboard {
        var $general_typing_area;
        var $function_keys;
        var $legacy_keys;
        var $numeric_keys;
        var $indicator_lamp;
                
        function keyboardMerk1(){
            return "Genius";
        }
        function keyboardMerk2(){
            return "Razer";
        }
    }

    $keyboardA = new keyboard();
    $keyboardB = new keyboard();
            
    $keyboardA->name = "Andi";
    $keyboardB->name = "Bobi";

    echo "This keyboard belongs to " . $keyboardA->name . " with merk keyboard " . $keyboardA->keyboardMerk1() . "<br>" . "This keyboard belongs to " . $keyboardB->name . " with merk keyboard " . $keyboardA->keyboardMerk2();
?>
