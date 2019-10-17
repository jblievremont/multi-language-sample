<?php
/*
 * Test for SonarPHP
 */

$variableFromMain = 'polop';
require_once('mylib.php');

$test = ((true == true));

// TODO Fix issue below!
function makeYogurt($flavor, $type = "acidophilus") {
  print($type . $flavor);
}

makeYogurt("raspberry", "pie");

if ($test == true) {
  // TODO
} else if (($variableFromMain == 'polop') == true) {
  print($variableFromMain);
  functionFromMyLib();
}

if ($test == $test) {
  print($test);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="../js/main.js"></script>
    <script type="text/javascript">
function printPolop() {
    // TODO Add more content!
    console.log('polop');
}
    </script>
  </head>
  <body>
    <!-- TODO Add content -->
    <h1>My test page</h1>
    <p>
      This is a <a href="https://www.sonarsource.com" target="_blank">link</a> to our home page.
    </p>
    <table>
      <thead>
        <tr>
          <th scope="col">Column 1</th>
          <th scope="col">Column 2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Value 1</td>
          <td>Value 2</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>