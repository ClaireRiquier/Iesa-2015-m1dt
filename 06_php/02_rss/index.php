<?php

 $article = array();;
 $article["title"] = "use airplay";;
 $article["description"] = "With AirPlay you can stream music";;
 $article["link"] = "support.apple.com/en-us/HT1222";;
 $article["guid"] = "http://support.apple.com/en-us/HT1222";;

// $article2 = array(
//     "title" => "If you can't send or receive messages on your iPhone",
//     "description" => "You might see an exclamation mark next to a message you try to send",
//     "link" => "support.apple.com/en-us/HT204065",
//     "guid" => "http://support.apple.com/en-us/HT204065"
//     );;

//var_dump($article);;
//var_dump($article2);;

$wantedProperties = array("title", "description");

function builHtmlTableFor($news, $wantedProperties){
    $html = "<table> <tr>";
        foreach ($wantedProperties as $property) {
            $html .= "<td>" .  $news[$property] . "</td>";
         };
    $html .= "</tr> </table>";
    return $html;
    };

    echo builHtmlTableFor($article, $wantedProperties);

?>