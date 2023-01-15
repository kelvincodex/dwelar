@extends("layout.dash")
@section("content")
    <div class="container">

        <x-comp.dash.menu></x-comp.dash.menu>
        <div class="user-statics">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/002-cash.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$9,568.00</span>
                            <span class="text">Ultimate Balance</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/003-credit-card.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$7,480.00</span>
                            <span class="text">Total Payout</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/001-donation.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$24k.00</span>
                            <span class="text">Deposits Total</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/004-hourglass.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$242.00</span>
                            <span class="text">Pending Amount</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/005-percentage.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$465.00</span>
                            <span class="text">Interest Earn</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/006-wage.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$158.00</span>
                            <span class="text">Total Earning</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/007-referral.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$814.00</span>
                            <span class="text">Referral Earings</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="{{asset("assets-close/img/icon/008-transfer.png")}}" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$534.00</span>
                            <span class="text">Fund Transfer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-4 benmathew-col">
                <h3 class="title">
                    Users Logs
                </h3>
                <div class="user-benmathew">
                    <div class="single-data">
                        <span class="title">Registration Date</span>
                        <span class="data">Sep-10-2014 11:20:37</span>
                    </div>
                    <div class="single-data">
                        <span class="title">Last Login</span>
                        <span class="data">Jul-05-2019 07:06:36</span>
                    </div>
                    <div class="single-data">
                        <span class="title">Current Login</span>
                        <span class="data">Jul-06-2019 02:47:23</span>
                    </div>
                    <div class="single-data">
                        <span class="title">Last Access IP</span>
                        <span class="data">27.57.18.1</span>
                    </div>
                    <div class="single-data">
                        <span class="title">Current Access IP</span>
                        <span class="data">122.175.131.51</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 chart-col">
                <div class="transaction-chart">
                    <h3 class="title">
                        Transaction & Deposit
                    </h3>
                    <div class="charts-for-misco">
                        <canvas id="chart-0"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="transactions-table">
                    <h3 class="title">
                        Recent Transaction History
                    </h3>
                    <div class="table-responsive">
                        <table id="example" class="display misco-data-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>BetID</th>
                                <th>Game</th>
                                <th>Coin</th>
                                <th>Bet</th>
                                <th>Time</th>
                                <th>Profit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
