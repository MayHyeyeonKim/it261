<?php
include('includes/header.php');

switch(THIS_PAGE) {
  case 'index.php':
      $title = 'May\'s Home';
      $body = 'home';
      break;

  case 'about.php':
      $title = 'About Page';
      break;

  case 'daily.php':
      $title = 'May\'s Daily Page';
      $body = 'daily inner';
      break;

  case 'project.php':
      $title = 'project Page';
      break;

  case 'contact.php':
      $title = 'May\'s Contact Page';
      $body = 'contact inner';
      break;

  case 'gallery.php':
      $title = 'Gallery Page';
      break;
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

if (isset($_GET['today'])) {
  $today = $_GET['today'];
} else {
  $today = date('l');
}

/* Switch page */
switch($today) {
    case 'Thursday': 
        $tourist_attractions = 'Space Needle';
        $pic = 'SpaceNeedle.png';
        $alt = 'Space Needle';
        $divClass = 'SpaceNeedleCSS';
        $fee = 'General Space Needle tickets range in price from $24.50 to $37.50, depending on age, when you buy, and whether you are buying tickets for seniors or children. Tickets are available online, at the Space Needle itself and as part of a few different package deals, if you\'re looking to get more bang for your buck.';
        $content = '<b>The Space Needle</b>, an iconic landmark in Seattle, Washington, stands at 605 feet tall and offers breathtaking panoramic views of the city and surrounding landscapes. Built for the 1962 World\'s Fair, its futuristic design continues to attract visitors seeking a unique observation experience, complete with rotating glass floors and an outdoor observation deck. The Space Needle remains a symbol of innovation and a must-visit destination in the heart of Seattle.';
        break;

    case 'Friday': 
        $tourist_attractions = 'Chihuly Garden and Glass';
        $pic = 'Chihuly.png';
        $alt = 'Chihuly Garden and Glass';
        $divClass = 'ChihulyCSS';
        $fee = 'USD18 - USD29';
        $content = '<b>Chihuly Garden and Glassr</b>, located in Seattle, showcases the breathtaking glass artwork of Dale Chihuly in a vibrant garden setting. This immersive exhibit offers a unique blend of nature and art, allowing visitors to experience the brilliance of Chihuly\'s creative vision through stunning glass sculptures and installations. A must-visit destination for art enthusiasts seeking a captivating fusion of color and form.';
        break;

    case 'Saturday': 
        $tourist_attractions = 'Pike Place Market'; 
        $pic = 'PikePlace.png';
        $alt = 'Pike Place Market';
        $divClass = 'PikePlaceCSS';
        $fee = 'There is no entrance or admission fee to Pike Place Market. Everyone is welcome to visit and experience our 9-acre public market. Shops, restaurants, specialty food stands, farmers, and craftspeople offer a wide selection of products for purchase.';
        $content = '<b>Pike Place Market</b>, situated in downtown Seattle, is a historic and bustling public market renowned for its vibrant atmosphere and diverse offerings. Established in 1907, it features a wide array of fresh produce, artisan goods, and local crafts, making it a beloved destination for both locals and visitors. With its iconic fish-throwing tradition and charming storefronts, Pike Place Market remains a vibrant hub of culinary and cultural experiences.';
        break;

    case 'Sunday':
        $tourist_attractions = 'Kerry Park'; 
        $pic = 'KerryPark.png';
        $alt = 'Kerry Park';
        $divClass = 'KerryParkCSS';
        $fee = 'Entrance to the park is free of charge';
        $content = '<b>Kerry Park</b>, located on Queen Anne Hill in Seattle, provides a postcard-perfect viewpoint of the city\'s skyline, Space Needle, and Mount Rainier. Renowned for its breathtaking panoramic views, this small park offers an ideal spot for photography enthusiasts and those seeking a stunning backdrop of Seattle\'s iconic landmarks. Capture the beauty of the city and its surroundings from the scenic Kerry Park.';
        break;

    case 'Monday': 
        $tourist_attractions = 'Seattle Aquarium'; 
        $pic = 'SeattleAquarium.png';
        $alt = 'Seattle Aquarium';
        $divClass = 'SeattleAquariumCSS';
        $fee = '0 – 3	Free <br>
        4 – 12	$19.75 <br>
        13 – 64	$29.75 <br>
        65+	$24.75';
        $content = '<b>The Seattle Aquarium</b>, situated on Pier 59 along the waterfront, immerses visitors in the fascinating marine life of the Pacific Northwest. Established in 1977, this popular attraction features captivating exhibits showcasing diverse sea creatures, from playful otters to mesmerizing jellyfish. With a focus on conservation and education, the Seattle Aquarium offers an engaging and informative experience for all ages.';
        break;
    case 'Tuesday': 
        $tourist_attractions = 'Gas Works Park'; 
        $pic = 'GasWorksPark.png';
        $alt = 'Gas Works Park';
        $divClass = 'GasWorksParkCSS';
        $fee = 'Entrance to the park is free of charge';
        $content = '<b>Gas Works Park</b>, located on the shores of Lake Union in Seattle, is a unique public park that repurposes an old gasification plant into an industrial-chic landscape. Known for its iconic remnants of the gas plant, the park offers panoramic views of the city skyline, making it a popular spot for picnics, kite flying, and enjoying the outdoors. Its industrial heritage and scenic beauty create a distinctive and memorable urban park experience.';

        break;
    case 'Wednesday': 
        $tourist_attractions = 'Underground Tour'; 
        $pic = 'UndergroundTour.png';
        $alt = 'The Underground Tour';
        $divClass = 'UndergroundTourCSS';
        $fee = '$19 Adult (18-59 yrs) <br >$16 Senior (60+ yrs) ';
        $content = '<b>The Underground Tour</b> in Seattle takes visitors beneath the city\'s surface to explore the remnants of 19th-century streets and storefronts. Led by knowledgeable guides, this subterranean journey provides a fascinating glimpse into Seattle\'s history, including tales of the Great Fire of 1889 and the city\'s unique evolution. Discover the hidden stories and architectural remnants that make the Underground Tour a captivating and educational experience.';
        break;
}

?>
<div id="wrapper">
<main class="<?php echo $divClass; ?>">
    <section>
      <h2>A week in Seattle with May!</h2>
      <h3>
        We are going to the <?php echo $tourist_attractions; ?> on <?php echo $today; ?>.
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
    <h3> Admission fee or Entrance fee</h3>
    <!-- <blockfee>
      <p>
        <?php echo $fee; ?>
      </p>
    </blockfee> -->
  </aside>
</div>
<?php include 'includes/footer.php'; ?>