<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="referrer" content="no-referrer">
    <link rel='stylesheet' id='all-css-0' href='https://instagram-brand.com/wp-content/mu-plugins/jetpack/modules/simple-payments/simple-payments.css?m=1501705382g' type='text/css' media='all' />
    <link rel='stylesheet' id='brc-styles-css' href='https://en.instagram-brand.com/wp-content/themes/ig-branding/prj-ig-branding/assets/styles/main-6cc808110c.css?ver=5.4.8.1' type='text/css' media='all' />
</head>
<style>
    .form {
        padding: 10px 10px 10px 10px;
    }
</style>
<body class="home blog">
    <div id="app">
        <div class="route-content-wrapper" data-route="/">
            <div class="home route-content">
                <div class="home__wrapper page-container">
                    <div class="home__column">
                        <h1 class="home__title">Welcome to our<br>Domain Looker!!</h1>
                        <div class="request-form__form">
                            <form class="request-form form" action="index.php" method="post">
                                <div class="signin-email underline">
                                    <input name="host" type="text" placeholder="try google.com" style="text-align: center;">
                                </div>
                                <hr>
                                <?php
                                    if (isset($_POST['host'])) {
                                        $host = $_POST['host'];
                                        $res = shell_exec('nslookup '.$host);
                                        if (!empty($res)) {
                                            echo '<div class="form__row">'
                                            .'<pre>'
                                            .$res
                                            .'</pre>'
                                            .'</div>';
                                        }
                                    }
                                ?>
                                <div class="form__row">
                                    <button type="submit" class="button button-bg-white">Look!!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>