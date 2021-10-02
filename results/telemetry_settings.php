<?php

// Type of db: "mysql", "sqlite" or "postgresql"
$db_type = 'postgresql';
// Password to login to stats.php. Change this!!!
$stats_password = $_ENV["PASSWORD"];
// If set to true, test IDs will be obfuscated to prevent users from guessing URLs of other tests
$enable_id_obfuscation = false;
// If set to true, IP addresses will be redacted from IP and ISP info fields, as well as the log
$redact_ip_addresses = false;

// Sqlite3 settings
$Sqlite_db_file = '../../speedtest_telemetry.sql';

// Mysql settings
$MySql_username = 'USERNAME';
$MySql_password = 'PASSWORD';
$MySql_hostname = 'DB_HOSTNAME';
$MySql_databasename = 'DB_NAME';
$MySql_port = '3306';

// Postgresql settings
$PostgreSql_username = $_ENV["DB_USERNAME"];
$PostgreSql_password = $_ENV["DB_PASSWORD"]; 
$PostgreSql_hostname = $_ENV["DB_HOSTNAME"];
$PostgreSql_databasename = $_ENV["DB_NAME"];
