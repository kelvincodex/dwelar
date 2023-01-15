@extends("layout.dash")
@section("content")
    <div class="container">

      <x-comp.dash.menu></x-comp.dash.menu>



        <h3 class="title">
            Select Your Favourite Plan
        </h3>

        <div class="d-none">
            <div class="icon-completed">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"></circle>
                    <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "></polyline>
                </svg>
            </div>
        </div>

        <div class="select-plan">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-plan">
                        <h3>Basic Plan</h3>
                        <div class="plan-icon">
                            <img class="icon-img" src="{{asset("assets/img/icon/bronze-medal.png")}}" alt="">
                        </div>
                        <div class="price-info">
                            <span class="parcent">$10</span>
                            <span class="price">99%<small> || per month</small></span>
                        </div>
                        <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-plan">
                        <h3>Basic Plan</h3>
                        <div class="plan-icon">
                            <img class="icon-img" src="{{asset("assets/img/icon/bronze-medal.png")}}" alt="">
                        </div>
                        <div class="price-info">
                            <span class="parcent">$10</span>
                            <span class="price">99%<small> || per month</small></span>
                        </div>
                        <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-plan">
                        <h3>Basic Plan</h3>
                        <div class="plan-icon">
                            <img class="icon-img" src="{{asset("assets/img/icon/bronze-medal.png")}}" alt="">
                        </div>
                        <div class="price-info">
                            <span class="parcent">$10</span>
                            <span class="price">99%<small> || per month</small></span>
                        </div>
                        <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-plan">
                        <h3>Basic Plan</h3>
                        <div class="plan-icon">
                            <img class="icon-img" src="{{asset("assets/img/icon/bronze-medal.png")}}" alt="">
                        </div>
                        <div class="price-info">
                            <span class="parcent">$10</span>
                            <span class="price">99%<small> || per month</small></span>
                        </div>
                        <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-plan">
                        <h3>Basic Plan</h3>
                        <div class="plan-icon">
                            <img class="icon-img" src="{{asset("assets/img/icon/bronze-medal.png")}}" alt="">
                        </div>
                        <div class="price-info">
                            <span class="parcent">$10</span>
                            <span class="price">99%<small> || per month</small></span>
                        </div>
                        <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-plan">
                        <h3>Basic Plan</h3>
                        <div class="plan-icon">
                            <img class="icon-img" src="{{asset("assets/img/icon/bronze-medal.png")}}" alt="">
                        </div>
                        <div class="price-info">
                            <span class="parcent">$10</span>
                            <span class="price">99%<small> || per month</small></span>
                        </div>
                        <a href="#" class="btn-hyipox-medium price-button">Invest now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5">
                <h3 class="title">
                    Add New Card
                </h3>
                <div class="add-credit-card card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Card Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="•••• •••• •••• ••••">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Name on Card</label>
                                        <input type="email" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="Farzana Mukta">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group expire-date-elem">
                                        <label for="inputDate">Expire date</label>
                                        <div class="form-row">
                                            <div class="form-group col-xl-6 col-lg-6 col-6">
                                                <input type="text" class="form-control" id="inputdate" placeholder="MM">
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-6">
                                                <input type="text" class="form-control" id="inputZip" placeholder="YY">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Card Code</label>
                                        <input type="email" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="CVC">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-hyipox-medium btn-add-new-card">Add New Account</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <h3 class="title">
                    Enter Your Amount
                </h3>
                <div class="last-step">
                    <div>
                        <label>Enter Your Amount</label>
                        <form>
                            <span class="currency-symbol" id="basic-addon1">$</span>
                            <input type="text" class="inputted-amount" value="10">
                            <button class="dropdown-toggle displayed-selected-currency" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                USD
                            </button>
                            <div class="dropdown-menu currency-select-list" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item single-currency-select selected-currency active" href="#" data-currency="usd">USD</a>
                                <a class="dropdown-item single-currency-select" href="#" data-currency="eur">EUR</a>
                                <a class="dropdown-item single-currency-select" href="#" data-currency="btc">BTC</a>
                                <a class="dropdown-item single-currency-select" href="#" data-currency="eth">ETH</a>
                            </div>
                        </form>
                        <label>Select Your Payment Method</label>
                        <div class="dropdown show">

                            <a class="dropdown-toggle displayed-selected-plan" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="payment-method-icon">
                                            <img src="{{asset("")}}assets/img/currency/001-bitcoin.png" alt="">
                                        </span>
                                Bitcoin (CryptoCurrency)
                            </a>
                            <div class="dropdown-menu plan-select-list" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item single-select-plan selected-plan active" href="#">Bitcoin (CryptoCurrency)</a>
                                <a class="dropdown-item single-select-plan" href="#">Litecoin (CryptoCurrency)</a>
                                <a class="dropdown-item single-select-plan" href="#">Dash (CryptoCurrency)</a>
                                <a class="dropdown-item single-select-plan" href="#">Enjin (CryptoCurrency)</a>
                                <a class="dropdown-item single-select-plan" href="#">Paypal (Local Currency)</a>
                                <a class="dropdown-item single-select-plan" href="#">Credit Card (Local Currency)</a>
                            </div>
                        </div>

                    </div>
                    <div class="calculation-content">
                        <h4 class="title">your calculation statement</h4>
                        <ul>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="list-title">
                                                Total Percent
                                            </span>
                                <span class="list-descr">250.00%</span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="list-title">
                                                Daily Profits
                                            </span>
                                <span class="list-descr">$0.05</span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="list-title">
                                                Net Profit
                                            </span>
                                <span class="list-descr">$25.00</span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="list-title">
                                                Total Return
                                            </span>
                                <span class="list-descr">$35.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="finish-button">
                    <a href="#" class="btn-hyipox-2">Let it finish</a>
                </div>
            </div>
        </div>

    </div>
@endsection
