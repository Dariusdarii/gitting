<?php
//Prime minister
$yr = readline('Enter the year : ');
$arr = array("Jawaharlal Nehru" => range(1947, 1963), "Lal Bahdur Shastri" => range(1964, 1966), "Indira Gandhi" => range(1967, 1977), "Morarji Desai" => range(1978, 1979), "Indira Gandhi" => range(1980, 1983), "Rajiv Gandhi" => range(1984, 1989), "P.V.Narasimha Rao" => range(1991, 1996), "Atal Bihari Vajpayee" => range(1998, 2004), "Manmohan Singh" => range(2004, 2013), "Narendra Modi" => range(2014, 2020));

foreach($arr as $x=>$y )
{
    foreach($y as $a=>$b )
    {
        if ($b==$yr)
        echo ($x . ' was the prime minister in the year '.$yr);
    }
}