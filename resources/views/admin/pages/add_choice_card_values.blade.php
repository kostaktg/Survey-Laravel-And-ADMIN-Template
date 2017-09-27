@extends('admin.layouts.master_form')




@section('content')




<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left"><a class="btn btn-danger" href="{{ url(route('admin_form_choice_card')) }}">Go Back</a>
        <h3>Add value to <span class="btn btn-warning">{{ $choicecard->title }}</span>choicecard</h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Create values<small>Create values ( to a choicecard ) </small></h2>
 
            <ul class="nav navbar-right panel_toolbox">

              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>

            </ul>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />




             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('attribute_create')) }}" method="POST">
              {{ csrf_field() }}
             <input type="text" name="addattribute">
             <input type="submit" name="submit" value="add Attribute name">
             </form>



               <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('deleteatr')) }}" method="POST">
              {{ csrf_field() }}
  <select name="id">@foreach($attributes as $attribute)

<option value="{{ $attribute->id }}">{{$attribute->name}}</option>


@endforeach</select>
 <input type="submit" name="submit" onclick="return confirm('Are you sure you want to delete this  attribute and all value in it  ?')" value="Erase Attribute name">
             </form>





            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('admin_choice_card_value_store',$choicecard->id)) }}" method="POST">
              {{ csrf_field() }}
@if(isset($msg[0] )) <h2 style="color:red;">{{ $msg[0] }} @endif</h2>
              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="attribute"> Attribute<span class="required">*</span>
                </label>

                <div class="col-md-3 col-sm-3 col-xs-6">
                <select   name="attribute" class="form-control col-md-7 col-xs-12">

 
@foreach($attributes as $attribute)

<option value="{{ $attribute->id }}">{{$attribute->name}}</option>


@endforeach

                 </select>
               </div>

             </div>

             <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value1"> Scenario 1 value<span class="required">*</span>
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="value1" required="required"class="form-control col-md-7 col-xs-12" name="value1" value="">
              </div>

            </div>

            <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value2"> Scenario 2 value<span class="required">*</span>
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="value2" required="required" class="form-control col-md-7 col-xs-12" name="value2" value="">
              </div>

            </div>

            <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value3"> Status Quo value<span class="required">*</span>
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="value3" required="required" class="form-control col-md-7 col-xs-12" name="value3" value="">
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


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Basic Tables <small>basic table subtitle</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
              <th>delete</th>
                <th>attribute</th>
                <th>scenario 1</th>
                <th>scenario 2</th>
                <th>Status Quo</th>
              </tr>
            </thead>
            <tbody>

<?php $i=1; ?>
@foreach($values as $value)

             <tr>
              <th><a onclick="return confirm('Are you sure you want to delete this  values  ?')"  href="{{ url(route('deletevalues', $value->id)) }}">Delete</a></th>
              <th>
@foreach($attributes as $attribute)
@if($attribute->id==$value->attribute)

              {{$attribute->name}}

@endif
@endforeach

               </th>
              <th>{{ $value->value1 }}</th>
              <th>{{ $value->value2 }}</th>
              <th>{{ $value->value3 }}</th>

            </tr>
<?php $i++; ?>

@endforeach
            <tfoot>
              <tr>
              <th>#</th>
                <th>i prefer</th>
                <th><input type="checkbox" ></th>
                <th><input type="checkbox" ></th>
                <th><input type="checkbox" ></th>
              </tr>
              </tfoot>
           

        <!--      <tr>
              <th>Groundcover</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>
         

            <tr>
              <th>Flowers</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>Canopy Cover</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>Road island</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>Bicycle lanes</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>Pedestrian walkways</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>Number of car lanes</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>Annual tax increase</th>
              <th></th>
              <th></th>
              <th></th>

            </tr>

            <tr>
              <th>i prefer</th>
              <th></th>
              <th></th>
              <th></th>

            </tr> -->




          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection