<div class="container-fluid mt-5">
    <div class="container">
        <section class="container-fluid" id="flash-section">
            <div class="container">
                <div class="row position-relative" id="flash_title">
                    <div class="col-12 d-flex gap-4">
                        <div class="bg-danger" style="width: 20px; height:40px">
                        </div>
                        <span class="d-flex align-items-center text-danger">This month</span>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="col-12">
                                <h1 class="my-auto">Best Selling Products</h1>
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 end-0">
                            <button class="bg-danger">View All</button>
                        </div>
                    </div>
                    
                </div>

                <div class="row flex-nowrap overflow-y-hidden overflow-x-hidden pt-3" id="flash_product">
                    {{-- Cards --}}
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('assets/images/product1.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                            <p class="card-text">$200</p>
                            <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('assets/images/keyboard.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                            <p class="card-text">$200</p>
                            <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('assets/images/desktop.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                                <p class="card-text">$200</p>
                                <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('assets/images/chair.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                            <p class="card-text">$200</p>
                            <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('assets/images/chair.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                            <p class="card-text">$200</p>
                            <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <div class="col-12 pt-5">
            <a href="#" class="btn btn-danger position-absolute start-50">View all products</a>
        </div>
    </div>
</div>