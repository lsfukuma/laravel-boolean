@extends('layouts.app')
@section('page-title', 'Il corso per diventare web developer e trovare un lavoro')

@section('content')
    <section>
        <div class="container">
            <div class="row diventa-webdev">
                <div class="col-6">
                    <h1>diventa
                        <strong>sviluppatore web</strong></h1>
                    <h3>Transformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h3>
                    <ul>
                        <li> <strong> 6 mesi </strong> di corso intensivo online in diretta
                        </li>
                        <li>
                            <strong>Nessuna competenza</strong> di programmazione richiesta
                        </li>
                        <li>
                            Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img src="{{asset('img/pc-black-gif.gif')}}" alt="gif Boolean lesson">
                </div>
            </div>
        </div>
    </section>
    <section class="risultati">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>98%</h2>
                    <h4>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</h4>
                </div>
                <div class="col-4">
                    <h2>€ 23.000 </h2>
                    <h4>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</h4>
                </div>
                <div class="col-4">
                    <h2>#1</h2>
                    <h4>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</h4>

                </div>
            </div>
        </div>
    </section>

@endsection
