<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>EPAM DevOps Demo</title>
  <style>
    body {
      color: #ffffff;
      background-color: #0188cc;
      font-family: Arial, sans-serif;
      font-size: 14px;
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
  </style>
</head>
<body>
  <div align="center">
    <h1>Congratulations!</h1>
    <h2>This application was deployed using AWS CodeDeploy from GitHub.</h2>
    <h1>Version 1.0</h1>
    <?php
      $id = files_get_content("http://instance-data/latest/meta-data/instance-id");
      $ip = files_get_content("http://instance-data/latest/meta-data/local-ipv4");
      echo "<h2>Instance ID: ", $id, "</h2>";
      echo "<h2>Instance IP: ", $ip, "</h2>";
    ?>
  </div>
</body>
</html>
