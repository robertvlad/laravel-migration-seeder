<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-dark m-5">
                        <thead>
                          <tr>
                            <th scope="col">Azzienda</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">Numero Carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($trains as $train)
                            <tr>
                                <th scope="row">{{ $train['id'] }}</th>
                                <td>{{ $train['stazione_di_partenza'] }}</td>
                                <td>{{ $train['stazione_di_arrivo'] }}</td>
                                <td>{{ $train['orario_di_partenza'] }}</td>
                                <td>{{ $train['orario_di_arrivo'] }}</td>
                                <td>{{ $train['azienda'] }}</td>
                                <td>{{ $train['codice_treno'] }}</td>
                                <td>{{ $train['numero_carrozze'] }}</td>

                                @if ( $train['in_orario'] == 0)
                                    <td>No</td> 
                                @else
                                    <td>Si</td> 
                                @endif   

                                @if ( $train['cancellato'] == 0)
                                    <td>No</td> 
                                @else
                                    <td>Si</td> 
                                @endif                                
                              </tr>                                
                            @endforeach
            
                        </tbody>
                      </table>
                </div>
            </div>
        </div>          
    </body>
</html>