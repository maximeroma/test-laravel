@include('header')
  <body>
    <div class="row">
      <div class="container ui">
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
      </div>
    </div>

    <div class="row">
      <div class="container ui">
        <form class="ui form" action="update/{{ $customer[0]->id }}" method="post">
          {{ csrf_field() }}
          <div class="field">
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="First Name" value="{{ $customer[0]->first_name }}">
          </div>
          <div class="field">
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name" value="{{ $customer[0]->last_name }}">
          </div>
          <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="email" value="{{ $customer[0]->email }}">
          </div>
          <button class="ui button green" type="submit">Update</button>
        </form>
      </div>
    </div>
  </body>
