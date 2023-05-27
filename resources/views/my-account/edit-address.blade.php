@extends('layouts.clientdash')



@section('styledash')
<link rel="stylesheet" href="/styles/edit-address.css">
@endsection



@section('dashcontent')

<section class="mt-3">
    <div class="container">
        <div class="addresses">
            <p>The following addresses will be used on the checkout page by default.</p>
         
           <div class="address">
            <div class="row">
                @foreach ($addresses as $index => $addresse)
                   
                <div class="col-md-5 addrs">
                    <strong> {{ $addresse->first_name }}</strong> <strong>{{ $addresse->last_name }}</strong>
                    <p>phone : {{ $addresse->phone }}</p>
                    <p>street : {{ $addresse->street }}</p>
                    <p>city : {{ $addresse->city }}</p>
                    <p>state : {{ $addresse->state }}</p>
                    <p>zip code : {{ $addresse->zip_code }}</p>
                    <p>country : Morocco</p>
                    <div class="buttons">
                        <a href="{{ route('updateadresse',$addresse->id) }}">Update</a>
                        @if ($index > 0 )
                        <form action="{{ route('deleteaddresse',$addresse->id) }}" method="post">
                            @csrf
                            @method('POST')
                            <a href="#"><input type="submit" value="Delete"></a>
                            </form>
                        @endif
                    </div>
                </div>
                @endforeach
               
                
            </div>
                @if (count($addresses) < 5)
                <div class="add-addrs mt-5">
                    <a href="{{ route('adaddresse') }}">Add New Address</a>
                </div>
                @endif
               
            </div>
        </div>
    </div>
</section>
@endsection













