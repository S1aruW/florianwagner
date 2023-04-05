<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="rpgRLcss.css">
    <script src="rpgRLjs.js"></script>
    <title>My Stats</title>
  </head>
  <body>
    <h1>My Stats</h1>
    <form id="statForm" method="post" 
    action="https://info.mi.hs-offenburg.de/~ivs/fwagner/priv/rpgRL.php">
      <fieldset>
        <h2>Strength</h2>
        <label name="benchpress">Benchpress: 
          <input type="text" name="benchpressInput" id="bpField">kg
        </label><br>
        <label name="rowing">Rowing: 
          <input type="text" name="rowInput" id="rowField">kg
        </label><br>
        <label name="squats">Squats: 
          <input type="text" name="squatsInput" id="squatsField">kg
        </label><br>
        <label name="shoulderpress">Shoulderpress: 
          <input type="text" name="shoulderpressInput" id="shoulderpressField">kg
        </label><br>
      </fieldset>

      <fieldset>
        <h2>Endurance</h2>
        <label name="cooperTest">Cooper Test: 
          <input type="text" name="cooperTestInput" id="cooperTestField">m
        </label><br>
        <label name="sprint">100m Sprint: 
          <input type="text" name="sprintInput" id="sprintField">s
        </label><br>
        <label name="plank">Plank: 
          <input type="text" name="plankInput" id="plankField">s
        </label><br>
      </fieldset>

      <p><input type="submit" value="Senden"> 
        <input type="reset" value="Alles Löschen"></p>
    </form>
  </body>
</html>