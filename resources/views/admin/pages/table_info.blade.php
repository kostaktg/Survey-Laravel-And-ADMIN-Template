@extends('admin.layouts.master_table')




@section('content')






       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>Some Info</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tables <small>SETS</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">

                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Number of times answered</th>
                          <th>Date</th>
                        </tr>
                      </thead>

<tbody>
@foreach($sets as $set)
                      
                        <tr>
                          <th scope="row">{{$set->id}}</th>
                          <td>{{ $set->name }}</td>
                          <td>{{ $set->num }}</td>
                          <td>{{$set->created_at->diffForHumans()}} / {{$set->created_at}}</td>
                        </tr>
@endforeach                      

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>









              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <?php $all=0; ?>
                  @foreach($questions as $question)
@if($question->answer != NULL) <?php $all++  ?>
@endif

@endforeach  
                    <h2>Total number of questions answered <small> {{ $all}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Question</th>
                          <th>ChoiceCard</th>
                          <th>Debrief question</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $q=0; $ch=0; $d=0; ?>
@foreach($questions as $question)
@if($question->type == 'question' && $question->answer != NULL) <?php $q++  ?>
@endif
@if($question->type == 'choicecard' && $question->answer != NULL) <?php $ch++  ?>
@endif
@if($question->type == 'debrief' && $question->answer != '') <?php $d++  ?>
@endif
@endforeach                   
                        <tr>
                          <th scope="row">Answered</th>
                          <td>{{$q}}</td>
                          <td>{{$ch}}</td>
                          <td>{{$d}}</td>
                        </tr>
                        <tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>



</tr></tbody></table></div></div></div></div></div></div>
             










@endsection