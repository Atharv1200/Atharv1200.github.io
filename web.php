<?php
// header.php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>My Static Webpage</title>';
echo '<link rel="stylesheet" href="style.css">'; // Optional if you want to use external CSS
echo '</head>';
echo '<body>';
echo '<header>';
echo '<nav>';
echo '<ul>';
echo '<li><a href="#home">Home</a></li>';
echo '<li><a href="#about">About</a></li>';
echo '<li><a href="#contact">Contact</a></li>';
echo '</ul>';
echo '</nav>';
echo '</header>';
?>

<main>
    <section id="home">
        <h1>Welcome to My Static Webpage!</h1>
        <p>This is a simple webpage built with PHP and HTML.</p>
    </section>
    <section id="about">
        <h2>About Us</h2>
        <p>This is an example of a static webpage using PHP for basic structure.</p>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us via email or phone!</p>
    </section>
</main>

<?php
// footer.php
echo '<footer>';
echo '<p>&copy; 2025 My Static Webpage. All rights reserved.</p>';
echo '</footer>';
echo '</body>';
echo '</html>';
?>
