<?php 
include('config.php');
include('./includes/header.php'); ?>

<div id="wrapper">
  <div id="hero">
    <img src="images/twelve.jpg" alt="twelve">
  </div>


  <main class="index">
        <h1>Random Image Function Page</h1>
        <?= random_images($photos);?>
        <p>Lorem ipsum dolor sit amet consectetur 
        Recusandae dolor molestiae ipsum voluptate deserunt quis, suscipit perferendis veritatis voluptatem, modi, corrupti pariatur totam similique consequuntur accusantium optio esse adipisci quae unde consequatur minima expedita quod neque accusamus? Maiores.
        Doloribus, maiores! Itaque, error ex sint illo ut eius dolor nemo molestias veniam, ab id quisquam est odio eaque blanditiis. Nesciunt ipsum enim adipisci. Laborum exercitationem sit a ut aperiam?
        </p>

    </main>

  <aside>
    <h3>May's Info!</h3>
    <ul>
      <li>
        <a href="https://github.com/mayhyeyeonkim" title="Link to Github Profile">
          GitHub Profile
        </a>
      </li>
      <li>
        <a href="https://github.com/mayhyeyeonkim/it261" title="Link to it261 GitHub repository">
          it261 GitHub repository
        </a>
      </li>
  </aside>
</div>
  <?php include './includes/footer.php';