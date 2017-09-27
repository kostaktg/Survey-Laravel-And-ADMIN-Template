@extends('admin.layouts.master_form')




@section('content')




<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left"><a class="btn btn-danger" href="{{ url(route('admin_form_choice_card')) }}">Go Back</a>
        <h3>Add ChoiceCard Info</h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>ChoiceCard Info <small>Create form ChoiceCard ( slides ) with question</small></h2>

            <ul class="nav navbar-right panel_toolbox">

              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Add Box</a>
                  </li>
                  <li><a href="#">Add Choice Card</a>
                  </li>
                </ul>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>

            </ul>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('update_choice_card',$choicecard->id)) }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title <span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="title" required="required" class="form-control col-md-7 col-xs-12" name="title" value="{{ $choicecard->title }}">
                </div>

              </div>

              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Info">Info<span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">

                 <textarea id="Info" name="info"  required="required" class="resizable_textarea form-control">{{ $choicecard->info }}</textarea>

               </div>
             </div>

             <div class="form-group">

              <label for="small_info" class="control-label col-md-3 col-sm-3 col-xs-12">Small info</label>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="small_info" class="form-control col-md-7 col-xs-12" type="text" name="small_info" value="{{ $choicecard->small_info }}">
              </div>
            </div>



            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                <button class="btn btn-primary" type="button">Cancel</button>

                <button class="btn btn-primary" type="reset">Reset</button>

                <button type="submit" class="btn btn-success">Submit</button>

              </div>
            </div>

          </form>
          @include('admin.includes.errors')
        </div>
      </div>
    </div>
  </div>


</div></div>


@endsection