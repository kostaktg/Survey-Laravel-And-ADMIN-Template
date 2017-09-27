@extends('admin.layouts.master_form')




@section('content')




<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add ChoiceCard Info in to <select form="demo-form2" name="set">
          
@foreach($sets as $set)

<option value="{{ $set->id }}">{{$set->name}}</option>


@endforeach
        </select></h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>ChoiceCard Info <small>Create form ChoiceCard ( slides ) with values</small></h2>

            <ul class="nav navbar-right panel_toolbox">

              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{url(route('admin_form_box'))}}">Add Box</a>
                  </li>
                  <li><a href="{{url(route('admin_form_choice_card'))}}">Add Choice Card</a>
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

                         <form id="demo-form12" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('set_create')) }}" method="POST">
              {{ csrf_field() }}
             <input type="text" name="name">
             <input type="submit" name="submit" value="add Set name">
             </form>



               <form id="demo-form22" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('deleteset')) }}" method="POST">
              {{ csrf_field() }}
  <select name="set">@foreach($sets as $set)

<option value="{{ $set->id }}">{{$set->name}}</option>


@endforeach</select>
 <input type="submit" name="submit"  onclick="return confirm('If you delete this SET you will remove all choice cards, respondants and answers associated with the SET.')" value="Erase Set name">
             </form>




            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('admin_form_choice_card_store')) }}" method="POST">
              {{ csrf_field() }}
          
              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title <span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="title" required="required" class="form-control col-md-7 col-xs-12" name="title">
                </div>

              </div>

              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Info">Info<span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">

                 <textarea id="Info" name="info"  required="required" class="resizable_textarea form-control"></textarea>

               </div>
             </div>

             <div class="form-group">

              <label for="small_info" class="control-label col-md-3 col-sm-3 col-xs-12">An explanation box info</label>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="small_info" class="form-control col-md-7 col-xs-12" type="text" name="small_info">
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













@foreach($sets as $set)


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tables ChoiceCard <span style="color:red;" >SET {{ $set->name }}</span><small>basic table subtitle</small></h2>
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

          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>ChoiceCard Title</th>
                <th>Add</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>

<?php $i=1; ?>
              @foreach($choicecards as $choicecard)
              @if($choicecard->set==$set->id)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $choicecard->title }}</td>
                <td><a  href=" {{ url(route('add_choicecard_values' , $choicecard->id)) }} "><span class="btn btn-round btn-default">Add Scenario and Attribute Values </span></a></td>
                <td><a href="{{ url(route('edit_choice_card', $choicecard->id)) }}">Edit ChoiceCard</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete this ChoiceCard  - {{ $choicecard->title }} -  and all question in it?')"  href="{{ url(route('delete_choice_card', $choicecard->id)) }}">Delete</a></td>

              </tr>
<?php $i++; ?>
@endif
              @endforeach




            </tbody>
          </table>
          <!--           <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div> -->
        </div>
      </div>
    </div>
  </div>



@endforeach

























</div>
</div>


@endsection