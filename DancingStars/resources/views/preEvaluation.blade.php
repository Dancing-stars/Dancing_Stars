<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="/css/style.css" rel="stylesheet">
@if(Auth::user()->role_id  == 3)
<body>


<h1 style="color: black;">Rate the competition</h1>

@foreach ($competitions as $competition)
    	<button  class="btn btn-dark"><a href="{{route('evaluation', ['competition_id' => $competition->competition_id], )}}">{{ $competition->competition_name }}</a>
    	</button><br></br>
@endforeach
</body>
@endif
