@extends('admin.layouts.master_form')




@section('content')




<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Question Info <a class="btn btn-danger" href="{{ url(route('demofraphics')) }}">Go Back</a></h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Question Info <small style="color:red;">If a question does not have  items, it will be transformed in to a text - BOX</small></h2>

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

            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('create_demofraphic_question',$demographics->id)) }}" method="POST">
              {{ csrf_field() }}


              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tittle">Tittle Item<span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">

                 <textarea id="Info" name="title"  required="required" class="resizable_textarea form-control"></textarea>

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
          <h2>Tables<small>  Items</small></h2>
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
                <th>Item Title</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>


<?php $i=1; ?>
               @foreach($items as $item)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $item->title }}</td>
                <td><a onclick="return confirm('Are you sure you want to delete this ChoiceCard  -  -  and all question in it?')"  href="">Delete</a></td>

              </tr>
              @endforeach
<?php $i++; ?>

    



            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection