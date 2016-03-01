<?php
/*
Find movies:
Search all *.txt files inside this folder and return results
-v007 :added cbr/cbz/pdf search

*/

		ECHO '
			<form action="" method="get">
			  search text: <input type="text" name="s"><br>
			  <select name="sub_search">
				<option value="movies" selected>movies (default)</option>
				<option value="iso">ISO</option>
				<option value="cbr">CBR comics (NO pdf)</option>
				<option value="pdf">Docs eg PDF,Doc,PPT,xls,cbr,...</option>
				<option value="all">all</option>

			</select>
			<input type="submit" value="Submit">
			</form>		
		';	
		
		
$arr_movies=array(".avi",".mpg",".mpeg",".srt",".mp4",".flv",".wmv",".divx",".mkv");
$arr_iso=array(".iso",".img");	
$arr_cbr=array(".cbr",".cbz");
$arr_pdf_cbr=array(".cbr",".cbz",".pdf",".chm",".doc",".ppt",".xls");	
//print_r($arr_movies);	
$text="0";



function is_movie($str, array $arr)
{
    foreach($arr as $a) {
        if (stripos($str,$a) !== false) return true;
    }
    return false;
}
 
   


if (isSet($_GET["s"])) {

	$text=$_GET["s"];
		$text = "/^.*$text.*\$/mi";
		//if (isSet($_GET["sub_search"])&& $_GET["sub_search"]=="movies" ) {$search_text = "/^.*$text.*\$/mi";}

		foreach (glob("*.txt") as $file2search) {
			echo "<hr size=3><h2>Search inside :$file2search </h2>";
			$contents = file_get_contents($file2search);
			//if (!strpos($contents, $text)) continue;
			//$matches[] = $search;
			//print_r($matches);
			
				if(preg_match_all($text, $contents, $matches)){
					   echo "Found matches:\n<BR>";
					   //print_r($matches);
					   $results= implode("\n<BR>", $matches[0]);
					   
					   if (isSet($_GET["sub_search"])&& $_GET["sub_search"]=="movies" ) {
					   	$sub_matches_array=array();
					   	foreach($matches[0] as $one_match) {
					   	//echo"<h1>one_match=$one_match</h1>";
					   		if(is_movie($one_match,$arr_movies)) array_push($sub_matches_array,$one_match);
					   		//print_r($sub_matches_array);
					   		$results=implode("\n<BR>", $sub_matches_array);
					   	}
					   }
					   if (isSet($_GET["sub_search"])&& $_GET["sub_search"]=="iso" ) {
					   	$sub_matches_array=array();
					   	foreach($matches[0] as $one_match) {
					   	//echo"<h1>one_match=$one_match</h1>";
					   		if(is_movie($one_match,$arr_iso)) array_push($sub_matches_array,$one_match);
					   		//print_r($sub_matches_array);
					   		$results=implode("\n<BR>", $sub_matches_array);
					   	}
					   }
					   
					   if (isSet($_GET["sub_search"])&& $_GET["sub_search"]=="cbr" ) {
					   	$sub_matches_array=array();
					   	foreach($matches[0] as $one_match) {
					   	//echo"<h1>one_match=$one_match</h1>";
					   		if(is_movie($one_match,$arr_cbr)) array_push($sub_matches_array,$one_match);
					   		//print_r($sub_matches_array);
					   		$results=implode("\n<BR>", $sub_matches_array);
					   	}
					   }						   

					   if (isSet($_GET["sub_search"])&& $_GET["sub_search"]=="pdf" ) {
					   	$sub_matches_array=array();
					   	foreach($matches[0] as $one_match) {
					   	//echo"<h1>one_match=$one_match</h1>";
					   		if(is_movie($one_match,$arr_pdf_cbr)) array_push($sub_matches_array,$one_match);
					   		//print_r($sub_matches_array);
					   		$results=implode("\n<BR>", $sub_matches_array);
					   	}
					   }

					   
					   echo $results;				   
				}	   
				else{
				   echo "No matches found";
				}

		}
	} 
	else 
	{
		echo "hello... no s?";

	}




?>