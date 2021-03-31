@include('header')
<div class="content-area">
    <form action="{{action('App\Http\Controllers\authorsController@store')}}" method="post"></form>
    <input type="number" name="Author_id" id="Author_id">
    <br>
    <br>
    <input type="text" name="A_FName" id="A_FName">
    <br>
    <br>
    <input type="text" name="" id="">
    <br>
    <br>
    <input type="datetime" name="" id="">
    <br>
    <br>
    <input type="text" name="" id="">
</div>
</body>