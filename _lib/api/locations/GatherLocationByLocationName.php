<?
$Sql = mysql_query("SELECT LocationId, City, State, Country FROM Locations WHERE City='$City' AND State='$State' AND Country='$Country'") or die ("GatherLocations Failed");
?>