<?php

$FLAG = '${Fl@gH@1l0W0r1D}';

if (isset($_POST['guest_login'])) {
  $data = [
    'name' => 'ผู้เยี่ยมชม',
    'role' => 'guest'
  ];

  // Encode
  $data = base64_encode(json_encode($data));
  // Set is_login
  $is_login = true;
  // Set cookie
  setcookie('data', $data, 0);
  // Decode
  $data = json_decode(base64_decode($data));
} else if (isset($_POST['logout'])) {
  // Delete cookie
  if (isset($_COOKIE['data'])) {
    setcookie('data', null, -1);
  }
  $is_login = false;
} else if (isset($_POST['login'])) {
  // No username, password login
  $message = 'Error! Something went wrong';
} else {
  $is_login = isset($_COOKIE['data']);
  $data = json_decode(base64_decode($_COOKIE['data']));
}


if ($is_login) {
  // If role is admin or root. Win !
  if (in_array($data->role, ['admin', 'administrator', 'root'])) {
    // Modify name to flag
    $data->name = $FLAG;
  }
}

?>
<html>
  <head>
    <title>Spec X - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <?php if(isset($message)) { print($message); } ?>
        <?php if ($is_login): ?>
          Hello, <?php print($data->name); ?>
          <p></p>
          <form method="POST">
            <button name="logout">
              Logout
            </button>
          </form>
        <?php else: ?>
          <form method="post" class="login-form">
            <input type="text" placeholder="username" value="admin"/>
            <input type="password" placeholder="password"/>
            <button name="login">login</button>
            <p></p>
            <button name="guest_login">Or guest login</button>
            <p class="message">Not registered? <a href="#">Please contact your admin</a></p>
          </form>
        <?php endif; ?>  
      </div>
    </div>
  </body>
</html>