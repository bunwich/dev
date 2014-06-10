#!/usr/bin/php
<?php

$memcachedClass = new MemcachedClass();

if ($argc == 1) {
	$memcachedClass->showAll();
	return;
}

switch (strtolower($argv[1])) {

case 'delete':
	$memcachedClass->deleteAll();
	break;
case 'getbykey':
	$memcachedClass->getByKey($argv[2]);
	break;
default:
	print "Command does not exist\n";
}

class MemcachedClass {
	public $m;
	public $servers;

	public function __construct() {
		
		$this->m = new Memcached();

		$this->servers = array(
			array('localhost', 11211),
		);

		$this->m->addServers($this->servers);

	}

	public function showAll() {
		print "Show All...\n";
		$allkeys = $this->m->getAllKeys();

		print_r($allkeys);

		foreach($allkeys as $key) {
			print "$key\n";
			if (!stristr($key, 'GuildLevels') && !stristr($key, 'GuildAchievementGoals') && !stristr($key, 'guild_medals')) {
				print_r( $this->m->get($key));
			}
		}
	}
	
	public function deleteAll() {
		print "Delete All...\n";	
		$allkeys = $this->m->getAllKeys();

		foreach($allkeys as $keys) {
			$this->m->delete($keys);
		}

		print_r($allkeys);
	}

	public function getByKey($key) {
		print "Get By Key...\n";
		print_r($this->m->get($key));
	}
}
/*
*/
