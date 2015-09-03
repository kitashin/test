
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">

    <h1>Lists</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

      <div>change domain</div>
      <button type="button" class="btn btn-default"><a href="./?domain=womo.jp">womo.jp</a></button>
      <button type="button" class="btn btn-primary"><a href="./?domain=iarchitect.co.jp">iarchitect.co.jp</a></button>
      <button type="button" class="btn btn-success"><a href="./?domain=sumailab.net">sumailab.net</a></button>
      <button type="button" class="btn btn-info"><a href="./?domain=sol-ia.jp">sol-ia.jp</a></button>
      <button type="button" class="btn btn-warning"><a href="./?domain=sol-ia.info">sol-ia.info</a></button>
      <button type="button" class="btn btn-danger"><a href="./">search member</a></button>

    <section>

<?php
echo "<div>Members of " . $_GET[list_members] . "</div>";
$cmd = '/usr/lib/mailman/bin/list_members ' . $_GET[list_members];
exec($cmd, $resultAry, $status);
echo "<div>";
echo '<ul class="nav nav-pills nav-stacked">';
for($i = 0; $i < count($resultAry); $i++){
    $list_members = ereg_replace(' - .*',"", trim($resultAry[$i]));
    echo '<li><a href="#">' . $list_members . "</a></li>\n";
}
echo "</ul>";
echo "</div>";

?>
</section>
</div>


</body>
</html>

