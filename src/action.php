<?php
  if(!empty($_POST["language"])){    
    $handle = fopen("data.txt", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
          $arrayData[] = intval($line);
        }
        fclose($handle);
    }
    
    switch($_POST["language"]) {
      case "swift":
        echo "<p>Welcome, Tim Cook is waiting for you</p>";
        $arrayData[0] += 1;
        break;
      case "objective-c":
        echo "<p>Welcome, Uncle Bob is waiting for you</p>";
        $arrayData[1] += 1;
        break;
      case "both":
        echo "<p>You are future apple Engineer</p>";
        $arrayData[2] += 1;
        break;
    }

    echo "<p style='margin:0px;'>Voting result:</p>";
    echo "<p style='margin:0px;'>Swift Engineers -> {$arrayData[0]}</p>";
    echo "<p style='margin:0px;'>Objective-c Engineers -> {$arrayData[1]}</p>";
    echo "<p style='margin:0px;'>People like Chris Lattner -> {$arrayData[2]}</p>";

    $handle = fopen('data.txt', 'w+');
    if ($handle) {
      fwrite($handle, $arrayData[0].PHP_EOL);
      fwrite($handle, $arrayData[1].PHP_EOL);
      fwrite($handle, $arrayData[2]);
      fclose($handle);
    }
  } else {
    echo "Please select the value.";
  }
?>
