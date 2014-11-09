<?php

	namespace OSFX;

	class Constants {
		public static $affiliate_programs = array( // The array key is refered as the ID!
				1 => 	array(
							'title' => 'Amazon (Brazil)',
							'url_fragment' 	=> 'amazon.com.br',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				2 => 	array(
							'title' => 'Amazon (Canada)',
							'url_fragment' 	=> 'amazon.ca',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				3 => 	array(
							'title' => 'Amazon (China)',
							'url_fragment' 	=> 'amazon.cn',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				4 => 	array(
							'title' => 'Amazon (France)',
							'url_fragment' 	=> 'amazon.fr',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				5 => 	array(
							'title' => 'Amazon (Germany)',
							'url_fragment' 	=> 'amazon.de',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				6 => 	array(
							'title' => 'Amazon (Great Britain)',
							'url_fragment' 	=> 'amazon.co.uk',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				7 => 	array(
							'title' => 'Amazon (Italy)',
							'url_fragment' 	=> 'amazon.it',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				8 => 	array(
							'title' => 'Amazon (India)',
							'url_fragment' 	=> 'amazon.in',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				9 => 	array(
							'title' => 'Amazon (Japan)',
							'url_fragment' 	=> 'amazon.co.jp',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				10 => 	array(
							'title' => 'Amazon (Spain)',
							'url_fragment' 	=> 'amazon.es',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				11 => 	array(
							'title' => 'Amazon (United States)',
							'url_fragment' 	=> 'amazon.com',
							'icon' => 'amazon-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&tag={{affiliate-id}}",
							'existing_affiliation_regexp' => "&tag={{affiliate-id}}",
							'existing_affiliation_identifier' => 'tag'
						),
				12 => 	array(
							'title' => 'iTunes',
							'url_fragment' 	=> 'itunes.apple.com',
							'icon' => 'itunes-128.png',
							'search_fragment' => "/($)/i",
							'replace_fragment' => "&at={{affiliate-id}}",
							'existing_affiliation_regexp' => "&at={{affiliate-id}}",
							'existing_affiliation_identifier' => '&at'
						),
				13 => 	array(
							'title' => 'Thomann',
							'url_fragment' 	=> 'thomann.de',
							'icon' => 'thomann-128.png',
							'search_fragment' => "/thomann.de\/([a-z]*)(\/)/i",
							'replace_fragment' => "thomann.de/index.html?partner_id={{affiliate-id}}&page=/$1/",
							'existing_affiliation_regexp' => "partner_id={{affiliate-id}}",
							'existing_affiliation_identifier' => '?partner_id'
						)
			);
	}

?>