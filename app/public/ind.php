<?php

$pdo = new \PDO("mysql:host=mariadb; dbname=zabbix_my", "zabbix", "zabbix");

echo "<pre>";
echo "Пользователи: ";
print_r($pdo->query("SELECT userid, username FROM users")->fetchAll());
echo "</pre>";

echo "<pre>";
echo "Проблемы: ";
print_r($pdo->query("SELECT eventid, clock, ns, r_clock, r_ns, name, acknowledged, severity FROM problem")->fetchAll());
echo "</pre>";

?>