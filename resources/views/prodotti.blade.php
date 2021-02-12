
@include('layouts.start')

    <main>
       

        <div class="" >

            @foreach ($paste as $titolokey => $prodotti) 
                <h1 class="titolo" > {{ $titolokey }} </h1>
                
                <div class="d_flex flex_wrap">
                    @foreach ($prodotti as $prodotto)
                    <div class="card">
                        <img src="{{ $prodotto['src'] }}" alt="">
                    </div>
                    @endforeach
                </div>
            @endforeach

        </div>
        

    </main>

@include('layouts.end')
