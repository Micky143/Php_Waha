<?php
$search1=preg_match_all("/cow/", "There is a white cow there is a brown cow");
echo "Result of search=".$search1."<br>";
$search2=preg_match_all("/^cow/", "Dave was a cowhand");
echo "Result of search=".$search2."<br>";
$search3=preg_match_all("/cow$/", "Dave cow was a handcow");
echo "Result of search=".$search3."<br>";
$search4=preg_match("/ca.r.ts/", "carrots");
echo "Result of search=".$search4."<br>";
$search5=preg_match("/c.t/", "bat");
echo "Result of search=".$search5."<br>";
$search6=preg_match("/c.t/", "cut");
echo "Result of search=".$search6."<br>";
$search7=preg_match("/c[aeiou]t/","cut");
echo "Result of search=".$search7."<br>";

?>