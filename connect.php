<?php
include 'dbcreds.php';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

  if($_POST['name']) {
      $name       = $_POST['name'];
      $ufrom      = $_POST['ufrom'];
      $sfrom      = $_POST['sfrom'];
      $pfrom      = $_POST['pfrom'];
      $ttog       = $_POST['ttog'];
      $message    = $_POST['message'];
      $city       = $_POST['city'];
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = "INSERT INTO shoutbox (name, ufrom, sfrom, pfrom, ttog)
              VALUES (:name, :ufrom, :sfrom, :pfrom, :ttog)";
      /*** prepare the statement ***/
      $stmt = $dbh->prepare($sql);
  
      /*** bind the params ***/
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':ufrom', $ufrom, PDO::PARAM_STR);
      $stmt->bindParam(':sfrom', $sfrom, PDO::PARAM_STR);
      $stmt->bindParam(':pfrom', $pfrom, PDO::PARAM_STR);
      $stmt->bindParam(':ttog', $ttog, PDO::PARAM_STR);
      
      /*** run the sql statement ***/
      if ($stmt->execute()) {
        $uid = $dbh->lastInsertId();
        $sqla = "INSERT INTO comments (user_id, message)
                 VALUES (:userid, :message)";
        $stmta = $dbh->prepare($sqla);
        $stmta->bindParam(':userid', $uid, PDO::PARAM_STR);
        $stmta->bindParam(':message', $message, PDO::PARAM_STR);
        $stmta->execute();

        $sqlb = "INSERT INTO geolocation (user_id, city)
                 VALUES (:userid, :city)";
        $stmtb = $dbh->prepare($sqlb);
        $stmtb->bindParam(':userid', $uid, PDO::PARAM_STR);
        $stmtb->bindParam(':city', $city, PDO::PARAM_STR);
        $stmtb->execute();

        populate_shoutbox();
      }
  }
}

catch(PDOException $e) {
    echo $e->getMessage();
}

if($_POST['refresh']) {
    populate_shoutbox();
}


function populate_shoutbox() {
    date_default_timezone_set('America/Chicago');
    // so we don't have to connect again
    global $dbh;
    $sql = "select shoutbox.*, comments.message, geolocation.city
            from shoutbox, comments, geolocation where
            comments.user_id = shoutbox.id and geolocation.user_id = shoutbox.id
            order by date desc limit 100";
    echo '<ul>';
    foreach ($dbh->query($sql) as $row) {
        echo '<li>';
        echo '<strong>' . $row['name'] . '</strong> Says: "' . $row['message'] . '"' . '<br /><small> From ' . $row['ufrom'] . ' Spouse From ' . $row['sfrom'] . ' Together for ' . $row['ttog'] . ' Presently Living in ' . $row['pfrom'] . ' ' . $row['city'] . '</small>';
        echo ' - <small>'.date("d.m.Y H:i", strtotime($row['date'])).'</small>';
        echo '</li>';
    }
    echo '</ul>';
}
?>
