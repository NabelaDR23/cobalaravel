<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chart</title>
</head>


<body>
    <h1>coba chart</h1>    

    <table class="table">
    <thead class="tabel->$dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Gaji</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($tbl_datadiri as $data)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$data->nama}}</td>
      <td>{{$data->jenis_kelamin}}</td>
      <td>{{$data->jabatan}}</td>
      <td>{{$data->gaji}}</td>
      <td>{{$data->email}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

<div class="panel">
 <div id="gajiChart"></div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
// Build the chart
Highcharts.chart('gajiChart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.{!!json_encode($data->gaji)!!}:.1f} %'
            }
        }
    },
    series: [{
        name: {!!json_encode($data->nama)!!},
        colorByPoint: true,
        data: [{
            name: {!!json_encode($data->nama)!!},
            y: {!!json_encode($data->gaji)!!},
            sliced: true,
            selected: true
        }]
    }]
});
              

</script>
</body>
</html>