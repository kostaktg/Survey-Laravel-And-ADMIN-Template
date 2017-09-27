@extends('admin.layouts.master_table')




@section('content')



       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>Some info <a class="btn btn-danger" href="{{ url(route('admin_table_users')) }}">Go Back</a></small></h3>
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
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
              </div>
                  <div class="x_content">
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table<small>respondents</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">id</th>
                            <th class="column-title">Type</th>
                            <th class="column-title">Answer</th>
                            <th class="column-title">Date / time</th>
                            
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>



@foreach($questions as $question)


                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>

@if($question->type == 'question')
<td class=" ">{{ App\Question::find($question->question_id)->text }}</td>


@endif
@if($question->type == 'choicecard')
<td class=" ">{{ App\ChoiceCard::find($question->question_id)->title }}</td>
@endif
@if($question->type == 'debrief')
<td class=" ">{{ App\DemographicQuestion::find($question->question_id)->title }}</td>
@endif


                            
                            <td class=" ">{{ $question->type }}</td>
                            <td class=" "> {{ $question->answer }}</td>
                            <td class=" ">{{ $question->created_at}}</td>
                            <td class=" last"><a href="">View</a>
                            </td>
                          </tr>

@endforeach


                         
                        </tbody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection