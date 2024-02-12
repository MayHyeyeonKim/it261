<?php
include('config.php');
include('includes/header.php');
?>
<style>
.wrapper {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    flex-direction: column;
    min-height: 50vh; 
    max-width: 800px;
    margin: 20px auto; 
    padding: 40px;
    background-color: #fffaf0; 
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    text-align: center;
}

main.thx {
    align-items: center;
}
main.thx h1 {
    color: #5D4037; 
    font-size: 2.5rem; 
    margin-bottom: 0.8em; 
}

main.thx p {
    color: #5D4037; 
    font-size: 1.2rem; 
    line-height: 1.6; 
}

footer {
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 10px 0;
}

footer a {
    color: #5D4037; 
    text-decoration: none; 
    margin: 0 10px; 
}

footer a:hover {
    text-decoration: underline; 
}
</style>

<div class="wrapper">
    <main class="thx">
    <h1>Thank You!!</h1>
    <p>I appreciate and will get back to you within a couple of days!</p>
    </main>
</div>

<?php
include('includes/footer.php')
?>
    