<center>
    <h1>All Students Data</h1>
    <table border="1" style="width: 100%">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Pro Pic</th>
        </tr>

       @foreach ($data as $row )
       <tr>
       <td>{{$row['name']}}</td>
       <td>{{$row['email']}}</td>
       <td><img src="{{ Storage::url($row->image)}}" style="height:50px; width:80px"></td>
       </tr>
       @endforeach
      </table>
</center>
