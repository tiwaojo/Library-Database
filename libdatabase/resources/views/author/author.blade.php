@include('header')
<div class="content-area">
    <h2>Author</h2>
    @if (count($authors)==0)
        <h1>error fetching data</h1> 
    @endif
    {{-- @if (count($LogInfo)>0)
        <h1>fetching data</h1> 
    @endif --}}
    <table>

        <tr id="table-header">
            <th>Author_Id</th>
            <th>A_FName</th>
            <th>A_LName</th>
            <th>A_BDate</th>
            <th>A_Country</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @if (count($authors)>1)
            @foreach ($authors as $author)
                <tr><td>  
                    {{$author->Author_Id}}  </td><td>  {{$author->A_FName}}  </td><td>   {{$author->A_LName}}  </td><td> {{$author->A_BDate}}  </td><td>  {{$author->A_Country}} </td><td>  
                        <form role="form"method="POST"action="{{ url('/') }}">
                            <button type="submit">Edit</button>
                        </form>
                    </td><td> 
                        <form role="form"action="">
                            <button type="submit">Delete</button>
                        </form>  
                </td></tr>
            @endforeach
        @endif
    </table>
    <form action="{{action('App\Http\Controllers\authorsController@create')}}" method="GET">
        <button type="submit">Add</button>
    </form>
</div>
</body>