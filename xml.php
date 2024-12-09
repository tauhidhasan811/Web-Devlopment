<?php
$simpleXML = new SimpleXMLElement('<?xml version="1.0"?><department/>');

$child1= $simpleXML->addchild('com_sci');
$child1-> addchild('Tauhid', "fg");
$child2= $child1 ->addchild('BSc_CSE');
$child2->addchild("Course", "DS");
$child2->addchild('Credit', 3 );


file_put_contents('information.xml', $simpleXML->asXML());
?>
<?php
$xml = simplexml_load_file('test.xml');
print_r($xml);
echo '<br>'.$xml->student[1]->first_name;

?>