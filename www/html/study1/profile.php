<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>
<body>
  <div>
    <?php
    require_once("util.php");
    if (!chen($_POST)) {
        $encoding = mb_internal_encoding();
        $err = "Encoding Error! The expected encoding is" . $encoding;
        exit($err);
    }
    //HTML escape xss mcountermeasure
    $_POST = es($_POST);
    ?>

    <?php
      $error =[];
      //output [sex] from post
      if (isSet($_POST["sex"])) {
        $sexValues = ["男性", "女性"];
        $isSex = in_array($_POST["sex"], $sexValues);
        if ($isSex) {
            $sex = $_POST["sex"];
        } else {
            $sex = "error";
            $error[] = "error in sex";
        }
       } else {
           $isSex = false;
           $sex = "男性";
       }
       //output [marriage] from post
      if (isSet($_POST["marriage"])) {
          $marriageValues = ["独身", "既婚", "同棲中"];
          $isMarriage = in_array($_POST["marriage"], $marriageValues);
          if ($isMarriage) {
              $marriage = $_POST['marriage'];
          } else {
              $marriage = "error";
              $error[] = "error in [marriage]";
          }
       } else {
           $isMarriage = false;
           $marriage ="独身";
       }
    ?>

    <?php
      function checked($value, $question) {
          if (is_array($question)) {
              $isChecked = in_array($value, $question);
          } else {
              $isChecked = ($value === $question);
          }
          if ($isChecked) {
              echo "checked";
          } else {
              echo "";
          }
      }
    ?>

    <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']) ?>">
      <ul>
        <li>
          <span>SEX:</span>
          <label><input type="radio" name="sex" value="男性"<?php checked("男性", $sex) ?>>men</label>
          <label><input type="radio" name="sex" value="女性"<?php checked("女性", $sex) ?>>women</label>
        </li>
        <li>
        <span>Marriage:</span>
          <label><input type="radio" name="marriage" value="独身"<?php checked("独身", $sex) ?>>single</label>
          <label><input type="radio" name="marriage" value="既婚"<?php checked("既婚", $sex) ?>>married</label>
          <label><input type="radio" name="marriage" value="同棲中"<?php checked("同棲中", $sex) ?>>live togehter</label>
        </li>
        <li><input type="submit">submit</li>
      </ul>
    </form>

    <?php 
      $isSubmited = $isSex && $isMarriage;
      if ($isSubmited) {
          echo "you are {$sex} and {$marriage}";
      }
    ?>

    <?php 
      if (count($error)>0) {
          echo '<span class="error">', implode("<br>", $error), '</span>';
      }
    ?>
  </div>
</body>
</html>