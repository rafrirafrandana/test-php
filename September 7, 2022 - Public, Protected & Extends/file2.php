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

        protected $fullcpuAndi = " This is CPU belongs to Andi with processor Intel i9 and with IP 192.168.1.1 <br>";
        protected $fullcpuBobi = " This is CPU belongs to Bobi with processor Apple M2 and with IP 192.168.1.2 <br>";

        public function showcpuAndi(){
            return $this->fullcpuAndi;
        }
        public function showcpuBobi(){
            return $this->fullcpuBobi;
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

        protected $fullmouseAndi = " This is mouse belongs to Andi with merk mouse Logitech color Black <br>";
        protected $fullmouseBobi = " This is mouse belongs to Bobi with merk mouse Razer color White <br>";

        public function showmouseAndi(){
            return $this->fullmouseAndi;
        }
        public function showmouseBobi(){
            return $this->fullmouseBobi;
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

        protected $fullkeyboardAndi = " This is keyboard belongs to Andi with merk keyboard Genius color Black <br>";
        protected $fullkeyboardBobi = " This is keyboard belongs to Bobi with merk keyboard Razer color Green <br>";

        public function showkeyboardAndi(){
            return $this->fullkeyboardAndi;
        }
        public function showkeyboardBobi(){
            return $this->fullkeyboardBobi;
        }

    }

    $keyboardA = new keyboard();
    $keyboardB = new keyboard();
            
    $keyboardA->name = "Andi";
    $keyboardB->name = "Bobi";

    $keyboardA->owner = "- Owner by Andi) ";
    $keyboardB->owner = "- Owner by Bobi) ";

    echo "This keyboard belongs to " . $keyboardA->name . " with merk keyboard " . $keyboardA->keyboardMerk1() . $keyboardA->keyboard_genius() . $keyboardA->owner . $keyboardA->colorkeyboardAndi() . "<br>" . "This keyboard belongs to " . $keyboardB->name . " with merk keyboard " . $keyboardA->keyboardMerk2() . $keyboardB->keyboard_razer() . $keyboardB->owner . $keyboardB->colorkeyboardBobi() . "<br><br>";

    //FULL
    class fullcpu extends cpu {
        public function showcpuAndi(){
            return $this->fullcpuAndi;
        }
        public function showcpuBobi(){
            return $this->fullcpuBobi;
        }
    }

    class fullmouse extends mouse {
        public function showmouseAndi(){
            return $this->fullmouseAndi;
        }
        public function showmouseBobi(){
            return $this->fullmouseBobi;
        }
    }

    class fullkeyboard extends keyboard {
        public function showkeyboardAndi(){
            return $this->fullkeyboardAndi;
        }
        public function showkeyboardBobi(){
            return $this->fullkeyboardBobi;
        }
    }

    $fullcpu = new fullcpu();
    $fullmouse = new fullmouse();
    $fullkeyboard = new fullkeyboard();
    

    echo "//Full Andi<br>" . $fullcpu->showcpuAndi() . $fullmouse->showmouseAndi() . $fullkeyboard->showkeyboardAndi() . "<br><br>";
    echo "//Full Bobi<br>" . $fullcpu->showcpubobi() . $fullmouse->showmouseBobi() . $fullkeyboard->showkeyboardBobi();

?>
