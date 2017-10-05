<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Heart Prayers Yoga | Classes</title>
    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="description" content=" Group and private yoga classes in Marin County, taught by Jane Rivera ">
    <meta name="keywords" content="Heart Prayers Yoga, Marin Yoga Classes, Yoga Classes, Yoga, Jane Rivera,">
    <meta name="author" content="Jane Rivera">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS and Javascript -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVaRt8QCO_EZ3Up4jMEmt6WurvKAGRVT0"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="assets/javascript/classes-js.js"></script>
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Heart</span> Prayers Yoga</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li class="current"><a href="classes.php">Classes</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="main-classes">
      <div class="container">
        <p>I offer two different classes weekly at the Osher Marin JCC, <b>Restorative Yoga</b> and <b>Gentle Yoga</b>:</p>
        <div class="classes">
          <p><b>Gentle Yoga: </b> Class begins in a restorative pose allowing the body to deeply relax.
          Pranayama is used to establish the breath and clam the mind.
          Warming up, we begin a moving meditation of gentle asanas to move prana, or life force throughout the body, and awaken the abdominal core.
          Yogic philosophy is woven thoughout the class.
          We end in Shavassana with a final meditation.
          All levels and beginners are welcome.</p>
          <p><b>Class Time: </b>Monday 11:10am - 12:10pm</p><img src="assets/img/gentle_class_image.jpeg" alt="gentle class picture">
        </div>
        <div class="classes">
          <p><b>Restorative Yoga: </b> This is a theraputic class desgined to bring deep relaxation and healing to mind, body, and spirit.
          Inner balance and peace are restored by using yogic techniques of breath work, visualization, and meditation.
          This is not a movement class and may be completed in a chair if desired.
          All levels and beginners are welcome.</p>
          <p><b>Class Time: </b>Thursday 5:00pm - 6:00pm and Sunday 4:00pm - 5:00pm</p><img src="assets/img/restorative_class_pic.jpg" alt="gentle class picture">
        </div>
      </div>
    </section>

    <section id="overlay">
      <div class="container">
        <div id="map"></div>
      </div>
    </section>

    <section id="private-lesson">
      <div class="container">
        <div class="dark">
          <h1 class="page-title">Private Lesson</h1><br>
          <p>Private Gentle and Restorative sessions offered at your home in Marin County on Mondays and Fridays,
          between 9:00 am - 5:00 pm. $75.00 per hour. Contact Jane to set up an appointment.</p>
          <?php include('assets/php/form_process.php'); ?>
          <form id="contact-form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h3><b>Contact</b></h3>
            <fieldset>
              <input placeholder="Your name" type="text" name="name" value="<?= $name ?>">
              <div class="error"><?= $name_error ?></div>
            </fieldset>
            <fieldset>
              <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>">
              <div class="error"><?= $email_error ?></div>
            </fieldset>
            <fieldset>
              <textarea placeholder="Message" value="<?= $message ?>" name="message"></textarea>
            </fieldset>
            <fieldset>
              <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
            <div class="success"><?= $success ?></div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <p>Designed by Eugene Rivera</p>
    </footer>
  </body>
</html>
