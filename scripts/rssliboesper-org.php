<?php
/*
	RSS Extractor and Displayer
	(c) 2007  Scriptol.com - Licence Mozilla 1.1.
	rsslib.php
	
	Requirements:
	- PHP 5.
	- A RSS feed.
	
	Using the library:
	Insert this code into the page that displays the RSS feed:
	
	<?php
	require_once("/mainul/ 09/feeds/rsslib.php");
	echo RSS_Display("http://www.xul.fr/rss.xml", 25);
	?>
	
*/
ini_set("display_errors","");
ERROR_REPORTING(E_ALL);

$RSS_Content = array();

function RSS_Tags($item, $type)
{
		$y = array();
		$tnl = $item->getElementsByTagName("title");
		$tnl = $tnl->item(0);
		$title = $tnl->firstChild->data;

		$tnl = $item->getElementsByTagName("link");
		$tnl = $tnl->item(0);
		$link = $tnl->firstChild->data;

		$tnl = $item->getElementsByTagName("description");
		$tnl = $tnl->item(0);
		$description = $tnl->firstChild->data;

		$tnl = $item->getElementsByTagName("encoded");
		$tnl = $tnl->item(0);
		$encoded = $tnl->firstChild->data;

		$y["title"] = $title;
		$y["link"] = $link;
		$y["description"] = $description;
		$y["type"] = $type;
        $y["encoded"] = $encoded;
		
		return $y;
}


function RSS_Channel($channel)
{
	global $RSS_Content;

	$items = $channel->getElementsByTagName("item");
	
	// Processing channel
	
	$y = RSS_Tags($channel, 0);		// get description of channel, type 0
	array_push($RSS_Content, $y);
	
	// Processing articles
	
	foreach($items as $item)
	{
		$y = RSS_Tags($item, 1);	// get description of article, type 1
		array_push($RSS_Content, $y);
	}
}

function RSS_Retrieve($url)
{
	global $RSS_Content;

	$doc  = new DOMDocument();
	$doc->load($url);

	$channels = $doc->getElementsByTagName("channel");
	
	$RSS_Content = array();
	
	foreach($channels as $channel)
	{
		 RSS_Channel($channel);
	}
	
}


function RSS_RetrieveLinks($url)
{
	global $RSS_Content;

	$doc  = new DOMDocument();
	$doc->load($url);

	$channels = $doc->getElementsByTagName("channel");
	
	$RSS_Content = array();
	
	foreach($channels as $channel)
	{
		$items = $channel->getElementsByTagName("item");
		foreach($items as $item)
		{
			$y = RSS_Tags($item, 1);	// get description of article, type 1
			array_push($RSS_Content, $y);
		}
		 
	}

}


function RSS_Links($url, $size)
{
	global $RSS_Content;

	$page = "<div style=\"margin-left:-20px;\">";

	RSS_RetrieveLinks($url);
	if($size > 0)
		$recents = array_slice($RSS_Content, 0, $size);

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0) continue;
		$title = $article["title"];
		$link = $article["link"];
		$description = $article["description"];
		$description = substr($description, 0, 75);
		$encoded = $article["encoded"];
		/*now look for 3rd end of paragraph*/
        $pos = strpos($encoded, "</p>");
		if ($pos !=0)
		  {
			  $pos = strpos($encoded, "</p>", $pos+4);
			  if ($pos !=0)
			    {
					$pos = strpos($encoded, "</p>", $pos+4);
				}
		  }
			  	
         /*alternatively, look for phrase beginnign with Click*/
		/*$pos = strpos($encoded, "<p>Click");*/
        if ($pos != 0)
         {
		   $encoded = substr($encoded, 0, $pos);
		 }
        /*now get rid of extra paragraph breaks*/
        $pos = strpos($encoded, "<p>&nbsp;</p>");
        if ($pos != 0)
         {
		   $encoded1 = substr($encoded, 0, $pos);
		   $encoded2 = substr($encoded, $pos+13, strlen($encoded)-($pos-13));
		   $encoded = $encoded1 . $encoded2;
		 }
		
		$ellipses = "[&#8230;]";
		if($encoded != false)
		{
			$page .= "$encoded\n<a href=\"$link\">read more</a>";
		}
		else
		 {
			 $page .= "no content";
		 }
	}
    $page .="</div>";
	$page .="\n";

	return $page;
	
}


function RSS_Display($url, $size)
{
	global $RSS_Content;

	$opened = false;
	$page = "";

	RSS_Retrieve($url);
	if($size > 0)
		$recents = array_slice($RSS_Content, 0, $size);

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0)
		{
			if($opened == true)
			{
				$page .="</ul>\n";
				$opened = false;
			}
			$page .="<b>";
		}
		else
		{
			if($opened == false) 
			{
				$page .= "<ul>\n";
				$opened = true;
			}
		}
		$title = $article["title"];
		$link = $article["link"];
		$description = $article["description"];
		$page .= "<p><a href=\"$link\">$title</a>";
		if($description != false)
		{
			$page .= "<br>$description";
		}
		$page .= "</p>\n";			
		
		if($type==0)
		{
			$page .="</b><br />";
		}

	}

	if($opened == true)
	{	
		$page .="</ul>\n";
	}
	return $page."\n";
}

?>
