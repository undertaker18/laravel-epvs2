<x-admin-layout>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #EAF1F8;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">USERS
              </h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!-- data tables -->
      <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
          <!-- Title Form -->
          <div class="card" style="background-color: ; ">
              <div class="card-body"  style="color: #000000; ">
                  <table id="example1" class="table table-bordered  table-hover">
                      <thead>
                          <tr style="color: #000000;">
                              <th>Name</th>
                              <th>Email</th>
                              <th>Role</th>
                              <th>Activity</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($Account as $value)
                        <tr style="color: #000000;">
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>
                              @foreach ($value->roles as $role)
                              {{$role->name}}
                              @if (!$loop->last)
                                  ,
                              @endif
                              @endforeach
                            </td>

                            <td>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y h:i A')}}</td>
                            <td>{{ \Carbon\Carbon::parse($value->updated_at)->format('M d, Y h:i A')}}</td>
                        </tr>
                        @endforeach
                </tbody>
                  </table>
              </div>
          </div>

      </section>

  </div><!-- /.container-fluid -->
  </section>
</x-admin-layout>