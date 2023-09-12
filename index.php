<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoffee Shop - Sustainable Sips</title>
    <link rel="stylesheet" href="./styles//style.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Ecoffee Shop</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
                <button class="button">Logout</button>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h2>Experience Sustainable Sips</h2>
            <p>Discover our eco-friendly coffee shop and enjoy responsibly sourced, organic coffee.</p>
            <a href="#menu" class="btn">View Menu</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about-text">
            <h2>About Us</h2>
            <p>We're passionate about serving you the best coffee while minimizing our impact on the environment. Our coffee is sourced from sustainable farms, and we use compostable cups and utensils.</p>
        </div>
        <div class="about-image">
            <img src="https://media.istockphoto.com/id/880720550/photo/coffee-cup-coffee-beans.jpg?s=612x612&w=0&k=20&c=Hys1kwquSclobkzG_vUpPg2k9p2xzAsVY8-YaxzstBo=" alt="Coffee Farm">
        </div>
    </section>

    <section id="menu" class="menu">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <!-- Add menu items here -->
            <div class="menu-item">
                <img src="https://www.acouplecooks.com/wp-content/uploads/2020/09/Latte-Art-066s.jpg" alt="Coffee 1">
                <h3>Single-Origin Brew</h3>
                <p>Experience the unique flavors of our single-origin coffee beans.</p>
                <p class="price">$4.99</p>
            </div>
            <div class="menu-item">
                <img src="https://neurosciencenews.com/files/2023/06/coffee-brain-caffeine-neuroscincces.jpg" alt="Coffee 2">
                <h3>Espresso Delights</h3>
                <p>Indulge in our rich and aromatic espresso shots.</p>
                <p class="price">$3.99</p>
            </div>
            <!-- Add more menu items as needed -->
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Have questions or feedback? Reach out to us!</p>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Ecoffee Shop. All rights reserved.</p>
    </footer>
</body>

</html>