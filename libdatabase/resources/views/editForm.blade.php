@include('header')
<div class="content-area">
    <form action="{{action('App\Http\Controllers\authorsController@store')}}" method="post">
    @csrf
    <input type="text" name="A_FName" id="A_FName" placeholder="A_FName">
    <br>
    <br>
    <input type="text" name="A_LName" id=""placeholder="A_LName">
    <br>
    <br>
    <input type="datetime-local" name="A_BDate" id=""placeholder="A_BDate">
    <br>
    <br>
    <input type="text" name="A_Country" id=""placeholder="A_Country">

    <div class="results">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::get('fail'))
        <div class="alert alert-success">
            {{Session::get('fail')}}
        </div>
        @endif
    </div>
    <br>
    <button type="submit" class="btn" value="Submit">Submit</button><!-- Submit button -->
</form>
</body>