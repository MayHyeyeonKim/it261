<link href="css/login.css" type="text/css" rel="stylesheet">    

<footer>
  <div id="inner-footer">
    <ul>
      <li>Copyright &copy;
        <?php echo date('Y'); ?>
      </li>
      <li>All Rights Reserved</li>
      <li><a href="index.php">Web Design by May</a></li>
      <li><a id="html-checker" href="#">HTML Validation</a></li>
      <li><a id="css-checker" href="#">CSS Validation</a></li>
      <li><a href="https://https://github.com/MayHyeyeonKim/it261" target="_blank"
          title="Opens Github in new tab">GitHub</a></li>
    </ul>
  </div>
</footer>
<script>
  document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
  document.getElementById("css-checker").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>

</body>

</html>