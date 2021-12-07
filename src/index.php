<!DOCTYPE html>
<html>
  <body>
    <p>
      <?php 
        foreach (getallheaders() as $name => $value) {
          echo "$name: $value\n";
        }
      ?>
    </p>
  </body>
</html>
