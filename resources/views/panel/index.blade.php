@extends('panel.layouts.master')
@section('content')
    <!-- Purchase token -->
    <div class="row">
        <div class="col-12">
        <h6 class="my-2">Purchase Token</h6>
            <div class="card pull-up p-2">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form-horizontal form-purchase-token row" action="{{ route('app.panel.buyToken') }}" method="post">
                            @csrf
                            <div class="col-md-2 col-12">
                                <fieldset class="form-label-group mb-0">
                                    <input type="text" class="form-control" id="hx_token_amount" name="token_amount" required="" value="1" onkeyup="convertHxToGateway()">
                                    <label for="ico-token">HX Token</label>
                                </fieldset>
                            </div>
                            <div class="col-md-1 col-12 text-center">
                                <span class="la la-arrow-right"></span>
                            </div>
                            <div class="col-md-2 col-12">
                                <fieldset class="form-label-group mb-0">
                                    <input type="text" class="form-control" id="gateway_conversion_amount" name="conversion_amount" required="" onkeyup="convertGatewayToHx()">
                                    <label for="selected-crypto" id="gateway_name">Select Wateway</label>
                                </fieldset>
                            </div>
                            <div class="col-md-1 col-12">
                                <select class="custom-select" id="gateway" name="gateway_id">
                                    @php
                                        $wallet_address = "";
                                        $conversion_rate = 1.0;
                                        $gateway_name = "Select Gateway";
                                    @endphp
                                    @if (count($gateways)>0)
                                        @foreach ($gateways as $key => $gateway)
                                            @if($key == 0)
                                                @php
                                                    $wallet_address = $gateway->wallet_address;
                                                    $conversion_rate = $gateway->conversion_rate;
                                                    $gateway_name = $gateway->name;
                                                @endphp
                                                <option value="{{ $gateway->id }}" selected>{{ $gateway->name }}</option>
                                            @else
                                                <option value="{{ $gateway->id }}">{{ $gateway->name }}</option>
                                            @endif
                                        @endforeach
                                    @else
                                        <option selected>Select Gateway</option>
                                    @endif
                                </select>
                                <input type="hidden" id="cvrt" name="conversion_rate" value="{{ $conversion_rate }}">
                                <input type="hidden" id="gt_name" value="{{ $gateway_name }}">
                            </div>
                            <div class="col-md-4 col-12 mb-1">
                                <fieldset class="form-label-group mb-0">
                                    <input type="text" class="form-control" id="wallet-address" name="wallet_address" value="{{ $wallet_address }}" required="">
                                    <label for="wallet-address">Wallet address</label>
                                </fieldset>
                            </div>
                            <div class="col-md-2 col-12 text-center">
                                <button type="submit" class="btn-gradient-secondary">Buy now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Purchase token -->
    <!-- ICO Token balance & sale progress -->
    <div class="row">
        <div class="col-md-8 col-12">
            <h6 class="my-2">ICO Token balance</h6>
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <p><strong>Your balance:</strong></p>
                                    <h1>{{ auth()->user()->balance }} HX</h1>
                                </div>
                                <div class="col-md-4 col-12 text-center text-md-right">
                                    <button type="button" class="btn-gradient-secondary mt-2">Withdraw <i class="la la-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <h6 class="my-2">Token sale progress</h6>
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="font-small-3 clearfix">
                            <span class="float-left">$0</span>
                            <span class="float-right">$5M</span>
                        </div>
                        <div class="progress progress-sm my-1 box-shadow-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="font-small-3 clearfix">
                            <span class="float-left">Distributed <br> <strong>6,235,125 CIC</strong></span>
                            <span class="float-right text-right">Contributed  <br> <strong>5478 ETH | 80 BTC</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ ICO Token balance & sale progress -->
    <!-- Recent Transactions -->
    <div class="row">
        <div id="recent-transactions" class="col-12">
            <h6 class="my-2">Recent Transactions</h6>
            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table id="recent-orders" class="table table-hover table-xl mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Tokens (HX)</th>
                                    <th class="border-top-0">Gateway Amount</th>
                                    <th class="border-top-0">Gateway</th>
                                    <th class="border-top-0">Gateway Rate</th>
                                    <th class="border-top-0">Wallet Address</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Date</th>                                </tr>
                            </thead>
                            <tbody>
                                @if (count($purchase_tokens) > 0)
                                    @foreach ($purchase_tokens as $key => $purchase_token)
                                        <tr>
                                            <td class="text-truncate">{{ $purchase_token->token_amount }}</td>
                                            <td class="text-truncate">{{ $purchase_token->conversion_amount }}</td>
                                            <td class="text-truncate">{{ $purchase_token->gateway_id }}</td>
                                            <td class="text-truncate">{{ $purchase_token->conversion_rate }}</td>
                                            <td class="text-truncate">{{ $purchase_token->wallet_address }}</td>
                                            <td class="text-truncate">
                                                @if($purchase_token->status == 0)
                                                    <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Pending
                                                @elseif($purchase_token->status == 1)
                                                    <i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Complete
                                                @elseif($purchase_token->status == 2)
                                                    <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> in Process
                                                @endif
                                            </td>
                                            <td class="text-truncate"><a href="#">{{ $purchase_token->created_at }}</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                <td class="text-truncate" colspan="7">No data found!</td>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Recent Transactions -->
    <!-- Basic Horizontal Timeline -->
    <div class="row match-height">
        <div class="col-xl-4 col-lg-12">
            <h6 class="my-2">Latest updates</h6>
            <div class="card">
                <div class="card-content">
                    <img class="img-fluid" src="{{ asset('assets') }}/images/pages/blog-post.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                    <span class="float-left">3 hours ago</span>
                    <span class="float-right">
                        <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <h6 class="my-2">Roadmap</h6>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <section class="cd-horizontal-timeline">
                                <div class="timeline">
                                    <div class="events-wrapper">
                                        <div class="events">
                                            <ol>
                                                <li><a href="#0" data-date="16/01/2018" class="selected">16 Jan</a></li>
                                                <li><a href="#0" data-date="28/02/2018">28 Feb</a></li>
                                                <li><a href="#0" data-date="20/04/2018">20 Mar</a></li>
                                                <li><a href="#0" data-date="20/05/2018">20 May</a></li>
                                                <li><a href="#0" data-date="09/07/2018">09 Jul</a></li>
                                                <li><a href="#0" data-date="30/08/2018">30 Aug</a></li>
                                                <li><a href="#0" data-date="15/09/2018">15 Sep</a></li>
                                            </ol>
                                            <span class="filling-line" aria-hidden="true"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->
                                    <ul class="cd-timeline-navigation">
                                        <li><a href="#0" class="prev inactive">Prev</a></li>
                                        <li><a href="#0" class="next">Next</a></li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->
                                <div class="events-content">
                                    <ol>
                                        <li class="selected" data-date="16/01/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">Crypto ICO platform idea</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="28/02/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">Technical & strategy development</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="20/04/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">ICO Launched</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="20/05/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">Crypto ICO beta version launched</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="09/07/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">Mobile apps for iOS & Android</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="30/08/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">Partnership with business merchant</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                        <li data-date="15/09/2018">
                                            <blockquote class="blockquote border-0">
                                                <p class="text-bold-600">Launch live paltform</p>
                                            </blockquote>
                                            <p class="lead mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                                <!-- .events-content -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Horizontal Timeline -->
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function(){
            var conversion_rate = $('#cvrt').val();
            $('#gateway_conversion_amount').val(conversion_rate);
            $('#gateway_name').html($('#gt_name').val());
        });

        $("#gateway").change(function() {
            var tokenAmount = parseInt($('#hx_token_amount').val());
            var id = $(this).val();
            var url = "get-gateway/"+id;
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(data){
                    console.log(data);
                    $('#gateway_name').html(data.name);
                    $('#cvrt').val(data.conversion_rate);
                    $('#gateway_conversion_amount').val(tokenAmount*data.conversion_rate);
                    $('#wallet-address').val(data.wallet_address);
                },
                error: function(xhr) {
                    console.log(xhr.statusText);
                }
            });
        });

        function convertHxToGateway(){
            var tokenAmount = parseFloat($('#hx_token_amount').val());
            var conversionRate = parseFloat($('#cvrt').val());
            if(tokenAmount>0){
                $('#gateway_conversion_amount').val(tokenAmount*conversionRate);
            }else{
                $('#gateway_conversion_amount').val('');
            }
        }

        function convertGatewayToHx(){
            var gatewayAmount = parseFloat($('#gateway_conversion_amount').val());
            var conversionRate = parseFloat($('#cvrt').val());

            if(gatewayAmount>0){
                $('#hx_token_amount').val(parseFloat(gatewayAmount/conversionRate).toFixed(2));
            }else{
                $('#hx_token_amount').val('');
            }
        }
    </script>    
@endpush