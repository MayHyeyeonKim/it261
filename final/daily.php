<?php
//index page -> show session_start()
session_start();
include 'config.php';
include 'includes/header.php';
?>

<div id="wrapper">
  <main class="<?php echo $divClass; ?>">
    <section>
    <h2>A Week in Seattle: Coffee Shop Stroll with May</h2>
      <h3>
  Seattle's Famous Coffee Spots
  <?php echo $today; ?>.
</h3>

      <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
      <p>
        <?php echo $content; ?>
      </p>
      <p>Content Sourced from Wikipedia</p>
    </section>
  </main>
  <aside class="<?php echo $divClass; ?>">
    <h2>Check Out The Other Days</h2>

    <ul>
      <li><a href="daily.php?today=Monday">Monday</a></li>
      <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
      <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
      <li><a href="daily.php?today=Thursday">Thursday</a></li>
      <li><a href="daily.php?today=Friday">Friday</a></li>
      <li><a href="daily.php?today=Saturday">Saturday</a></li>
      <li><a href="daily.php?today=Sunday">Sunday</a></li>
    </ul>
    <h3>Recommended Coffee Pairing</h3>
    <p>
      <?php echo $pairing; ?>
    </p>
    <!-- </blockfee> -->
  </aside>
</div>

<?php include 'includes/footer.php';?>