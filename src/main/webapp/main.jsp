<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html>
  <head>
    <script src="../js/main.js"></script>
    <script>
(function(context) {
  context.polop = function(message) {
    console.log(message);
    if (1 === 1) {
      console.warn('!');
    }
  }
})(window);
    </script>
  </head>
  <body>
    <h1><%= page.title %></h1>
    <!-- TODO Add stuff here -->
  </body>
</html>
