<?php

 // $article = array();;
 // $article["title"] = "use airplay";;
 // $article["description"] = "With AirPlay you can stream music";;
 // $article["link"] = "support.apple.com/en-us/HT1222";;
 // $article["guid"] = "http://support.apple.com/en-us/HT1222";;

// $article2 = array(
//     "title" => "If you can't send or receive messages on your iPhone",
//     "description" => "You might see an exclamation mark next to a message you try to send",
//     "link" => "support.apple.com/en-us/HT204065",
//     "guid" => "http://support.apple.com/en-us/HT204065"
//     );;

//var_dump($article);;
//var_dump($article2);;

//$wantedProperties = array("title", "description");

// function builHtmlTableFor($news, $wantedProperties){
//     $html = "<table> <tr>";
//         foreach ($wantedProperties as $property) {
//             $html .= "<td>" .  $news[$property] . "</td>";
//          };
//     $html .= "</tr> </table>";
//     return $html;
//     };

    //echo builHtmlTableFor($article, $wantedProperties);


 $xmlAsString = '<item><title>I&amp;#8217;m retiring after serving as 4chan&amp;#8217;s founder and administrator for more than 11 years,...</title><description>&lt;p&gt;I&amp;#8217;m retiring after serving as 4chan&amp;#8217;s founder and administrator for more than 11 years, from the age of 15. You can read the full announcement on the &lt;a href="https://www.4chan.org/news" title="4chan - News - THE NEXT CHAPTER" target="_blank"&gt;4chan News page&lt;/a&gt;.&lt;/p&gt; &lt;p&gt;—moot&lt;/p&gt;</description><link>http://blog.4chan.org/post/108740766397</link><guid>http://blog.4chan.org/post/108740766397</guid><pubDate>Wed, 21 Jan 2015 11:05:37 -0500</pubDate><category>4chan</category><category>moot</category><category>retirement</category><category>mootxico</category><category>goodnight sweet prince</category></item>';

$xmlAsObject = simplexml_load_string($xmlAsString);

var_dump($xmlAsObject);

$wantedProperties = array("title", "description");

foreach ($wantedProperties as $property) {
    echo "xxx=".$xmlAsObject->$property;# code...
}


?>