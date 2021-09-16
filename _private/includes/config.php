<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => '127.0.0.1',
		'DATABASE' => '',
		'USER'     => 'root',
		'PASSWORD' => ''
	],
	'BASE_URL' => '/social-responsibility',
	'PUBLIC'     => dirname( __DIR__, 2 ),  // Vanaf dit bestand 2 mappen omhoog
	'PRIVATE'  => dirname( __DIR__ )
];

return $config;
