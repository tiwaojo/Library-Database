@include('header')
<div class="content-area">
    <h2>books</h2>
    @if (count($books)==0)
        <h1>error fetching data</h1>  
    @endif
    <table>
        <tr id="table-header">
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Publisher Id</th>
            <th>genre id</th>
            <th>library id</th>
            <th>author</th>
        </tr>
        @if (count($books)>1)
            @foreach ($books as $book)
                <tr><td>  
                    {{$book->ISBN}}  </td><td>  {{$book->Book_Title}}  </td><td>   {{$book->Publisher_Id}}  </td><td> {{$book->Genre_Id}}  </td><td>  {{$book->library_Id}} </td><td> {{$book->Author_Id}}  </td><td>  
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
</div>
</body>