@extends('layouts.master_survey')





@section('content')
    








<div class="container">
  <div class="row">
    <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                    <div id="description">Contact information</div>
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                1
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
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

            <form action="{{url(route('store_survey_user_data'))}}" method="post">
              {{ csrf_field() }}
            <div class="form-group"> <!-- Name field -->
                <label class="control-label " for="fname">First Name<span class="asteriskField">*</span></label>
                <input   class="form-control" id="fname" name="fname" type="text" value="{{ old('fname') }}"/>
            </div>

                        <div class="form-group"> <!-- Name field -->
                <label class="control-label " for="lname">Last Name</label>
                <input class="form-control" id="lname" name="lname" type="text"value="{{ old('lname') }}"/>
            </div>

            <div class="form-group"> <!-- Email field -->
                <label class="control-label requiredField" for="email">Email<span class="asteriskField">*</span></label>
                <input class="form-control" id="email" name="email" type="text"value="{{ old('email') }}"/>
            </div>

            <div class="form-group"> <!-- Phone field -->
                <label class="control-label " for="phone">Phone</label>
                <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone') }}"/>
            </div>


                        <div class="form-group"> 
                <label class="control-label " for="terms"><a href="{{url('terms')}}">I agree to the Terms of survey</a>
</label>
                <input id="terms" name="term" type="checkbox"/>
            </div>

            <div class="form-group">
                <button class="btn btn-success " name="submit" type="submit">Continue</button>
            </div>

        </form>

                   @include('admin.includes.errors')
        </div>
    </section>
   </div>
</div>






@endsection