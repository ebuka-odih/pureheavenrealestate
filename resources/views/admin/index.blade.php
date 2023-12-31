@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to admin dashboard</p>
                                </div>
                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Deposit</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                        </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">

                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalDeposit"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Withdraw</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Withdraw"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                        </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">

                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered  card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Balance in Account</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Balance in Account"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span>
                                            </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">

                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalBalance"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
