<x-master-layout>
    <x-slot name="mainContent">
        <div class="hero-wrap welcome" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 d-flex align-items-center justify-content-center">
                        <div class="text w-100 text-center">
                            <h1 class="mb-4">
                                Why limit 
                                <span class="keyword">happy</span> 
                                to an 
                                <span class="keyword">hour!!</span>
                                <br>
                                Don't Worry 
                                <span class="keyword">Beer Happy</span> 
                                at 
                                <span class="keyword">Dukes</span>.        
                            </h1>
                            <p>
                                <a href="#" class="more btn btn-warning py-2 px-4">
                                    Order Now
                                </a>
                                &nbsp;
                                <a href="#" class="more btn btn-warning btn-outline-white py-2 px-4">
                                    Read More
                                </a>
                            </p>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    
        <div class="container" id="info">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{ asset('images/variety.jpeg') }}" class="icon" alt="Variety Icon">
                    <h5>Large Variety</h5>
                    <p class="text-center">
                        There's a variety of popular drinks available, guaranteeing that you'll find the drink of your choice anyday anytime.
                    </p>
                </div>
                
                <div class="col-sm-4 mid">
                    <img src="{{ asset('images/prices.jpg') }}" class="icon" alt="Prices Icon">
                    <h5>Best Prices</h5>
                    <p class="text-center">
                        With prices being whole sale for RRP stocks, the prices are wallet friendly and enought to make Dukes your local and frequent store for your daily Liquor needs;)
                    </p>
                </div>
                
                <div class="col-sm-4">
                    <img src="{{ asset('images/delivery.jpg') }}" class="icon" alt="Delivery Icon">
                    <h5>Fast Delivery</h5>
                    <p class="text-center">Give us the location and leave the rest to us. Our group of Riders will get it to your doorstep in time for your party.</p>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
