
@include('layouts.start')

    <main>
        <div class="titoletto d_flex flex_center">
            <h1> LE LUNGHE </h1>
        </div>

        <div class="d_flex flex_wrap flex_center" >
            @foreach ($data as $prodotto)
                <div class="card">
                    <img src="{{ $prodotto['src'] }}" alt="">
                </div>
            @endforeach
        </div>
    </main>

@include('layouts.end')
