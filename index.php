<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
test
<?php

  include("./plugin.php");
  $data = new GetDataPlugin();

  echo "<br>IP               ".$data->ip();
  echo "<br>Operative System ".$data->os();
  echo "<br>Browser          ".$data->browser();
  // echo "<br>Screen height    ".$data->height();
  // echo "<br>Screen width     ".$data->width();
  // echo "<br>Java enabled     ".$data->javaenabled();
  // echo "<br>Cookie enabled   ".$data->cookieenabled();
  echo "<br>Language         ".$data->language();
  echo "<br>Architecture     ".$data->architecture();
  // echo "<br>Device           ".$data->device();
  echo "<br>Country          ".$data->geo('country');
  echo "<br>Region           ".$data->geo('region');
  echo "<br>Continent        ".$data->geo('continent');
  echo "<br>City             ".$data->geo('city');
  echo "<br>Logitude         ".$data->geo('logitude');
  echo "<br>Latitude         ".$data->geo('latitude');
  echo "<br>Currency         ".$data->geo('currency');
  echo "<br>Provetor         ".$data->provetor();
  echo "<br>Agent            ".$data->agent();
  echo "<br>Referer          ".$data->referer();
  echo "<br>Date             ".$data->getdate();

?>
</body>
</html>
