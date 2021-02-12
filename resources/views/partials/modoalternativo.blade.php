
@include('layouts.start')

    <main>
       <div class="titoletto d_flex flex_center">
            <h1> LE LUNGHE </h1>
        </div>

        <div class="d_flex flex_wrap flex_center" >
            @foreach ($lunga as $prodotto)
                <div class="card">
                    <img src="{{ $prodotto['src'] }}" alt="">
                </div>
            @endforeach
        </div>

        <div class="titoletto d_flex flex_center">
            <h1> LE CORTE </h1>
        </div>

        <div class="d_flex flex_wrap flex_center" >
            @foreach ($corta as $prodotto)
                <div class="card">
                    <img src="{{ $prodotto['src'] }}" alt="">
                </div>
            @endforeach
        </div>

        <div class="titoletto d_flex flex_center">
            <h1> LE CORTISSIME </h1>
        </div>

        <div class="d_flex flex_wrap flex_center" >
            @foreach ($cortissima as $prodotto)
                <div class="card">
                    <img src="{{ $prodotto['src'] }}" alt="">
                </div>
            @endforeach
        </div> -->

        <!-- <div class="titoletto d_flex flex_center">
        </div>
        

    </main>

@include('layouts.end')