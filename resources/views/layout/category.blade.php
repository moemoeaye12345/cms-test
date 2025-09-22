<section class="container-fluid py-4" id="category-section">
    <div class="container">
        <div class="row position-relative" id="flash_title">
            <div class="col-12 d-flex gap-4">
                <div class="bg-danger" style="width: 20px; height:40px">
                </div>
                <span class="d-flex align-items-center text-danger">Categories</span>
            </div>
            <div class="col-6">
                <div class="d-flex">
                    <div class="col-12">
                        <h1 class="my-auto">Browse By Category</h1>
                    </div>
                </div>
                <div class="position-absolute bottom-0 end-0">
                    <button class="btn border rounded-pill p-3"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="btn border rounded-pill p-3"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
            
        </div>

        <div class="row pt-3" id="product-category">
            {{-- Cards --}}
            <div class="col-6 col-md-3 _card">
                <div class="card">
                        <img src="{{ asset('assets/images/phone.png') }}" class="card-img-top _card-image" alt="...">
                        <p class="card-text">Phones</p>
                </div>
            </div>
            <div class="col-6 col-md-3 _card">
                <div class="card">
                        <img src="{{ asset('assets/images/computer.png') }}" class="card-img-top _card-image" alt="...">
                        <p class="card-text">Computers</p>
                </div>
            </div>
            <div class="col-6 col-md-3 _card">
                <div class="card">
                        <img src="{{ asset('assets/images/smartwatch.png') }}" class="card-img-top _card-image" alt="...">
                        <p class="card-text">SmartWatch</p>
                </div>
            </div>
            <div class="col-6 col-md-3 _card">
                <div class="card">
                        <img src="{{ asset('assets/images/camera.png') }}" class="card-img-top _card-image" alt="...">
                        <p class="card-text">Camera</p>
                </div>
            </div>
            <div class="col-6 col-md-3 _card">
                <div class="card">
                        <img src="{{ asset('assets/images/headphone.png') }}" class="card-img-top _card-image" alt="...">
                        <p class="card-text">HeadPhones</p>
                </div>
            </div>
            <div class="col-6 col-md-3 _card">
                <div class="card">
                        <img src="{{ asset('assets/images/gaming.png') }}" class="card-img-top _card-image" alt="...">
                        <p class="card-text">Gaming</p>
                </div>
            </div>
        </div>
    </div>    
</section>