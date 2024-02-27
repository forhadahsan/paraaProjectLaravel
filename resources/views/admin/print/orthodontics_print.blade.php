<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.svg" />
  <title>PARAA</title>
  <!-- =============font========== -->

  @include('frontend.partials.css')
  <link rel="stylesheet" href="{{asset('frontend/css/referal-default.css')}}" />
  <!-- =================style============ -->
  <link rel="stylesheet" href="{{asset('frontend/css/referal.css')}}" />

  <style>
    body{
      color: #000000;
      font-weight: 500;
      font-size: 20px;
      font-family: var(--body-font) !important;
      line-height: 150%;
      overflow-x: hidden;
    }
  </style>

</head>

<body>
  <div class="body-wrapper">
    <div class="refer-body">
      <div class="close-refer">
        <a href="{{url('admin/refrrals/orthodontics')}}"><img src="{{asset('frontend/img/close.png')}}" alt="" /></a>
      </div>
      @include("admin.print.print_head")
      <form data-action="{{ route('orthodontics.store') }}" method="POST" id="orthodontics-form" enctype="multipart/form-data">
        @csrf
        <section>
          <div class="lab-section cpy-60">
            <div class="container">
              <div class="row">
                <h3 style="padding-bottom: 20px;">Referral Form</h3>

                <div class="col-md-5">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Today’s Date:</label>
                    <input type="text" name="moment" value="{{ $orthodontic->moment }}" class="form-input" readonly />
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patient Name:</label>
                    <input type="text" name="name" value="{{ $orthodontic->name }}" class="form-input" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patient’s Date of Birth:
                    </label>
                    <input type="text" name="date_of_birth" value="{{ $orthodontic->date_of_birth }}" class="form-input" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patient’s Phone Number:</label>
                    <input type="text" name="mobile" value="{{ $orthodontic->mobile }}" class="form-input" readonly />
                  </div>
                </div>

                <div class="col-lg-7 col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patients Email:</label>
                    <input type="email" value="{{ $orthodontic->email }}" name="email" class="form-input" readonly />
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-wrapper input-gap f-row-brack">
                    <label for="" class="input-label">Medical Considerations/Premedicatio:</label>
                    <textarea type="text" name="medical_consideration" class="form-input" readonly> {{ $orthodontic->medical_consideration }}</textarea>
                  </div>
                </div>
              </div>

              <h3 class="section-title">Pre-Ortho Clearance Items:</h3>

              <div class="row">
                <div class="col-md-12">
                  <p class="mt-3 text-smaller">
                    Does the patient have active decay?
                  </p>

                  <div class="input-wrapper input-gap">
                    <input type="radio" name="have_active_decay" value="1" id="have_active_decay_1" {{ $orthodontic->have_active_decay == 1? 'checked' : '' }} readonly />
                    <label for="have_active_decay_1"> Yes </label>

                    <input type="radio" name="have_active_decay" value="0" id="have_active_decay_2" {{ $orthodontic->have_active_decay == 0? 'checked' : '' }} readonly />
                    <label for="have_active_decay_2">No</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <p class="mt-3 text-smaller">
                    Is the patient for ortho treatment to begin?
                  </p>

                  <div class="input-wrapper input-gap">
                    <input type="radio" name="ortho_treatment_to_begin" value="1" id="ortho_treatment_to_begin_1" {{ $orthodontic->ortho_treatment_to_begin == 1? 'checked' : '' }} readonly />
                    <label for="ortho_treatment_to_begin_1"> Yes </label>

                    <input type="radio" name="ortho_treatment_to_begin" value="0" id="ortho_treatment_to_begin_2" {{ $orthodontic->ortho_treatment_to_begin == 0? 'checked' : '' }} readonly />
                    <label for="ortho_treatment_to_begin_2">No</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Notes:</label>
                    <textarea type="text" name="note"  class="form-input" readonly> {{ $orthodontic->medical_consideration }} </textarea>
                  </div>
                </div>
                
                @if($orthodontic->document_name)
                <div class="col-md-12">
                  <p class="mt-3 text-smaller">
                    Upload most recent insurance breakdown
                  </p>
                  <a href="{{ url('uploads/documents/'.$orthodontic->document_name) }}" title="Click for download" download="">{{$orthodontic->document_original_name}}</a>
                </div>
                @endif
              </div>
            </div>
          </div>
        </section>
      </form>
    </div>
  </div>

  @include('frontend.partials.js')

</body>

</html>