@extends('layouts.appfrontend')
@section('content')
<!-- App Capsule -->
<div id="appCapsule">

    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1 bg-dark">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Total Balance</span>
                    <h1 class="total">Rp. 2,562.50</h1>
                </div>
                <div class="right">
                    <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Deposit</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="swap-vertical"></ion-icon>
                        </div>
                        <strong>Transactions</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">From</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addona1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount" value="100">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet -->

    <!-- Withdraw Action Sheet -->
    <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2d">From</label>
                                    <select class="form-control custom-select" id="account2d">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11d">To</label>
                                    <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addonb1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount" value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Withdraw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Withdraw Action Sheet -->

    <!-- Send Action Sheet -->
    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2">From</label>
                                    <select class="form-control custom-select" id="account2">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11">To</label>
                                    <input type="email" class="form-control" id="text11" placeholder="Enter bank ID">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount" value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet -->

    <!-- Exchange Action Sheet -->
    <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exchange Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency1">From</label>
                                            <select class="form-control custom-select" id="currency1">
                                                <option value="1">EUR</option>
                                                <option value="2">USD</option>
                                                <option value="3">AUD</option>
                                                <option value="4">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency2">To</label>
                                            <select class="form-control custom-select" id="currency2">
                                                <option value="1">USD</option>
                                                <option value="1">EUR</option>
                                                <option value="2">AUD</option>
                                                <option value="3">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon2">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount" value="100">
                                </div>
                            </div>



                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Exchange</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Exchange Action Sheet -->


    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Transactions</h2>
            <a href="app-transactions.html" class="link">View All</a>
        </div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="{{asset('icon/expense.png')}}" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Amazon</strong>
                        <p>Shopping</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger"> - Rp. 150;</div>
                </div>
            </a>
        </div>
    </div>
    <!-- * Transactions -->

    <!-- my cards -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Our Services</h2>
            <a href="app-cards.html" class="link">View All</a>
        </div>

        <!-- carousel single -->
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-primary">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">JASA LAYANAN PERBAIKAN IMEI</span>
                                    <h1 class="title">IMEI KE BLOCK JUARA SERVICES SOLUSINYA !</h1>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-dark">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">JASA BUAT WEBSITE</span>
                                    <h1 class="title">BUAT WEBSITE PROFESIONAL DENGAN HARGA MURAH</h1>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-secondary">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">JASA SKRIPSI</span>
                                    <h1 class="title">SOLUSI BUAT ANDA YANG MALAS BELAJAR !</h1>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel single -->

    </div>


    @endsection