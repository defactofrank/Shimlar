<?php
/*
include '../incz/constvars.inc'; 
init_dbx();
  $query="Select name from Players";
  $result=mysql_query($query);
  $a1=mysql_num_rows($result);
  for($i=0; $i<$a1; $i++) {
    $row=mysql_fetch_row($result);
    $pname=$row[0];
    $query2="Select pname from Inventory where pname='$pname'";
    $result2=mysql_query($query2);
    if($result2==TRUE and mysql_num_rows($result2)==0) {
      print "$pname<br>";
    }
  }
print "-=End of Inventory Trace=-";
close_dbx();
*/
?>