<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
    <?php 
      require_once("util.php");
      if (!chen($_POST)) {
        $encoding = mb_internal_encoding();
        $err = "Encording error! The expected encording is " . $encoding;
        exit($err);
    }
    ?>

    <?php 
      if (isSet($_POST["note"])) {
          $note = $_POST["note"];
          $note = strip_tags(($note));
          $note = mb_substr($note, 0, 150);
          $note = es($note);
        } else {
            $note = "";
        }
    ?>

    <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
      <ul>
        <li>
          <span>OPONION</span>
          <textarea name="note" id="" cols="30" rows="5" maxlength="150" placeholder="please put in comments">
            <?php echo $note; ?>
          </textarea>
        </li>
        <li><input type="submit" value="submit"></li>
      </ul>
    </form>

    <?php 
      $length = mb_strlen($note);
      if ($length>0) {
          echo "<HR>";
         $note_br = nl2br($note, false);
         echo $note_br;
      }
    ?>
  </div>
</body>
</html>