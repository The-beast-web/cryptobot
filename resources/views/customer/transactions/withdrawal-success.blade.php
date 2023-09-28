@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
<div class="nk-content nk-content-fluid mt-5 d-none" id="market">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="components-preview wide-sm mx-auto">
                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered p-4 mt-5">
                        <center>
                            <div class="nk-modal">
                                <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                                <h4 class="nk-modal-title"><em class="ni ni-sign-dollar"></em>{{ request()->session()->get('amount') }} Withdrawal Successful!</h4>
                                <div class="nk-modal-text">
                                    <p class="caption-text">We will send <em class="ni ni-sign-dollar"></em>{{ request()->session()->get('amount') }} to <em class="ni ni-sign-dollar"></em>{{ request()->session()->get('paypal_id') }} shortly, please look out for an email. It usually takes between 1 - 3 hours, or in rare cases, 1 day.</p>
                                </div>
                                <div class="nk-modal-action-lg">
                                    <ul class="btn-group gx-4">
                                        <li>
                                            <a href="{{ route('customer.dashboard') }}"
                                                class="btn btn-lg btn-mw btn-primary">Ok
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </center>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .components-preview -->
        </div>
    </div>
</div>
@endsection