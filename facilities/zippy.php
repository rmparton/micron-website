<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: DeltaVision</title>
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/main.css" >
  <link rel="stylesheet" type="text/css" href="../styles/facilities.css" >
  <link rel="icon" type="image/ico" href="../images/MicronMu.ico" >
  <script src="../google_analytics.js"></script>
</head>

<body id="facilities">
  <div id="container_all">
    <?php include "../headnav.html"; ?>
    <div id="mainbody">
      <div id="leftpanel">

        <?php
          include "../scripts/microscopes.php";
          use MicronOxford\OpticalMicroscope;
          use MicronOxford\SolidStateLaser;
          use MicronOxford\GasLaser;
          use MicronOxford\Objective;

          $zippy = new OpticalMicroscope (
            "zippy",
            "API DeltaVision Core",
            "New Biochemistry Room 00-031",
            array (),
            array (
              new Objective (10, 0.40, "air UPlanApo"),
              new Objective (20, 0.75, "air UPlanSApo"),
              new Objective (40, 1.35, "oil UApo"),
              new Objective (60, 1.35, "oil UPlanSApo"),
              new Objective (100, 1.40, "oil UPlanSApo"),
            )
          );
        ?>

        <?php $zippy->draw_header (); ?>

        <?php $zippy->draw_description (); ?>
      </div>

      <div id="rightpanel">
        <img src="../images/zippy.png" width="280" />
                <p>&nbsp;</p>

        <ul>
          <li><a href="http://www.api.com/deltavision-omx.asp" title="Applied Precision">Applied Precision</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>
