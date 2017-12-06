<?php
/*
	RSS Extractor and Displayer
	(c) 2007  Scriptol.com - Licence Mozilla 1.1.
	rsslib.php
	
        heavily modified by Linda Newman, University of Cincinnati, Nov. 2013
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

function RSS_RetrieveStringPos($target, $source, $start)
{
        $imagepos = strpos($target, $source, $start);
        if ($imagepos === false)
         {
           $imagepos = "not found";
         }
         return $imagepos;

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

	$page = "<div style=\"margin-left:0px;\">";

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
          
/*now look for div with image */
          $pos1 = RSS_RetrieveStringPos($encoded, "<div id=\"attachment", 0);
          if ($pos1 !== "not found")
            {
            $pos2 = RSS_RetrieveStringPos($encoded, "<img class=", $pos1);
			$pos6 = RSS_RetrieveStringPos($encoded, "<img src=", $pos1);
              if (($pos2 !== "not found")  || ($pos6 !== "not found"))
              {
               $pos3 = RSS_RetrieveStringPos($encoded, "</div>", $pos1);
               $imagestr = substr($encoded, $pos1, ($pos3+6)-$pos1);
                
              /*now remove imagestr from encoded*/

              $encoded1 = substr($encoded, 0, $pos1);
              $encoded2 = substr($encoded,strlen($imagestr), strlen($encoded)-strlen($imagestr));
	      $encoded = $encoded1 . $encoded2;

               /*now look for Style statement after div in imagestr and replace*/
               $posWPStyle = RSS_RetrieveStringPos($imagestr, "style=\"", 0);
               if ($posWPStyle !== "not found")
                 {
                 $posWPStyle2 = RSS_RetrieveStringPos($imagestr, "\"", $posWPStyle+7);
                   if ($posWPStyle2 !== "not found")
                    {
                     $imagestr1 = substr($imagestr, 0, $posWPStyle);
                     $imagestr2 = substr($imagestr, $posWPStyle2+1, strlen($imagestr)-($posWPStyle2+1));
	             $imagestr = $imagestr1 . $imagestr2;
                    } 
                  }


               /*now look for WPClass statement in imagestr and replace*/
               
               $posWPClass = RSS_RetrieveStringPos($imagestr, "class=\"wp", 0);
               if ($posWPClass !== "not found")
                 {
                 $posWPClass2 = RSS_RetrieveStringPos($imagestr, "\"", $posWPClass+9);
                   if ($posWPClass2 !== "not found")
                    {
                     $imagestr1 = substr($imagestr, 0, $posWPClass);
                     $imagestr2 = substr($imagestr, $posWPClass2+1, strlen($imagestr)-($posWPClass2+1));
	             $imagestr = $imagestr1 . "style=\"border: 1px solid #ced8df;background: #F6F6F6;line-height: 18px;margin-bottom: 20px;width: 185px; max-width: 185px !important;padding: 0px;text-align: center; display: inline;float: left;\"" . $imagestr2;
                    } 
                  }
               
               /*now look for WPclass statement in caption and replace*/
               $posWPCaption = RSS_RetrieveStringPos($imagestr, "class=\"wp-caption-text\"", 0);
               if ($posWPCaption !== "not found")
                 {
                     $imagestr1 = substr($imagestr, 0, $posWPCaption);
                     $imagestr2 = substr($imagestr, $posWPCaption+23, strlen($imagestr)-($posWPCaption+23));
	             $imagestr = $imagestr1 . "style=\"color: #888;font-size: 12px;margin: 3px;padding: 0px;\"" . $imagestr2;
                    } 
                  
               /*now look for width of image itself and adjust width and height if needed*/
               $posImageWidth = RSS_RetrieveStringPos($imagestr, "width=\"", $pos2);
               if ($posImageWidth !== "not found")
                 {
                  $posImageWidth2 = RSS_RetrieveStringPos($imagestr, "\"", $posImageWidth+7);
                    if ($posImageWidth2 !== "not found")
                      {
                       $imageWidth = substr($imagestr,$posImageWidth+7,$posImageWidth2-$posImageWidth-7);
                       if ($imageWidth > 185)                
                         {
                          $posImageHeight = RSS_RetrieveStringPos($imagestr, "height=\"", $pos2);
                            if ($posImageHeight !== "not found")
                              {
                               $posImageHeight2 = RSS_RetrieveStringPos($imagestr, "\"", $posImageHeight+8);
                                 if ($posImageHeight2 !== "not found")
                                  {
                                    $imageHeight = substr($imagestr,$posImageHeight+8,$posImageHeight2-$posImageHeight-8);
                                    $imageHeightNew = round((185 / $imageWidth) * $imageHeight);
                                    $imagestr1 = substr($imagestr, 0, $posImageWidth);
                                    $imagestr2 = substr($imagestr, $posImageWidth2+1, strlen($imagestr)-$posImageWidth2-1);
                                    $imagestr = $imagestr1 . "width=\"185\"" . $imagestr2;
                                    $imagestr1 = substr($imagestr, 0, $posImageHeight);
                                    $imagestr2 = substr($imagestr, $posImageHeight2+1, strlen($imagestr)-$posImageHeight2-1);
                                    $imagestr = $imagestr1 . "height=\"" . $imageHeightNew . "\"" . $imagestr2;
                     } 
                   }       
                 }
                }
               }
   
               $page .= $imagestr;


             } 
           }

        /*now get rid of extra paragraph breaks*/
        $posFour = RSS_RetrieveStringPos($encoded, "<p>&nbsp;</p>", 0);
        if ($posFour !== "not found")
         {
		   $encoded1 = substr($encoded, 0, $posFour);
		   $encoded2 = substr($encoded, $posFour+13, strlen($encoded)-($posFour-13));
		   $encoded = $encoded1 . $encoded2;
		 }
         /*now get rid of more than one paragraph*/
        $pos5 = RSS_RetrieveStringPos($encoded, "</p>", 0);
        if ($pos5 !== "not found")
           {
           $encoded = substr($encoded, 0, $pos5+4);
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
