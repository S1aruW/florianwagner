<!DOCTYPE html>
<?php
  $name = "Florian Wagner";
  $title = "";
  $race = "Human" ;

  if (!empty($_POST['benchpressInput'])) {
    setcookie("benchpressCookie", $_POST['benchpressInput'], time() + (86400 * 365), '/');
    $_COOKIE["benchpressCookie"] = $_POST['benchpressInput'];
  }

  if (!empty($_POST['rowInput'])) {
    setcookie("rowingCookie", $_POST['rowInput'], time() + (86400 * 365), '/');
    $_COOKIE["rowingCookie"] = $_POST['rowInput'];
  }

  if (!empty($_POST['squatsInput'])) {
    setcookie("squatsCookie", $_POST['squatsInput'], time() + (86400 * 365), '/');
    $_COOKIE["squatsCookie"] = $_POST['squatsInput'];

  }
  if (!empty($_POST['shoulderpressInput'])) {
    setcookie("shoulderpressCookie", $_POST['shoulderpressInput'], time() + (86400 * 365), '/');
    $_COOKIE["shoulderpressCookie"] = $_POST['shoulderpressInput'];
  }
  if (!empty($_POST['cooperTestInput'])) {
    setcookie("cooperCookie", $_POST['cooperTestInput'], time() + (86400 * 365), '/');
    $_COOKIE["cooperCookie"] = $_POST['cooperTestInput'];
  }
  if (!empty($_POST['sprintInput'])) {
    setcookie("sprintCookie", $_POST['sprintInput'], time() + (86400 * 365), '/');
    $_COOKIE["sprintCookie"] = $_POST['sprintInput'];
  }
  if (!empty($_POST['plankInput'])) {
    setcookie("plankCookie", $_POST['plankInput'], time() + (86400 * 365), '/');
    $_COOKIE["plankCookie"] = $_POST['plankInput'];
  }

  $benchpressCookie = $_COOKIE["benchpressCookie"];
  $rowCookie = $_COOKIE["rowingCookie"];
  $squatsCookie = $_COOKIE["squatsCookie"];
  $shoulderpressCookie = $_COOKIE["shoulderpressCookie"];
  $cooperCookie = $_COOKIE["cooperCookie"];
  $sprintCookie = $_COOKIE["sprintCookie"];
  $plankCookie = $_COOKIE["plankCookie"];


  // Checks stats for level requirements and determines level
  if ($benchpressCookie > 79 && $rowCookie > 79 && $squatsCookie > 129 && $shoulderpressCookie > 34) {
    $strengthLevel = 5;
  } else if ($benchpressCookie > 69 && $rowCookie > 69 && $squatsCookie > 114 && $shoulderpressCookie > 29) {
    $strengthLevel = 4;
  } else if ($benchpressCookie > 59 && $rowCookie > 59 && $squatsCookie > 99 && $shoulderpressCookie > 24) {
    $strengthLevel = 3;
  } else if ($benchpressCookie > 49 && $rowCookie > 49 && $squatsCookie > 84 && $shoulderpressCookie > 19) {
    $strengthLevel = 2;
  } else if ($benchpressCookie > 44 && $rowCookie > 44 && $squatsCookie > 69 && $shoulderpressCookie > 14) {
    $strengthLevel = 1;
  } else
    $strengthLevel = 0;

  if ($cooperCookie > 3279 && $sprintCookie > 13.51 && $plankCookie > 1.29)
    $enduranceLevel = 5;
  else if ($cooperCookie > 3049 && $sprintCookie > 13.51 && $plankCookie > 2.00)
    $enduranceLevel = 4;
  else if ($cooperCookie > 2899 && $sprintCookie > 13.01 && $plankCookie > 3.00)
    $enduranceLevel = 3;
  else if ($cooperCookie > 2749 && $sprintCookie > 12.51 && $plankCookie > 4.00)
    $enduranceLevel = 2;
  else if ($cooperCookie > 2499 && $sprintCookie > 12.01 && $plankCookie > 5.00)
    $enduranceLevel = 1;
  else
    $enduranceLevel = 0;

  // Level requirements
  if ($strengthLevel > 4 && $enduranceLevel > 4)
    $level = 5;
  else if ($strengthLevel > 3 && $enduranceLevel > 3)
    $level = 4;
  else if ($strengthLevel > 2 && $enduranceLevel > 2)
    $level = 3;
  else if ($strengthLevel > 1 && $enduranceLevel > 1)
    $level = 2;
  else if ($strengthLevel > 0 && $enduranceLevel > 0)
    $level = 1;
  else
    $level = 0;
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="rpgRLcss.css">
    <script src="rpgRLjs.js"></script>
    <title>RPG RL</title>
  </head>
  <body>
    <h1><?php echo $name?></h1>
    <fieldset id="info">
      <label id="titleLabel"><?php echo $title ?></label>
      <label id="levelLabel">Level <?php echo $level ?></label>
      <label id="raceLabel"><?php echo $race ?></label> 
    </fieldset>
    <fieldset id="attributes">
      <h4>Attributes</h4>
      <label id="strengthLabel">Strength Lvl <?php echo $strengthLevel ?></label>
      <label id="enduranceLabel">Endurance Lvl <?php echo $enduranceLevel ?></label>
    </fieldset>
    <fieldset class="grid">
      <fieldset id="strengthStats" class="currentStats">
        <h4>Current Strength Stats:</h4>
        <div class="grid">
          <label>Benchpress:</label><label class="statP"><?php echo $benchpressCookie ?>kg</label> 
          <label>Rowing:</label><label class="statP"><?php echo $rowCookie ?>kg</label>
          <label>Squats:</label><label class="statP"><?php echo $squatsCookie ?>kg</label>
          <label>Shoulderpress:</label><label class="statP"><?php echo $shoulderpressCookie ?>kg</label>  
      </fieldset>
      
      <fieldset id="requiredStrengthStats">
        <h4>Strength Level 4 Requirements:</h4>
        <div id="benchpressReqLabel" class="grid">
          <label>Benchpress:</label><label>65kg</label>
        </div>
        <div id="rowReqLabel" class="grid">
          <label>Rowing:</label><label>70kg</label>
        </div>
        <div id="squatReqLabel" class="grid">
          <label>Squats:</label><label>100kg</label>
        </div>
        <div id="shouderpressReqLabel" class="grid">
          <label>Shoulderpress:</label><label>30kg</label>
        </div>
      </fieldset>

      <fieldset id="enduranceSats" class="currentStats">
        <h4>Current Endurance Stats:</h4>
        <div>
          <div id="cooperLabel" class="grid">
            <label>Test:</label><label><?php echo $cooperCookie ?>m</label>
          </div>
          <div id="sprintLabel" class="grid">
            <label>Sprint:</label><label><?php echo $sprintCookie ?>s</label>
          </div>
          <div id="plankLabel" class="grid">
            <label>Plank:</label><label><?php echo $plankCookie ?>s</label>
          </div>
        </div>
      </fieldset>
      
      <fieldset id="requiredEnduranceStats">
        <h4>Endurance Level 2 Requirements:</h4>
        <div id="cooperReqLabel" class="grid">
          <label>Cooper Test:</label><label>2750m</label>
        </div>
        <div id="sprintReqLabel" class="grid">
          <label>100m Sprint:</label><label>12.5s</label>
        </div>
        <div id="plankReqLabel" class="grid">
          <label>Plank:</label><label>120s</label>
        </div>
      </fieldset>
    </fieldset>
    <form action="https://info.mi.hs-offenburg.de/~ivs/fwagner/priv/rpgRLForm.php">
      <input type="submit" value="Update stats">
    </form>      
  </body>
</html> 