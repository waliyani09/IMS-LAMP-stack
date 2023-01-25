<?php 

// You should create one class per XML file you will be using.  The name of the class must be 
// identical to the XML tag name for the XML objects.  

// For example, if your XML objects use a tag called "product" to define each object, then 
// the class must also be called "product".

// For each class, you will need to customize the class definition to have the correct
// properties for your XML schema.  You will also need to customize the name of the 
// constructor method.  Finally, modify the writeXML method to properly output your 
// new class with your class properties and their corresponding XML element tags.

// See the comments below for details of what must be changed in each section.

class product 
{
	// Define the required id property.  Each object must have an id attribute.
	var $id;

	// Define properties to hold the info in sub-elements of the XML object.  
	// These are the names of the valid elements nested within each of the 
	// object tags.
	// ------------------------------------------------------------------------
	// ADD A PROPERTY VARIABLE FOR EACH VALID SUB-ELEMENTS IN THE XML FILE.  
	// ------------------------------------------------------------------------
	var $product_name;
	var $ppu;
	var $qoh;
    var $par = array(10,5,5,5,10,3,10,30,5,2);


	// If you have a sub-element that can appear more than once per XML object, 
	// you must define it as an array.  For example, each product in my sample
	// XML file might have more than one <warning> element, so this property
	// must be an array in PHP.
	//var $warning = array();
    //No arrays in this class


	// This is the constructor function which assigns the product id property.
	// ------------------------------------------------------------------------
	// CHANGE THE FUNCTION NAME TO BE THE SAME AS THE CLASS NAME.
	// ------------------------------------------------------------------------
	function product ($newID) 
	{
		$this->id = $newID;
	}


	// This function is used to convert the object back into an XML string.
	// ------------------------------------------------------------------------
	// CHANGE THE FUNCTION CONTENTS TO OUTPUT YOUR OBJECT'S PROPERTIES, AS
	// DESCRIBED BELOW.
	// ------------------------------------------------------------------------
	function writeXML ()
	{
		// Define some special characters to help format your output.
		$tab = "\t";
		$newline = "\n";
		
		// Change the primary object tag to be the name of the class.
		$xml_string = $newline . $tab . '<product id="' . $this->id . '">' . $newline;
		
		// Add one line for each property, outputing that property in an appropriate XML tag.
		$xml_string .= $tab . $tab . '<product_name>' . $this->product_name . '</product_name>' . $newline;
		$xml_string .= $tab . $tab . '<ppu>' . $this->ppu . '</ppu>' . $newline;
		$xml_string .= $tab . $tab . '<qoh>' . $this->qoh . '</qoh>' . $newline;
		$xml_string .= $tab . $tab . '<par>' . $this->par(($this->id)-1) . '</par>' . $newline;
		// If you have any properties that are arrays, use a loop to 
		// add each existing instance of the XML string.
		/*foreach ($this->warning as $warning)
		{
			$xml_string .= $tab . $tab . '<warning>' . $warning . '</warning>' . $newline;
		}*///Use this in case of multiple products being used for single service
		
		// Add the closing tag for the object, changing it to have the name of the class.
		$xml_string .= $tab . '</product>' . $newline;
		
		// Return the XML string.
		return $xml_string;
	}


	// This function is used to add data to one of the object's properties.
	// You probably do not need to make any changes to this function.
	function addData ($prop, $new_value) 
	{
		// Convert the property name to lower case.
		$prop = strtolower($prop);
		
		// Check if the property has been defined as an array.
		if ( is_array($this->$prop) )
		{
			// If so, add the new element to the end of the existing array.
			$temp_array = array( $new_value );
			$this->$prop = array_merge( $this->$prop, $temp_array );
		}
		else
			// Otherwise, just set the property to its new value.
			$this->$prop = $new_value;
	}
}
class service{
    var $id;
    var $sname;
    var $product = array();
    /*In this class, we will have one service using multiple products.
    This is why we have the product array. */
    function service($newID){
        $this->id = $newID;
    }
    function writeXML(){
        // Define some special characters to help format your output.
		$tab = "\t";
		$newline = "\n";
		
		// Change the primary object tag to be the name of the class.
        $xml_string = $newline . $tab . '<service id="' . $this->id . '">' . $newline;
        $xml_string .= $tab . $tab . '<name>' . $this->name . '</name>' . $newline;
		foreach ($this->product as $product)
		{
			$xml_string .= $tab . $tab . '<product>' . $product . '</product>' . $newline;
		}
		$xml_string .= $tab . '</service>' . $newline;
        return $xml_string;
    }
    function addData ($prop, $new_value) 
	{
		// Convert the property name to lower case.
		$prop = strtolower($prop);
		
		// Check if the property has been defined as an array.
		if ( is_array($this->$prop) )
		{
			// If so, add the new element to the end of the existing array.
			$temp_array = array( $new_value );
			$this->$prop = array_merge( $this->$prop, $temp_array );
		}
		else
			// Otherwise, just set the property to its new value.
			$this->$prop = $new_value;
	}
}
class order{
        var $id;
        var $sku;
        var $quantity;
        function order($newID){
            $this->id = $newID;
        }
        function writeXML(){
        // Define some special characters to help format your output.
		$tab = "\t";
		$newline = "\n";
		
		// Change the primary object tag to be the name of the class.
        $xml_string = $newline . $tab . '<order id="' . $this->id . '">' . $newline;
        $xml_string .= $tab . $tab . '<sku>' . $this->sku . '</sku>' . $newline;
        $xml_string .= $tab . $tab . '<quantity>' . $this->quantity . '</quantity>' . $newline;
        $xml_string .= $tab . '</order>' . $newline;
        return $xml_string;
        }
        function addData ($prop, $new_value) 
	{
		// Convert the property name to lower case.
		$prop = strtolower($prop);
		
		// Check if the property has been defined as an array.
		if ( is_array($this->$prop) )
		{
			// If so, add the new element to the end of the existing array.
			$temp_array = array( $new_value );
			$this->$prop = array_merge( $this->$prop, $temp_array );
		}
		else
			// Otherwise, just set the property to its new value.
			$this->$prop = $new_value;
	}
}
class customer{
    var $id;
    var $serviceID;
    function customer($newID){
        $this->id = $newID;
    }
    function writeXML(){
        // Define some special characters to help format your output.
		$tab = "\t";
		$newline = "\n";
		
		// Change the primary object tag to be the name of the class.
        $xml_string = $newline . $tab . '<customer id="' . $this->id . '">' . $newline;
        $xml_string .= $tab . $tab . '<serviceid>' . $this->serviceID . '</serviceid>' . $newline;
        $xml_string .= $tab . '</customer>' . $newline;
        return $xml_string;
    }
}
?>