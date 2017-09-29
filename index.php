<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";
//3
if($date>$tar)
print("The Future");
else if($date<$tar)
print("The Past");
else if($date==$tar)
print("Oops");

//4
echo "<br>";
$toFind = "/";
$start = 0;
$j=strpos(($date),$toFind,$start);

for($i=$j;$i<strlen($date);$i++)
{
if($i==strpos(($date),$toFind,$start))
echo strpos(($date),$toFind,$start)." ";
$start=$i+1;
}
//5
echo "<br>";
echo "Number of words in '".$date."' : ".str_word_count($date);

//6
echo "<br>";
$string="Hello World";
echo "Length of ".$string." is ".strlen($string); 

//7
echo "<br>";
echo "ASCII value of first charachter of ".$string." is ".ord($string);

//8
echo "<br>";
echo "Last two character of ".$date." are ".substr($date,-2);

//9
echo "<br>";
$array=explode("/",$date);
foreach($array as $value)
{
echo $value." ";
}

//10 a
echo "<br>";
foreach($year as $yrs)
{
if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		{
			echo $yrs. " True ";  
		}
   else
   {
     echo $yrs. " False ";
   }
}

echo "<br>";
for($i=0;$i<count($year);$i++)
{
if( (($year[$i] % 4==0) && ($year[$i] % 100!=0)) || ($year[$i] % 400==0) )
		{
			echo $year[$i]. " True ";  
		}
   else
   {
     echo $year[$i]. " False ";
   }
}

//10 b
echo "<br>";
foreach ($year as $yrs)
{
  switch ($yrs)
    {
      case "2012":
        if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		      {
			      echo $yrs. " True ";  
		      }    
        else
          {
            echo $yrs. " False ";
          }
      break;
      
      
      case "396":
        if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		      {
			      echo $yrs. " True ";  
		      }    
        else
          {
            echo $yrs. " False ";
          }
      break;
      
      case "300":
        if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		      {
			      echo $yrs. " True ";  
		      }    
        else
          {
            echo $yrs. " False ";
          }
      break;
      
      case "2000":
        if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		      {
			      echo $yrs. " True ";  
		      }    
        else
          {
            echo $yrs. " False ";
          }
      break;
      
      case "1100":
        if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		      {
			      echo $yrs. " True ";  
		      }    
        else
          {
            echo $yrs. " False ";
          }
      break;
      
      case "1089":
        if( (($yrs % 4==0) && ($yrs % 100!=0)) || ($yrs % 400==0) )
		      {
			      echo $yrs. " True ";  
		      }    
        else
          {
            echo $yrs. " False ";
          }
      break;
    }
  
}
?>