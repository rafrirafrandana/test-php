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
                
        function cpuInput($processor){
            return "Hello Andi & Bobi!";
        }
    }

    $cpuA = new cpu();
    $cpuB = new cpu();
            
    $cpuA->name = "Andi";
    $cpuB->name = "Bobi";

    echo $cpuA->name . "<br>" . $cpuB->name;
?>
