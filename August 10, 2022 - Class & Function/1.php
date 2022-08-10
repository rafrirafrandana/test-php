<?php
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

    echo "This computer belongs to " . $cpuA->name . " with processor " . $cpuA->cpuMerk1() . "<br>" . "This computer belongs to " . $cpuB->name . " with processor " . $cpuA->cpuMerk2();
?>
