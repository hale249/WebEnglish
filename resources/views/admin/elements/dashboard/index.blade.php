@extends('admin.layouts.app')

@section('title', 'Tổng quan')

@section('content')
  <div class="row">
      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tổng số người dùng</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $boxOverviews['client'] ??  0 }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tổng tiếng anh THCS</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $boxOverviews['book'] ??  0 }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tổng số học kỹ năng</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $boxOverviews['skill'] ??  0 }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tổng số học qua video</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $boxOverviews['video'] ??  0 }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tổng số học qua bài hát</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $boxOverviews['music'] ??  0 }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tổng số học qua tin tức</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $boxOverviews['blog'] ??  0 }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


    <div>
        <div class="card">
            <div class="card-body">
                <canvas id="myChart2" height="100px"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        let myChart = document.getElementById("myChart2").getContext("2d");
        const myChart1  =  new Chart(myChart, {
            type: 'line',
            data:  {
                labels: @json($chartUser['labels']),
                datasets: [{
                    label: 'Tăng trưởng học viên',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: @json($chartUser['data']),
                }]
            },
            options: {
                scales: {
                    y: {
                        title: {
                            display: true,
                            text: 'Value'
                        },
                        min: 0,
                        max: 100,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 10
                        }
                    }
                }
            }
        });
    </script>
@endsection
