<?php
session_start();

$FLAG = '${Fl@gW3lc0meT0Th3W0r1d}';

if (!isset($_SESSION['topic'])) {
  header('Location: /');
  die('Error !?');
}

if (!isset($_GET['id'])) {
  header('Location: /');
  die('Error !?');
}

$id = $_GET['id'];
$session_topic = $_SESSION['topic'];

$topic = $session_topic[$id];

if (!isset($topic)) {
  header('Location: /');
  die('Error !?');
}
?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2>Topic name: <?php print($topic['name']); ?></h2>
    <p>
      <?php print(nl2br($topic['text'] == '' ? $id == 1 ? $FLAG : $topic['text'] : $topic['text'])); ?>
    </p>
    <hr>
    <h2>Comment</h2>
    <?php if (count($topic['comments']) > 0): ?>
      <?php foreach($topic['comments'] as $comment): ?>
        <p><?php print($comment['text']); ?> <small>By <?php print($comment['name']); ?></small></p>
      <?php endforeach; ?>
    <?php else: ?>
      No comment
    <?php endif; ?>
  </div>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>