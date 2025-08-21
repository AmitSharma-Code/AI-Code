woocommerce shop page te banner image

// Add banner image on WooCommerce Shop Page
add_action( 'woocommerce_before_main_content', 'custom_shop_banner', 5 );
function custom_shop_banner() {
    if ( is_shop() ) {
        echo '<div class="shop-banner">';
        echo '<img src="https://localseodevelopers.com/bysache/wp-content/uploads/2025/08/New-Project-12.jpg" alt="Shop Banner">';
        echo '</div>';
    }
}
.shop-banner img {
    width: 100%;
    height: auto;
    max-height: 600px; /* keeps proportion */
    object-fit: cover;
}


