<?php
	$config['ip']       = readLine("IP database (def. Localhost):");
	$config['user']     = readLine("User database (def. root):");
	$config['database'] = readLine("Nome database:");
	$config['password'] = readLine("Password database:");
	$config['table']  =  readLine("Table database :");

	$stmt = new PDO("mysql:host=" . $config["ip"] . ";dbname=" . $config['database'], $config['user'], $config['password']);	


	$stmt->query("CREATE TABLE IF NOT EXISTS " . $table . " (
	id int(0) AUTO_INCREMENT,
	chat_id bigint(0),
	username varchar(200),
	page varchar(200),
	PRIMARY KEY (id))");
echo "Checking data..."

echo "DB Installation done with success.";
