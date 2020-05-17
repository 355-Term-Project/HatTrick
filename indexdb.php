<?php

$dbhost = 'ec2-34-200-116-132.compute-1.amazonaws.com';
$dbname='d3n72r732974e4';
$dbuser = 'pdwszmyzomclfz';
$dbpass = 'f44f127f236864f768f94650cbdc12dab5218ad3e22449219133b70be23e6aa6';
$dbport = '5432';


# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
//   return " user = $user password = $password host = $local dbname = hattrick" . substr($path, 1); # <- you may want to add sslmode=require there too
}

# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());

# Now let's use the connection for something silly just to prove it works:
$result = pg_query($pg_conn, 'USE hattrick SELECT * FROM hattrick.appuser');

print "<pre>\n";
if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
  print "Tables in your database:\n";
  while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
}
print "\n";
?>