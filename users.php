<!DOCTYPE html>
<html>
  <head>
    <title>User List</title>
  </head>
  <body>
    <h1>User List</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Picture</th>
        <th>Date Registered</th>
      </tr>
      <?php
$fp = fopen( 'users.csv', 'r' );

while ( $data = fgetcsv( $fp ) ) {
    echo '<tr>';
    echo '<td>' . $data[0] . '</td>';
    echo '<td>' . $data[1] . '</td>';
    echo '<td><img src="uploads/' . $data[2] . '" height="50"></td>';
    echo '<td>' . $data[3] . '</td>';
    echo '</tr>';
}

fclose( $fp );
?>
    </table>
  </body>
</html>
