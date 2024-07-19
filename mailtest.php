<?php  
$send = mail("mailhostingserver@gmail.com","test subject","test message","From:test@smitfoundation.org"); 
if($send){ 
echo "sent"; 
}else 
{ 
echo "not sent"; 
}; 
?> 