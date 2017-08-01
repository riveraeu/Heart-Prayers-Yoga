<html lang="en">
  <head>
    <title>Heart Prayers Yoga</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Group and private yoga classes in Marin County, taught by Jane Rivera ">
    <meta name="keywords" content="Heart Prayers Yoga, Marin Yoga Classes, Yoga Classes, Yoga, Jane Rivera,">
    <meta name="author" content="Jane Rivera">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    <!-- Bootstrap CDN -->
    <script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/contact-page.css" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">Heart Prayers Yoga</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="about.html">About</a></li>
            <li><a href="classes.html">Classes</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <?php include('../assets/php/form_process.php'); ?>
    <div class="container">
      <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3>Contact</h3>
        <fieldset>
          <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
          <span class="error"><?= $name_error ?></span>
        </fieldset>
        <fieldset>
          <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
          <span class="error"><?= $email_error ?></span>
        </fieldset>
        <fieldset>
          <textarea value="<?= $message ?>" name="message" tabindex="5">
          </textarea>
        </fieldset>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
        <div class="success"><?= $success ?></div>
      </form>
    </div>
  </body>
</html>
