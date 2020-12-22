@extends('layouts.web')

@section('content')
<section class="content">
    <div class="content__inner content__inner--sm">
        <header class="content__title">

            <div class="actions">

            @foreach ($data as $st)
            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                </div>
            </div>
        </div>
        </header>

        <div class="card profile">

            <div class="profile__info">
						                <p>REPORT NUMBER: {{$st->id}}</p>

                <p>NAME: {{$st->name}}</p>
                <p>{{$st->image}}</p>

                <ul class="icon-list">
                    <li><i class="zmdi zmdi-email"></i>{{$st->name}}</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-body__title mb-4">Reason: {{$st->name}}</h4>

                <p>Report by: {{$st->report}}</p>
                <p>Report date on system: {{$st->date}}</p>


                <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque.</p>

                <br>

                <h4 class="card-body__title mb-4">Summary Information</h4>

                <ul class="icon-list">
                  <li><i class="zmdi zmdi-photo1"></i>Quantity items: {{$st->quantity}}</li>
                  <li><i class="zmdi zmdi-email1"></i>Unit cost: {{$st->unit}}</li>
                  <li><i class="zmdi zmdi-facebook1"></i>Total amount: {{$st->amount}}</li>
                  <li><i class="zmdi zmdi-pin1"></i>Image if any: {{$st->image}}</li>
                </ul>


                @endforeach
            </div>

        </div>
    </div>

    <footer class="footer hidden-xs-down">
        <p>© Material Admin Responsive. All rights reserved.</p>

        <ul class="nav footer__nav">
            <a class="nav-link" href="#">Homepage</a>

            <a class="nav-link" href="#">Company</a>

            <a class="nav-link" href="#">Support</a>

            <a class="nav-link" href="#">News</a>

            <a class="nav-link" href="#">Contacts</a>
        </ul>
    </footer>
</section>
@endsection
