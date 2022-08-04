@extends('frontend.main_master')
@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                @include('frontend.fragments.user_sidebar')

                <div class="col-md-10">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">
                                <!-- CONDIÇÃO: verificar a sessão do usuário, se for portugues, mostrar a opção inglês, se for inglês, mostrar opção português -->
                                @if (session()->get('language') == 'portuguese')
                                    Olá!
                                @else
                                    Hello!
                                @endif
                            </span><strong>
                                {{ Auth::user()->name }}</strong>
                            <br>
                            <br>
                            <!-- CONDIÇÃO: verificar a sessão do usuário, se for portugues, mostrar a opção inglês, se for inglês, mostrar opção português -->
                            @if (session()->get('language') == 'portuguese')
                                Aqui estão todos os seus pedidos
                            @else
                                These are all your orders.
                            @endif
                        </h3>
                        <hr>

                        <!-- ====== ARRUMAR ESSA TABLE ====== -->
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>

                                        <tr style="background: #a9cbf3a4;">
                                            <td class="col-md-1">
                                                <label for="">
                                                    @if (session()->get('language') == 'portuguese')
                                                        Data
                                                    @else
                                                        Date
                                                    @endif
                                                </label>
                                            </td>

                                            <td class="col-md-3">
                                                <label for=""> Total</label>
                                            </td>

                                            <td class="col-md-3">
                                                <label for="">
                                                    @if (session()->get('language') == 'portuguese')
                                                        Pagamento
                                                    @else
                                                        Payment
                                                    @endif
                                                </label>
                                            </td>

                                            <td class="col-md-2">
                                                <label for="">
                                                    @if (session()->get('language') == 'portuguese')
                                                        Numero Pedido
                                                    @else
                                                        Invoice Number
                                                    @endif
                                                </label>
                                            </td>

                                            <td class="col-md-2">
                                                <label for="">
                                                    @if (session()->get('language') == 'portuguese')
                                                        Pedido
                                                    @else
                                                        Order
                                                    @endif
                                                </label>
                                            </td>

                                            <td class="col-md-1">
                                                <label for="">
                                                    @if (session()->get('language') == 'portuguese')
                                                        Ação
                                                    @else
                                                        Action
                                                    @endif
                                                </label>
                                            </td>

                                        </tr>


                                        @foreach ($orders as $order)
                                            <tr>
                                                <td class="col-md-3">
                                                    <label for=""> {{ $order->order_date }}</label>
                                                </td>

                                                <td class="col-md-3">
                                                    <label for=""> R$ {{ $order->amount }}</label>
                                                </td>


                                                <td class="col-md-3">
                                                    <label for=""> {{ $order->payment_method }}</label>
                                                </td>

                                                <td class="col-md-2">
                                                    <label for=""> {{ $order->invoice_no }}</label>
                                                </td>

                                                <td class="col-md-2">
                                                    <label for="">
                                                        <span class="badge badge-pill badge-info"
                                                            style="background: #418DB9;">{{ $order->status }} </span>

                                                    </label>
                                                </td>

                                                <td class="col-md-1">
                                                    <a href="{{ url('user/order_details/' . $order->id) }}"
                                                        class="btn btn-sm btn-primary"><i class="fa fa-eye"></i>
                                                        @if (session()->get('language') == 'portuguese')
                                                            Visua..
                                                        @else
                                                            View
                                                        @endif
                                                    </a>

                                                    {{-- \_blank: Load the URL into a new browsing context. This is usually a tab, 
                                                    but users can configure browsers to use new windows instead. --}}
                                                    <a target="_blank"
                                                        href="{{ url('user/invoice_download/' . $order->id) }}"
                                                        class="btn btn-me btn-success" style="margin-top: 5px;"><i
                                                            class="fa fa-download" style="color: white;"></i>
                                                        @if (session()->get('language') == 'portuguese')
                                                            Boleto
                                                        @else
                                                            Invoice
                                                        @endif
                                                    </a>

                                                </td>

                                            </tr>
                                        @endforeach
                                        <br>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    {{-- @include('frontend.body.brands') --}}
@endsection
