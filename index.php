<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title>LAB4</title>
  </head>
  <body>
    <form action="./src/action.php" method="post">
      <p>Pick your language</p>
      <div class="choice">
        <label for="languageChoice1">
          <input type="radio" id="languageChoice1" name="language" value="swift" checked>
          Swift
        </label>
        <label for="languageChoice2">
          <input type="radio" id="languageChoice2" name="language" value="objective-c">
          Objective-C
        </label>
        <label for="languageChoice3">
          <input type="radio" id="languageChoice3" name="language" value="both">
          Both
        </label>
      </div>
      <div>
        <button type="submit">Vote!</button>
      </div>
    </form>
  </body>
</html>
