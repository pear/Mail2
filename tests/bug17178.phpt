--TEST--
Mail2_RFC822::parseAddressList does not accept RFC-valid group syntax
--FILE--
<?php
require "Mail2/RFC822.php";

var_dump(Mail2_RFC822::parseAddressList("empty-group:;","invalid",false,false)); 

--EXPECT--
array(0) {
} 
