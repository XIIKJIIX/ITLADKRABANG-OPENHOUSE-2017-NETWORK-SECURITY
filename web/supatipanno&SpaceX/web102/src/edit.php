<?php
session_start();
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

if (isset($_POST['update'])) {
  $topic['name'] = $_POST['name'];
  $topic['text'] = $_POST['text'];
  $session_topic[$id] = $topic;
  // Update session
  $_SESSION['topic'] = $session_topic;
  $is_update = true;
} else if (!$topic['can_edit']) {
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
    <?php if (isset($is_update)): ?>
    <div class="alert alert-success" role="alert">
      <strong>Well done!</strong> You successfully update this topic
    </div>
    <?php endif; ?>
    <form method="post" action="">
      <div class="form-group">
        <label for="name">Topic name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter topic name" value="<?php print($topic['name']); ?>">
        <small class="form-text text-muted">New topic name</small>
      </div>

      <div class="form-group">
        <label for="text">Topic text</label>
        <textarea name="text" class="form-control" id="text" rows="3"><?php print($topic['text']); ?></textarea>
      </div>
      <input type="hidden" name="id" value="<?php print($id); ?>">
      <button type="submit" name="update" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>