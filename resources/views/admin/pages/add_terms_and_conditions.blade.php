     @extends('admin.layouts.master_form')




@section('content')

  <div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add terms and conditions</h3>
      </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Terms<small> and </small>Conditions</h2>
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
      









@foreach($terms as $term)

@if($term->terms)

  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('add_terms_store_edit', $term->id)) }}" method="POST">
              {{ csrf_field() }}




                  <textarea id="textarea1" class="ckeditor" name="terms" id="descr" >{{$term->terms}}</textarea>

<input type="submit" name="submit" value="edit">

</form>

@endif

@endforeach

@if (!isset($terms->toArray()[0]))



  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url(route('add_terms_store')) }}" method="POST">
              {{ csrf_field() }}




                  <textarea  id="textarea2" class="ckeditor" name="terms" id="descr" ></textarea>



<input type="submit" name="submit" value="submit">
</form>

@endif





       @include('admin.includes.errors')

                  
                  <br />

                  <div class="ln_solid"></div>

                </div>
              </div>
            </div>
</div></div></div>


            @endsection