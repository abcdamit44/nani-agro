<?php 
function getMeta($file = "index") {
    $meata = array(
        "index" => array("title" => "Home :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"about" => array("title" => "About :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"contact" => array("title" => "Contact :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"clients" => array("title" => "Clients :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
	    "products" => array("title" => "Products :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"certificates" => array("title" => "Certificates :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"services" => array("title" => "Services :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"infrastructure" => array("title" => "Infrastructure :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"quality_policy" => array("title" => "Quality Policy :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"blog" => array("title" => "Blog :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"spice-harvest-calendar" => array("title" => "Spice Harvest Calendar :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"turmeric" => array("title" => "Turmeric :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"chilli" => array("title" => "Chilli :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"black_and_white_pepper" => array("title" => "Black & White Pepper :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"ginger" => array("title" => "Ginger :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"whole_spices" => array("title" => "Whole Spices :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"mixed_spices_whole" => array("title" => "Mixed Spices Whole :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"ground_spices" => array("title" => "Ground Spices :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"spice_blends" => array("title" => "Spice Blends :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"grinders" => array("title" => "Grinders :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"miscellaneous" => array("title" => "Miscellaneous :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"chana_products" => array("title" => "Chana Products :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"dry_fruits_&_nuts" => array("title" => "Dry Fruits & Nuts :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"tamrind_products" => array("title" => "Tamrind Products :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"coconut_products" => array("title" => "Coconut Products :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"delicacies" => array("title" => "Delicacies Products :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"paapad" => array("title" => "Pappad & Far Far Products :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"mouth_fresheners" => array("title" => "Mouth Fresheners :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"jaggery" => array("title" => "Jaggery :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),
		"rice" => array("title" => "Rice :: Nani Agro", "description" => "Nani Agro", "keyword" => "Nani Agro"),

		

    );  
    return $meata[$file];
}
$filename = basename($_SERVER["SCRIPT_FILENAME"]) ;

if ($filename == "index.php") {
    $metaData = getMeta("index");
}if ($filename == "about.php") {
    $metaData = getMeta("about");
}if ($filename == "contact.php") {
    $metaData = getMeta("contact");
}if ($filename == "clients.php") {
    $metaData = getMeta("clients");
}if ($filename == "products.php") {
    $metaData = getMeta("products");
}if ($filename == "certificates.php") {
    $metaData = getMeta("certificates");
}if ($filename == "services.php") {
    $metaData = getMeta("services");
}if ($filename == "infrastructure.php") {
    $metaData = getMeta("infrastructure");
}if ($filename == "quality_policy.php") {
    $metaData = getMeta("quality_policy");
}if ($filename == "blog.php") {
    $metaData = getMeta("blog");
}if ($filename == "spice-harvest-calendar.php") {
    $metaData = getMeta("spice-harvest-calendar");
}if ($filename == "turmeric.php") {
    $metaData = getMeta("turmeric");
}if ($filename == "chilli.php") {
    $metaData = getMeta("chilli");
}if ($filename == "black_and_white_pepper.php") {
    $metaData = getMeta("black_and_white_pepper");
}if ($filename == "ginger.php") {
    $metaData = getMeta("ginger");
}if ($filename == "whole_spices.php") {
    $metaData = getMeta("whole_spices");
}if ($filename == "mixed_spices_whole.php") {
    $metaData = getMeta("mixed_spices_whole");
}if ($filename == "ground_spices.php") {
    $metaData = getMeta("ground_spices");
}if ($filename == "spice_blends.php") {
    $metaData = getMeta("spice_blends");
}if ($filename == "grinders.php") {
    $metaData = getMeta("grinders");
}if ($filename == "miscellaneous.php") {
    $metaData = getMeta("miscellaneous");
}if ($filename == "chana_products.php") {
    $metaData = getMeta("chana_products");
}if ($filename == "dry_fruits_&_nuts.php") {
    $metaData = getMeta("dry_fruits_&_nuts");
}if ($filename == "tamrind_products.php") {
    $metaData = getMeta("tamrind_products");
}if ($filename == "coconut_products.php") {
    $metaData = getMeta("coconut_products");
}if ($filename == "delicacies.php") {
    $metaData = getMeta("delicacies");
}if ($filename == "paapad.php") {
    $metaData = getMeta("paapad");
}if ($filename == "mouth_fresheners.php") {
    $metaData = getMeta("mouth_fresheners");
}if ($filename == "jaggery.php") {
    $metaData = getMeta("jaggery");
}if ($filename == "rice.php") {
    $metaData = getMeta("rice");
}
?>