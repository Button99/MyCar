@extends('layouts.app')

@section('content')

<div id="accordion">
    <div class="card">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded>
                    Who we are?
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      MyCar created from a student of TEI Larissa who wanted people to sale/buy/rent cars with safety</div>
    </div>
  </div>

  <div id="accordion">
    <div class="card">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded>
                    Upload Car
                </button>
            </h5>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      To upload a car you need to create an account first and complete the verification of your account. After that you can upload it!</div>
    </div>
  </div>

  <div id="accordion">
    <div class="card">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded>
                    Getting started
                </button>
            </h5>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        After the creation of your account you are ready to post your car and sale </div>
    </div>
  </div>

  <div id="accordion">
    <div class="card">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded>
                    Contact
                </button>
            </h5>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      contact@mycar.com</div>
    </div>
  </div>

  <div id="accordion">
    <div class="card">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded>
                    Found a bug report it!
                </button>
            </h5>
        </div>

        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
      You can report it form the form page ←-link →

**OR**

From the email bugIt@mycar.com      </div>
    </div>
  </div>

  <div id="accordion">
    <div class="card">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded>
                    Disable my account
                </button>
            </h5>
        </div>

        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        Go to your account settings and press `disable my account`
      </div>
    </div>
  </div>
@endsection