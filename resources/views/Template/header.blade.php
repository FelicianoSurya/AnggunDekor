<div class="container-fluid navbar">
    <nav class="container">
        <div class="d-flex justify-content-between align-items-center w-100">
            <a href="/">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/Images/LOGO/logo.png') }}" alt="logo">
                    <p class="m-0 logo-text poppins-semibold">Anggun Dekor</p>
                </div>
            </a>
            <div class="d-lg-flex d-none justify-content-around align-items-center">
                <ul class="d-flex justify-content-around align-items-center m-0">
                    <a href="/"><li>Home</li></a>
                    <a href="/products"><li>Products</li></a>
                    <a href="/services"><li>Service</li></a>
                    <a href="/portfolio"><li>Portfolio</li></a>
                    <a href="/contact-us"><li>Contact Us</li></a>
                </ul>
            </div>
            <div class="burger-icon d-lg-none">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </nav>
</div>

<div class="sidebar relative d-lg-none">
    <ul>
        <a id="closeSide" class="text-x"><li class="closeSidebar">X</li></a>
        <a href="/"><li>Home</li></a>
        <a href="/products"><li>Products</li></a>
        <a href="/services"><li>Service</li></a>
        <a href="/portfolio"><li>Portfolio</li></a>
        <a href="/contact-us"><li>Contact Us</li></a>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.burger-icon').click(function() {
            $(this).toggleClass('open');
            $('.sidebar').toggleClass('open');
        });
        $('#closeSide').click(function(){
            $(this).toggleClass('open')
            $('.sidebar').toggleClass('open');
        })
    });
</script>