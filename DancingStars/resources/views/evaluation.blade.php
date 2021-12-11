<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="/css/style.css" rel="stylesheet">

@if(Auth::user()->role_id  == 3)

<h1>Evaluation</h1>
<body class="secondWallpaper">
<table class="table" border="1px">
        <tr>
            <td>Name</td>
            <td>rhythm</td>
            <td>energy</td>
            <td>presentation</td>
        </tr>

        @foreach($dancers as $dancer)

        <tr>

            @if(Auth::user()->id == $dancer->judge_id)
            <td>{{$dancer->name}}</td>
            <td>{{$dancer->rhythm}}</td>
            <td>{{$dancer->energy}}</td>
            <td>{{$dancer->presentation}}</td>
            @else
            <td><button>
                <a href="{{route('evaluation', ['competition_id' => $dancer->competition_id, 'dancer_id' => $dancer->dancer_id])}}">{{$dancer->name}}</a></button></td>
            <td></td>
            <td></td>
            <td></td>
            @endif
        </tr>


        @endforeach

</table>


@if($selectedDancer_id)
    <h2 >Criterion</h2>
    <form class="form" method="get" action="{{ route('createEvaluation',['competition_id' => $dancers[0]->competition_id, 'dancer_id' => $selectedDancer_id]) }}">
        <p>rhythm</p>
            <input type="number" name="rhythm" min="0" max="10">
        <p>energy</p>
            <input type="number" name="energy" min="0" max="10">
        <p>presentation</p>
            <input type="number" name="presentation" min="0" max="10">
        <input type="submit" value="save"></input>
        
    </form>

@endif
@else
<div class="container">You are not a judge you do not have access to this page!</div>
</body>
@endif


