<p>user:{{ Auth::user()->name }}</p>

<table class="table table-responsive" border="1px">
        <tr>
            <td>Name</td>
            <td>country</td>
            <td>type-competition</td>
            <td>criterion</td>
            <td>ocenka</td>
        </tr>

        @foreach($dancers as $dancer)


        <tr>
            <td>{{$dancer->name}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
        </tr>

        @endforeach

</table>

<div>
    <h2>critrion</h2>
    <form>
        <p>rhythm</p>
            <input type="number" name="rhythm" min="0" max="10">
        <p>energy</p>
            <input type="number" name="energy" min="0" max="10">
        <p>presentation</p>
            <input type="number" name="presentation" min="0" max="10">
        <button type="submit">evaluate</button>
    </form>
</div>










