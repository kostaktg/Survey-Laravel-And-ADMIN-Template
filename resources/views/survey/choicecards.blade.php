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
                            <li role="presentation" class="active">
                                <div id="description">Choise Cards</div>
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






                    <form action="{{url(route('survey_data_choice_card_store',$id))}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="set_id" value="{{$set_id}}">
                    <ul class="bxslider">
     <?php $name=1 ?>
<?php $name1=1000 ?>                   
@foreach($choicecards as $choicecard)
@if($choicecard->set == $set_id)

                        <div class="survey-question-card">

                            <table class="tg">
                            <tr>
                                <th class="tg-031e"></th>
                                <th class="tg-031e">Scenario 1</th>
                                <th class="tg-031e">Scenario 2</th>
                                <th class="tg-031e">Status Quo</th>
                            </tr>



@foreach($values as $value)
@if($value->choice_card_id == $choicecard->id )
                            <tr>
                                <td class="tg-e3zv hover-information">{{ App\Attribute::find($value->attribute)->name }}<div>{{ App\Attribute::find($value->attribute)->small_info }}</div></td>
                                <td class="tg-031e">{{$value->value1}}</td>
                                <td class="tg-031e">{{$value->value2}}</td>
                                <td class="tg-031e">{{$value->value3}}</td>
                            </tr>


                           
                            @endif
 @endforeach                           
                          





                            <tr>
                                <td class="tg-9hbo">I prefer</td>

                                <input type="hidden" name="{{ $name1 }}" value="{{ $choicecard->id }}">

                                <td class="tg-yw4l"><input value="1" type="radio" name="{{ $name }}" value="male"></td>
                                <td class="tg-yw4l"><input value="2" type="radio" name="{{ $name }}" value="female"></td>
                                <td class="tg-yw4l"><input value="3" type="radio" name="{{ $name }}" value="other"></td>
                            </tr>
                        </table>

                        </div>

               <?php $name++ ?>
                <?php $name1++ ?>

@endif
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