<?php
function is_valid_product($code) {
	return array_key_exists($code, get_products());
}

function is_valid_testimony($code){
	return array_key_exists($code, get_testimonies());
}

function get_product($code = null) {
	if (is_null($code)) 			return false;
	if (!is_valid_product($code)) 	return false;

	$products = get_products();
	return $products[$code];
}

function get_testimony($code) {
	if (is_null($code)) 			return false;
	if (!is_valid_testimony($code)) return false;

	$testimony = get_testimonies();
	return $testimony[$code];
}

function get_products() {
	$products = array(
		'grapeseed_coq10' 	=> array('name' => 'Grapeseed Extract with CoQ10',
								'file' => 'product_grapeseed_coq10'),
		'alkaline_capsules' => array('name' => 'Alkaline Mineral Capsules',
								'file' => 'product_alkaline_capsules'),
		'alkaline_drops' 	=> array('name' => 'Pure Alkaline Drops (SAM)',
								'file' => 'product_alkaline_drops'),
		'vit_c' 			=> array('name' => 'Vitamin C',
								'file' => 'product_vit_c'),
		'green_barley' 			=> array('name' => 'Barley',
								'file' => 'product_green_barley'),
		'premium_one' 		=> array('name' => 'Premium One',
								'file' => 'product_premium_one'),
		'power_drops' 		=> array('name' => 'Power Drops',
								'file' => 'product_power_drops'),
		'spiruplus' 		=> array('name' => 'Spiruplus',
								'file' => 'product_spiruplus'),
		'honey' 			=> array('name' => 'Pure Natural Raw Honey',
								'file' => 'product_honey'),
		'cotton_hankey' 	=> array('name' => 'Cotton Hankey',
								'file' => 'product_cotton_hankey'),
		'juices' 			=> array('name' => 'Organic Juices',
								'file' => 'product_juices'),
		'soap_shampoo' 		=> array('name' => 'Organic Soap and Shampoo',
								'file' => 'product_soap_shampoo'),
		'fertilizer' 		=> array('name' => 'Organic Fertilizer',
								'file' => 'product_fertilizer')
	);
	return $products;
}

function get_testimonies() {
	$testimonies = array(
		'dodong' => array('name' => 'Dodong Fuertez Jr.',
							'file' => 'testimonial_dodong'),
		'arlyn_gayon' => array('name' => 'Ms. Arlyn Gayon',
							'file' => 'testimonial_arlyn_gayon'),
		'vicky_de_lunas' => array('name' => 'Ms. Vicky de Lunas',
							'file' => 'testimonial_vicky_de_lunas')
	);
	return $testimonies;
}

function load_404() {
	include_once("header.php");
	include_once("404.php");
	include_once("footer.php");
	exit();
}
?>