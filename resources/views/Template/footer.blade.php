<div class="container-fluid p-0 footer">
    <footer class="container d-flex justify-content-around align-items-start p-4">
        <div>
            <p>Products</p>
            <ul>
                @foreach($productType as $product)
                <a href="{{ url('/products') . '/' . $product->id }}"><li>{{ $product->name }}</li></a>
                @endforeach
            </ul>
        </div>
        <div>
            <a href="/services"><p>Service</p></a>
        </div>
        <div>
            <a href="/portfolio"><p>Portfolio</p></a>
        </div>
        <div>
            <p>Contact us</p>
            <p>0888 - 8888 - 8888 (WA)</p>
        </div>
    </footer>
</div>