<!-- ===== हेडर ===== -->
<header class="esko-header">
    <div class="logo">MinaHerb <span>Industries</span></div>
    <nav class="esko-nav">
        <a href="#" class="active">Home</a>
        <a href="#">Products</a>
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
</header>

<!-- ===== हीरो बैनर ===== -->
<section class="esko-hero">
    <h1>Pure & Powerful Herbal Solutions</h1>
    <p>Discover the authentic range of MinaHerb products — crafted with nature's finest ingredients for your wellness.</p>
    <a href="#" class="btn-esko">Explore Our Range →</a>
</section>

<!-- ===== प्रोडक्ट लिस्टिंग (यहाँ अपना लूप डालें) ===== -->
<section class="esko-section">
    <h2>Our Premium Products</h2>
    <p class="subtitle">Inspired by nature, backed by science</p>
    
    <div class="esko-grid">
        <!-- 🔁 इस एक कार्ड को अपने प्रोडक्ट लूप (जैसे PHP foreach) से बदलें -->
        <div class="esko-card">
            <img src="product-image.jpg" alt="Product Name">
            <h3>MinaHerb NIVA Soap</h3>
            <div>
                <span class="price">$12.50</span>
                <span class="old-price">$15.00</span>
            </div>
            <!-- ये नीचे वाला बटन आपके कार्ट फंक्शन को कॉल करे -->
            <a href="{{ add_to_cart_link }}" class="btn-esko">Add to Cart</a>
        </div>
        <!-- 🔁 लूप यहाँ खत्म होगा -->

        <!-- आप चाहें तो डमी कार्ड डालकर टेस्ट कर सकते हैं -->
        <div class="esko-card">
            <img src="https://via.placeholder.com/200" alt="Product">
            <h3>Herbal Hair Oil</h3>
            <div><span class="price">$18.00</span></div>
            <a href="#" class="btn-esko">Add to Cart</a>
        </div>
        <div class="esko-card">
            <img src="https://via.placeholder.com/200" alt="Product">
            <h3>Skin Glow Cream</h3>
            <div><span class="price">$22.50</span></div>
            <a href="#" class="btn-esko">Add to Cart</a>
        </div>
    </div>
</section>

<!-- ===== सर्विस / खासियत (कोड न बदलें, सिर्फ क्लास) ===== -->
<section class="esko-section dark">
    <h2>Why Choose MinaHerb?</h2>
    <div class="esko-grid" style="grid-template-columns: repeat(3, 1fr);">
        <div class="esko-card" style="border-top-color: #F4A261;">
            <h3>🌿 100% Natural</h3>
            <p>Pure herbs sourced from organic farms.</p>
        </div>
        <div class="esko-card" style="border-top-color: #E76F51;">
            <h3>🔬 Lab Tested</h3>
            <p>Every batch passes strict quality checks.</p>
        </div>
        <div class="esko-card" style="border-top-color: #2A9D8F;">
            <h3>🚚 Fast Delivery</h3>
            <p>Free shipping on orders above $50.</p>
        </div>
    </div>
</section>

<!-- ===== फुटर ===== -->
<footer class="esko-footer">
    <div>
        <h4>MinaHerb Industries</h4>
        <p style="color:#888;">Natural wellness for every home.</p>
    </div>
    <div>
        <h4>Quick Links</h4>
        <a href="#">About Us</a>
        <a href="#">Products</a>
        <a href="#">Blog</a>
    </div>
    <div>
        <h4>Support</h4>
        <a href="#">Contact</a>
        <a href="#">Returns</a>
        <a href="#">Privacy Policy</a>
    </div>
    <div>
        <h4>Connect</h4>
        <a href="#">📧 info@minaherb.com</a>
        <a href="#">📞 +91-XXXX-XXXXXX</a>
    </div>
    <div class="copyright">
        © 2026 MinaHerb Industries. All rights reserved.
    </div>
</footer>