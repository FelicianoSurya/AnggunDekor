<div class="container-fluid p-0 footer">
    <footer class="container d-flex flex-column flex-lg-row flex-md-row justify-content-around align-items-start p-4">
        <div>
            <p class="footer-topic">Products</p>
            <ul class="row">
                @foreach($productType as $product)
                <a class="col-6 col-lg-3 col-md-4" href="{{ url('/products') . '/' . $product->id }}"><li>{{ $product->name }}</li></a>
                @endforeach
            </ul>
        </div>
        <div>
            <p class="footer-topic">Hubungi Kami</p>
            <a target="_blank" href="https://wa.me/6281253202998"><div class="d-flex p-2">
                <img src="{{ asset('assets/Images/Icon/whatsapp.png') }}" class="mr-2" width="30" alt="">
                <p>0812 - 5320 - 2998</p>
            </div></a>
            <a target="_blank" href="https://www.instagram.com/anggundekor_bpn?igsh=MTMwMnNzNzV2OWx3cQ%3D%3D"><div class="d-flex p-2">
                <img src="{{ asset('assets/Images/Icon/instagram.png') }}" class="mr-2" width="30" alt="">
                <p>anggundekor_bpn</p>
            </div></a>
        </div>
    </footer>
</div>
