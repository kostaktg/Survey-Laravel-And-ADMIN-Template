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

                    <li role="presentation" class="active">
                    <div id="description">Questions</div>

                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                            2
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                            3
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                            4
                            </span>
                        </a>
                    </li>
                </ul>
            </div>





        <form action="{{url(route('survey_data_question_store',$id))}}" method="post">

             {{ csrf_field() }}
            <ul class="bxslider">

<?php $name=1 ?>
<?php $name1=1000 ?>

@foreach($boxes as $box)


        <div class="survey-question-card">
        <h2>{{ $box->title }}</h2>
            <p>{{ $box->info }}</p>
                <table class="tg">
                  <tr>
                    <th class="tg-031e"></th>
                    <th class="tg-031e">1</th>
                    <th class="tg-yw4l">2</th>
                    <th class="tg-yw4l">3</th>
                    <th class="tg-yw4l">4</th>
                    <th class="tg-yw4l">5</th>
                </tr>

                
@foreach($questions as $question)
@if($question->box_id == $box->id)
                <tr>

                <input value="{{ $question->id }}"  name="{{ $name1 }}" type="hidden">

                    <td class="tg-031e">{{ $question->text }}</td>
                    <td class="tg-yw4l"><input value="1"  name="{{ $name }}" type="radio"></td>
                    <td class="tg-yw4l"><input value="2" name="{{ $name }}" type="radio"></td>
                    <td class="tg-yw4l"><input value="3" name="{{ $name }}" type="radio"></td>
                    <td class="tg-yw4l"><input value="4" name="{{ $name }}" type="radio"></td>
                    <td class="tg-yw4l"><input value="5" name="{{ $name }}" type="radio"></td>
                </tr>

                <?php $name++ ?>
                <?php $name1++ ?>
          
@endif                
@endforeach

            </table>

        </div>


@endforeach

    </ul>
    <div id="center-buttons">
        <a id="prevButton"></a>
        <a id="nextButton"></a>
        <input id="submit" type="submit" value="Continue" class="btn btn-success">
    </div>
    </form>
    

            
        </div>
    </section>
   </div>
</div>









@endsection