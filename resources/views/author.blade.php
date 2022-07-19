<h1> Authors table </h1>
<table class="table mt-3  text-left" border='2'>
    <thead >
        <tr>
            <th scope='col'>Id</th>
            <th scope='col'>Name</th>
            <th scope='col'>Email</th>
        </tr>
    </thead>
    @foreach ($data as $id)
    <tr>
        <td>{{$id}}</td>
    </tr>

    @endforeach
    
</table>
