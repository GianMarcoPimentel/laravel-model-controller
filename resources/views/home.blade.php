@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1>Benvenuto</h1>
    <div class="list py-5">
        <p>Clicca qui se vuoi raggiungere la lista dei film </p>
        @include('partials/navbar')
    </div>
    <h1>Eccone alcuni per incuriosirti : </h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8dd9cxeymquiqfQMBPbncTbmAu_clz2ZXy_5ZcxU4rw&s" alt="">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudrTdUc7g-gQFi990Hv42zMBUSW3z3v0LZw&s" alt="">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqd8f2f2z_SmtqubldbIVZO_Ep4LS7tOqSHA&s" alt="">
</div>
@endsection