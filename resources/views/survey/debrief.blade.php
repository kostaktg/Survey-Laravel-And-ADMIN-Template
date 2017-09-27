@extends('layouts.master_survey')





@section('content')
    







    <div class="container">
      <div class="row">
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="disabled">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab done">
                                    1
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab done">
                                    2
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab done">
                                    3
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="active">
                            <div id="description">Debrief and Demographics</div>

                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                    4
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>



                <form action="{{url(route('demographic_store',$id))}}" method="post">
                    <br>

 {{ csrf_field() }}





</div>

     <?php $name=1 ?>
<?php $name1=1000 ?>  

@foreach($demographics as $demographic)


@if($demographic->type == '1')
      <input type="hidden" name="{{ $name1 }}" value="{{ $demographic->id }}">
 


 

                    <div class="form-group"> 
                        <label class="control-label requiredField" for="email">{{ $demographic->question }}</label>

                        <select class="form-control" id="sel1" name="{{ $name }}">


 
 @foreach($items as $item) 


 @if($demographic->id == $item->demographic_id )                           
                            <option value="{{$item->title}}">{{$item->title}}</option>
                        
 @endif
@endforeach


                        </select>
                    </div>



@else
      <input type="hidden" name="{{ $name1 }}" value="{{ $demographic->id }}">
      <div class="form-group"> <!-- Name field -->
                        <label class="control-label " for="name">{{ $demographic->question }}</label>
                        <input class="form-control" id="name" name="{{ $name }}" type="text"/>
                    </div>


@endif


  <?php $name++ ?>
                <?php $name1++ ?>
          
@endforeach




 
                    <div class="form-group">
                        <button class="btn btn-success " name="submit" type="submit">Finish</button>
                    </div>

                </form>


            </div>
        </section>
    </div>
</div>






@endsection