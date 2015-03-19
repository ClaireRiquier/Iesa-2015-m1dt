<?php

$article = array();;
$article["title"] = "use airplay";;
$article["description"] = "With AirPlay you can stream music";;
$article["link"] = "support.apple.com/en-us/HT1222";;
$article["guid"] = "http://support.apple.com/en-us/HT1222";;

$article2 = array(
    "title" => "If you can't send or receive messages on your iPhone",
    "description" => "You might see an exclamation mark next to a message you try to send",
    "link" => "support.apple.com/en-us/HT204065",
    "guid" => "http://support.apple.com/en-us/HT204065"
    );;

var_dump($article);;
var_dump($article2);;

function affiche($news){
    return "<ul> <li>" . $news["title"] . "</li> <li>" . $news["description"] . "</li><li>" . $news["link"] . "</li><li>" . $news["guid"] . "</li> </ul>";;
}

echo affiche($article);;
?>
