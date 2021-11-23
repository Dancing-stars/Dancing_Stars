
@foreach ($competitions as $competition)
    	<button><a href="{{route('evaluation', ['id' => $competition->competition_id])}}">{{ $competition->competiotion_name }}</a>
    	</button><br></br>
@endforeach



