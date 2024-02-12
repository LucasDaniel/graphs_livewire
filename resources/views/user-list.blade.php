<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users list</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>Level</th>
                <th>User</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($userList as $usu => $u)
                <tr>
                  <td>{{ $u->id_level == 2 ? 'Admin' : 'Employee' }}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->created_at }}</td>
                  <td>
                    <!-- { { $u->id }} -->
                    <a href="{{ route('app.user.show',$u->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('app.user.destroy',$u->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>