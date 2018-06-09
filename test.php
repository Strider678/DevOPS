<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CodeDeploy Demo</title>
  <style>
    body {
      color: #ffffff;	
      font-family: Arial, sans-serif;
      font-size: 14px;
      animation: pulse 10s infinite;
    }

    @keyframes pulse {
      0% {
        background-color: blue;
      }
      50% {
        background-color: green;
      }
      100% {
        background-color: blue;
      }
    }

    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }

    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
    img {
      height: 30%;
      width: 30%;
    }
  </style>
</head>
<body>
  <div align="center">
    <img src="logo.png"/>
    <h1>Congratulations!</h1>
    <h2>This application was deployed using AWS CodeDeploy from GitHub.</h2>
    <h1>Version 1.0</h1>
    <?php
      $id = file_get_contents("http://instance-data/latest/meta-data/instance-id");
      $hostname = file_get_contents("http://instance-data/latest/meta-data/public-hostname");
      $ip = file_get_contents("http://instance-data/latest/meta-data/public-ipv4");
      echo "<h2>Instance ID: ", $id, "</h2>";
      echo "<h2>Public Hostname: ", $hostname, "</h2>";
      echo "<h2>Public IP: ", $ip, "</h2>";
    ?>
  </div>
</body>
</html>
