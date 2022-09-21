<?php
class country {
    public $name, $capital_city, $official_language, $president_pm, $independence_day, $independence_from;

    public function detail() {
        return "
            ============================================<br>
            || Name of Country : $this->name <br>
            || Capital City : $this->capital_city <br>
            || Official Language : $this->official_language <br>
            || President / Prime Minister : $this->president_pm <br>
            || Independence Day : $this->independence_day <br>
            || Independence From : $this->independence_from <br>
            ============================================<br><br>
        ";
    }
}

$country1 = new country();
$country2 = new country();
$country3 = new country();
$country4 = new country();
$country5 = new country();

//COUNTRY 1
$country1->name = "Indonesia";
$country1->capital_city = "Jakarta";
$country1->official_language = "Bahasa Indonesia";
$country1->president_pm = "Joko Widodo";
$country1->independence_day = "August 17, 1945";
$country1->independence_from = "Netherlands and Japan";
echo $country1->detail();

//COUNTRY 2
$country2->name = "Malaysia";
$country2->capital_city = "Kuala Lumpur";
$country2->official_language = "Bahasa Melayu";
$country2->president_pm = "Ismail Sabri Yaakob";
$country2->independence_day = "August 31, 1957";
$country2->independence_from = "United Kingdom";
echo $country2->detail();

//COUNTRY 3
$country3->name = "Singapore";
$country3->capital_city = "Singapore";
$country3->official_language = "Bahasa Melayu, English, Tamil, & Chinesse";
$country3->president_pm = "Halimah Yacob";
$country3->independence_day = "August 9, 1965";
$country3->independence_from = "United Kingdom and Malaysia";
echo $country3->detail();

//COUNTRY 4
$country4->name = "Brunei Darussalam";
$country4->capital_city = "Bandar Seri Begawan";
$country4->official_language = "Bahasa Melayu";
$country4->president_pm = "Hassanal Bolkiah";
$country4->independence_day = "January 1, 1984";
$country4->independence_from = "United Kingdom";
echo $country4->detail();

//COUNTRY 5
$country5->name = "Philippines";
$country5->capital_city = "Manila";
$country5->official_language = "Filipino & English";
$country5->president_pm = "Bongbong Marcos";
$country5->independence_day = "July 4, 1946";
$country5->independence_from = "United States";
echo $country5->detail();
