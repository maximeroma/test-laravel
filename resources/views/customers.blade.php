@include('header')
    <body>
      <h1 class="center aligned">Customers' Table</h1>
      <table class="ui selectable inverted table">
        <thead>
          <th>Id</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>More details</th>
          <th>Delete</th>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
          <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>
              <a href="customer/{{ $customer->id }}">
                <div class="ui animated button" tabindex="0">
                  <div class="visible content">Details</div>
                  <div class="hidden content">
                    <i class="right arrow icon"></i>
                  </div>
                </div>
              </a>
            </td>
            <td>
              <a href="customer/delete/{{ $customer->id }}">
                <div class="ui animated red button" tabindex="0">
                  <div class="visible content">Delete</div>
                    <div class="hidden content">
                      <i class="trash icon"></i>
                    </div>
                  </div>
                </div>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </body>
