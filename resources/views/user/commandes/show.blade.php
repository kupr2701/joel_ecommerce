@extends('layouts.user')
@section('title', 'Voire commande')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
<<<<<<< HEAD

=======
                    <div class="col-sm-6">
                        <h1 class="m-0">Voire commande</h1>
                    </div><!-- /.col -->
>>>>>>> 7aa1ad0664662bfec27fe948e8b13b9dc19f3380
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('commandes') }}">Commandes</a></li>
                            <li class="breadcrumb-item active">Voire commande</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-right">
                                    <a href="{{ route('commandes') }}" class="btn btn-primary">Retour</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <h3>commande: </h3>
                                <li>Référence : {{ $order->ref_id }}</li>
                                <li>email : {{ $order->billing_email }}</li>
                                <li>nom : {{ $order->billing_name }}</li>
                                <li>Total : {{ $order->billing_total }} €</li>
                                <h4>produits: </h4>
                                @foreach ($order->products as $product)
                                    {{ $product->name }} : {{ $product->pivot->quantity }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
