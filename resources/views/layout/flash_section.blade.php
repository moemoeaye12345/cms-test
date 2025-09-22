<div class="container-fluid mt-5">
    <div class="container">
        <section class="container-fluid" id="flash-section">
            <div class="container">
                <div class="row position-relative" id="flash_title">
                    <div class="col-12 d-flex gap-4">
                        <div class="bg-danger" style="width: 20px; height:40px">
                        </div>
                        <span class="d-flex align-items-center text-danger">Today's</span>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="col-12 col-md-6 d-flex mr-10 position-relative">
                                <div class="col-12 col-md-4 bg-danger">
                                    <h1 class="text-nowrap">Flash Sales</h1>
                                </div>
                                <div class="col-12 col-md-8 d-flex bg-primary position-absolute end-0 _clock">
                                        <div class="col-3 d-block p-3">
                                            <p class="mb-0">Days</p>
                                            <h1>03</h1>
                                        </div>
                                        <p class="_dot">:</p>
                                        <div class="col-3 d-block p-3">
                                            <p class="mb-0">Hours</p>
                                            <h1>19</h1>
                                        </div>
                                        <p class="_dot">:</p>
                                        <div class="col-3 d-block p-3">
                                            <p class="mb-0">Minutes</p>
                                            <h1>19</h1>
                                        </div>
                                        <p class="_dot">:</p>
                                        <div class="col-3 d-block p-3">
                                            <p class="mb-0">Seconds</p>
                                            <h1>56</h1>
                                        </div>
                                        <p class="_dot">:</p>
                                </div> 
                            </div>
                            <div class="col-12 col-md-6 positoin-relative">
                                <div class="position-absolute bottom-0 end-0">
                                    <button class="btn border rounded-pill p-3"><i class="fa-solid fa-arrow-left"></i></button>
                                    <button class="btn border rounded-pill p-3"><i class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                </div>

                <div class="row flex-nowrap overflow-y-hidden overflow-x-hidden pt-3" id="flash_product">
                    {{-- Cards --}}
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-head position-relative">
                                <div class="card-image">
                                    <img src="{{ asset('assets/images/product1.png') }}" class="card-img-top" alt="...">
                                </div>
                                <button class="btn rounded-0 position-absolute bottom-0 bg-black text-white _add">
                                    Add to card
                                </button>
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                            <p class="card-text">$200</p>
                            <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                            <div class="position-absolute top-0 start-0 bg-danger rounded-pill _percent">
                                <p class="text-white">-40%</p>
                            </div>
                            <div class="position-absolute top-0 end-0 _heart">
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-head position-relative">
                                <div class="card-image">
                                    <img src="{{ asset('assets/images/keyboard.png') }}" class="card-img-top" alt="...">
                                </div>
                                <button class="btn rounded-0 position-absolute bottom-0 bg-black text-white _add">
                                    Add to card
                                </button>
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                                <p class="card-text">$200</p>
                                <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                            <div class="position-absolute top-0 start-0 bg-danger rounded-pill _percent">
                                <p class="text-white">-40%</p>
                            </div>
                            <div class="position-absolute top-0 end-0 _heart">
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-head position-relative">
                                <div class="card-image">
                                    <img src="{{ asset('assets/images/desktop.png') }}" class="card-img-top" alt="...">
                                </div>
                                <button class="btn rounded-0 position-absolute bottom-0 bg-black text-white _add">
                                    Add to card
                                </button>
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                                <p class="card-text">$200</p>
                                <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                            <div class="position-absolute top-0 start-0 bg-danger rounded-pill _percent">
                                <p class="text-white">-40%</p>
                            </div>
                            <div class="position-absolute top-0 end-0 _heart">
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-head position-relative">
                                <div class="card-image">
                                    <img src="{{ asset('assets/images/chair.png') }}" class="card-img-top" alt="...">
                                </div>
                                <button class="btn rounded-0 position-absolute bottom-0 bg-black text-white _add">
                                    Add to card
                                </button>
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                                <p class="card-text">$200</p>
                                <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                            <div class="position-absolute top-0 start-0 bg-danger rounded-pill _percent">
                                <p class="text-white">-40%</p>
                            </div>
                            <div class="position-absolute top-0 end-0 _heart">
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 _card">
                        <div class="card">
                            <div class="card-head position-relative">
                                <div class="card-image">
                                    <img src="{{ asset('assets/images/chair.png') }}" class="card-img-top" alt="...">
                                </div>
                                <button class="btn rounded-0 position-absolute bottom-0 bg-black text-white _add">
                                    Add to card
                                </button>
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title">HAVIT HV-G92 Gamepad</h5>
                                <p class="card-text">$200</p>
                                <span style="color: orange; font-size:20px;">&#9733; &#9733; &#9733; &#9733; &#9733; (88)</span>
                            </div>
                            <div class="position-absolute top-0 start-0 bg-danger rounded-pill _percent">
                                <p class="text-white">-40%</p>
                            </div>
                            <div class="position-absolute top-0 end-0 _heart">
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="rounded-circle">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
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