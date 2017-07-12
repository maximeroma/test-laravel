@include('header')
  <body>
    <table class="ui celled table">
      <thead>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>created at</th>
        <th>updated at</th>
      </thead>
      <tbody>
        <td>{{ $customer[0]->id }}</td>
        <td>{{ $customer[0]->first_name }}</td>
        <td>{{ $customer[0]->last_name }}</td>
        <td>{{ $customer[0]->email }}</td>
        <td>{{ $customer[0]->created_at }}</td>
        <td>{{ $customer[0]->updated_at }}</td>
      </tbody>
    </table>
  </body>
