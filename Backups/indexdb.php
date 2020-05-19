<?php

$dbhost = 'ec2-34-200-116-132.compute-1.amazonaws.com';
$dbname= 'd3n72r732974e4';
$dbuser = 'pdwszmyzomclfz';
$dbpass = 'f44f127f236864f768f94650cbdc12dab5218ad3e22449219133b70be23e6aa6';
$dbport = '5432';

# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());

# Now let's use the connection for something silly just to prove it works:
$query = 'SELECT * FROM hattrick.appuser'; 
$result = pg_query($pg_conn, $query);


# This prints everything! Dangerous
// $arr = pg_fetch_all($result);
// print_r($arr);

print "<pre>\n";
if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
  print "Users in the Table [appuser] :\n";
  // Get an array of all author names
  $arr = pg_fetch_all_columns($result, 1);
  var_dump($arr);


  // while ($row = pg_fetch_row($result)) { 
  //     print("- $row[0]\n"); 
  //   }
}

print "\n";


?>