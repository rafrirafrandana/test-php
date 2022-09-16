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
       
        public $owner;

        public function computer_andi(){
            return " (Computer Andi -";
        }
        public function computer_bobi(){
            return " (Computer Bobi -";
        }

        protected $ipA = " -- With IP Andi is: 192.168.1.1 ";
        protected $ipB = " -- With IP Bobi is: 192.168.1.2 ";

        public function ipAndi(){
            return $this->ipA;
        }
        public function ipBobi(){
            return $this->ipB;
        }
       
    }

    $cpuA = new cpu();
    $cpuB = new cpu();
            
    $cpuA->name = "Andi";
    $cpuB->name = "Bobi";

    $cpuA->owner = "- Owner by Andi) ";
    $cpuB->owner = "- Owner by Bobi) ";

    echo "This CPU belongs to " . $cpuA->name . " with processor " . $cpuA->cpuMerk1() . $cpuA->computer_andi() . $cpuA->owner . $cpuA->ipAndi() . "<br>" . "This CPU belongs to " . $cpuB->name . " with processor " . $cpuA->cpuMerk2() . $cpuB->computer_bobi() . $cpuB->owner . $cpuB->ipBobi() . "<br><br>";

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

        public $owner;

        public function mouse_logitech(){
            return " (Mouse Logitech -";
        }
        public function mouse_razer(){
            return " (Mouse Razer -";
        }

        protected $colormouseA = " with color Black";
        protected $colormouseB = " with color White";

        public function colormouseAndi(){
            return $this->colormouseA;
        }
        public function colormouseBobi(){
            return $this->colormouseB;
        }
    }

    $mouseA = new mouse();
    $mouseB = new mouse();
            
    $mouseA->name = "Andi";
    $mouseB->name = "Bobi";

    $mouseA->owner = "- Owner by Andi)";
    $mouseB->owner = "- Owner by Bobi)";

    echo "This mouse belongs to " . $mouseA->name . " with merk mouse " . $mouseA->mouseMerk1() . $mouseA->mouse_logitech() . $mouseA->owner . $mouseA->colormouseAndi() . "<br>" . "This mouse belongs to " . $mouseB->name . " with merk mouse " . $mouseA->mouseMerk2() . $mouseB->mouse_razer() . $mouseB->owner . $mouseB->colormouseBobi() . "<br><br>";

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

        public $owner;

        public function keyboard_genius(){
            return " (Keyboard Genius -";
        }
        public function keyboard_razer(){
            return " (Keyboard Razer -";
        }

        protected $colorkeyboardA = " with color Black ";
        protected $colorkeyboardB = " with color Green ";

        public function colorkeyboardAndi(){
            return $this->colorkeyboardA;
        }
        public function colorkeyboardBobi(){
            return $this->colorkeyboardB;
        }
    }

    $keyboardA = new keyboard();
    $keyboardB = new keyboard();
            
    $keyboardA->name = "Andi";
    $keyboardB->name = "Bobi";

    $keyboardA->owner = "- Owner by Andi) ";
    $keyboardB->owner = "- Owner by Bobi) ";

    echo "This keyboard belongs to " . $keyboardA->name . " with merk keyboard " . $keyboardA->keyboardMerk1() . $keyboardA->keyboard_genius() . $keyboardA->owner . $keyboardA->colorkeyboardAndi() . "<br>" . "This keyboard belongs to " . $keyboardB->name . " with merk keyboard " . $keyboardA->keyboardMerk2() . $keyboardB->keyboard_razer() . $keyboardB->owner . $keyboardB->colorkeyboardBobi();
?>
