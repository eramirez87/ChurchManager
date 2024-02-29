@extends('layouts.master')
 
@section('title', 'Home')

@section('jsHeader')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
<script src="js/homepage.js"></script>
@stop
@section('jsFooter')
<script>
    let hp = new HomePage();
    hp.RequestChart('RequestChart',
    {
        aproved: [5,12,5,12,15,3,0,2,3,3,0,0],
        rejected:  [1,0,3,4,0,0,6,0,0,0,0,0],
        pending: [0,0,0,0,0,0,0,0,0,0,2,1]
    });
    hp.BalanceChart('BalanceChart',{
        offerings : [3500,1520.50,951,2001,756,920,980,1100,1500,3000,3200,3100],
        payments: [1,45.5,450,480,152,600,785,110,0,0,48,100]
    });
    hp.MinistryCalendar('calendar');
</script>
@stop
@section('content')



<div class='row row-cols-2 row-cols-lg-4 row-cols-md-3 g-4'>
    <div class="col">
        <div class="card h-100 text-white bg-primary">
          <div class="card-header">Request</div>
          <div class="card-body">
            <p class="card-text">0</p>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100 text-white bg-primary">
          <div class="card-header">Next events</div>
          <div class="card-body">
            <p class="card-text">0</p>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100 text-white bg-primary">
          <div class="card-header">Balance of month</div>
          <div class="card-body">
            <p class="card-text">$ {{ number_format(0,2) }}</p>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100 text-white bg-primary">
          <div class="card-header">Balance of year</div>
          <div class="card-body">
            <p class="card-text">$ {{ number_format(0,2) }}</p>
          </div>
        </div>
    </div>
    
</div>
<div class='row row-cols-2 mt-4 g-4'>
    <div class="col">
        <div class="card h-100">
          <div class="card-header">Request</div>
          <div class="card-body">
            <canvas id='RequestChart'></canvas>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-header">Balance</div>
            <div class="card-body">
            <canvas id='BalanceChart'></canvas>
            </div>
        </div>
    </div>
</div>
<div class='row mt-4 g-4'>
  <div class='col col-12'>
    <div class="card h-100">
          <div class="card-header">Events</div>
          <div class="card-body">
            <div id='calendar'></div>
          </div>
        </div>
  </div>
</div>
@stop