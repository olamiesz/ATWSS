<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

	<?php include('navbar.php'); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Dosimeters</h1>
    <p class="lead">Recorded dosimeter values of dosimeters in ATLAS</p>
  </div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
		<?php readfile('https://atlas.web.cern.ch/Atlas/TCOORD/CavCom/plot.php'); ?>
    </div>

  </div>
  
  <?php include('footer.php'); ?>
  <?php include('script.php'); ?>
  
</body>
</html>