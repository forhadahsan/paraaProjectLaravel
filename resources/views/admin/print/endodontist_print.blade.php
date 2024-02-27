<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="{{asset('frontend/img/favicon.svg')}}" />
  <title>PARAA</title>
  @include("frontend.partials.css")
  <link rel="stylesheet" href="{{asset('frontend/css/referal-default.css')}}" />
  <!-- =================style============ -->
  <link rel="stylesheet" href="{{asset('frontend/css/referal.css')}}" />

</head>

<body>
  <div class="container-fluid">
    <div class="body-wrapper" style="background-color: #efefef;">
      <div class="refer-body-print" id="printArea">
        <div class="close-refer">
        <a href="{{url('admin/refrrals/endodontists')}}"><img src="{{asset('frontend/img/close.png')}}" alt="" /></a>
      </div>
        @include("admin.print.print_head")
        <!-- ==================first form================== -->
        <section>
          <div class="referral-form cpb-8">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="form-head">
                    <h3>{{ __('common.referral_form') }}</h3>
                    <p>Dr. Keely Chavez D.D.S</p>
                    <p>Endodontic Specialist</p>
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patient Name:</label>
                    <input type="text" name="name" value="{{ $endodontist->name }}" class="form-input" readonly />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Phone No:</label>
                    <input type="text" name="mobile" class="form-input" value="{{ $endodontist->mobile }}" readonly />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Referred By:</label>
                    <input type="text" class="form-input" name="referred_by" value="{{ $endodontist->referred_by }}" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Phone No:</label>
                    <input type="text" class="form-input" name="referred_mobile" value="{{ $endodontist->referred_mobile }}" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Insurance Carrier:</label>
                    <input type="text" class="form-input" name="insurance_carrier" value="{{ $endodontist->insurance_carrier }}" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Subscriber Name:</label>
                    <input type="text" class="form-input" name="subscriber_name" value="{{ $endodontist->subscriber_name }}" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Subscriber DOB:</label>
                    <input type="text" class="form-input" name="subscriber_dob"  value="{{ $endodontist->subscriber_dob }}" readonly />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Member ID:</label>
                    <input type="text" class="form-input" name="member_id" value="{{ $endodontist->member_id }}" readonly  />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Subscriber Employer:</label>
                    <input type="text" class="form-input" name="subscriber_employer" value="{{ $endodontist->subscriber_employer }}" readonly  />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Group #:</label>
                    <input type="text" class="form-input" name="group" value="{{ $endodontist->group }}" readonly />
                  </div>
                </div>

                <div class="col-md-6"></div>
                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Date:</label>
                    <input type="text" class="form-input" name="date" value="{{ $endodontist->date }}" readonly />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrapper input-gap margin-minus">
                    <label for="" class="input-label text-spance">Please identify teeth to be treated:</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="teeth-root">
                    <p class="left-teeth">Right</p>
                    <p class="right-teeth">Left</p>
                  </div>
                  <div class="dent-selector">
                    <div class="selector-area">
                      @for($i=1; $i<=8; $i++)
                      <div class="check-dent">
                        <input type="checkbox" name="treethIdentity[{{ $i }}]" value="1" class="dent-check" id="{{ $i }}" {{ in_array($i, $teethIdentity)? 'checked' : ''  }} />
                        <label for="{{ $i }}"><span>{{ $i }}</span></label>
                      </div>
                      @endfor
                      
                    </div>
                    <div class="selector-area">
                      @for($i=9; $i<=16; $i++)
                      <div class="check-dent">
                        <input type="checkbox" name="treethIdentity[{{ $i }}]" value="1" class="dent-check" id="{{ $i }}" {{ in_array($i, $teethIdentity)? 'checked' : ''  }} />
                        <label for="{{ $i }}"><span>{{ $i }}</span></label>
                      </div>
                      @endfor
                      
                    </div>
                    <div class="selector-area">
                      @for($i=32; $i>=25; $i--)
                      <div class="check-dent">
                        <input type="checkbox" name="treethIdentity[{{ $i }}]" value="1" class="dent-check" id="{{ $i }}" {{ in_array($i, $teethIdentity)? 'checked' : ''  }} />
                        <label for="{{ $i }}"><span>{{ $i }}</span></label>
                      </div>
                      @endfor

                    </div>
                    <div class="selector-area">
                      @for($i=24; $i>=17; $i--)
                      <div class="check-dent">
                        <input type="checkbox" name="treethIdentity[{{ $i }}]" value="1" class="dent-check" id="{{ $i }}" {{ in_array($i, $teethIdentity)? 'checked' : ''  }} />
                        <label for="{{ $i }}"><span>{{ $i }}</span></label>
                      </div>
                      @endfor
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Remarks:</label>
                    <textarea type="text" name="remarks" class="form-input"> </textarea>
                  </div>
                </div>

                <p class="check-box-title">
                  Upon Treatment Completion, please:
                  <i>(check all that Apply)</i>
                </p>
              
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group-checkbox input-gap">
                      <input id="place_temporary_restoration" class="mark-check" name="place_temporary_restoration" type="checkbox" value="1" />
                      <label for="place_temporary_restoration">Place Temporary Restoration</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group-checkbox input-gap">
                      <input id="complete_permanent_restoration" class="mark-check" name="complete_permanent_restoration" type="checkbox" value="1" />
                      <label for="complete_permanent_restoration">Complete Permanent Restoration</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group-checkbox input-gap">
                      <input id="prepare_post_space" class="mark-check" name="prepare_post_space" type="checkbox" value="1" />
                      <label for="prepare_post_space">Prepare Post Space</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group-checkbox input-gap">
                      <input id="call_our_office" class="mark-check" name="call_our_office" type="checkbox" value="1" />
                      <label for="call_our_office">Call Our Office</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group-checkbox input-gap">
                      <input id="email_treatment_report_with_x_rays" class="mark-check" name="email_treatment_report_with_x_rays" type="checkbox" value="1" />
                      <label for="email_treatment_report_with_x_rays">Email Treatment Report with x-Rays</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group-checkbox input-gap">
                      <input id="mail_treatment_report" class="mark-check" name="mail_treatment_report" type="checkbox" value="1" />
                      <label for="mail_treatment_report">Mail Treatment Report</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Remarks:</label>
                    <textarea type="text" name="upon_treatment_remarks" class="form-input"> </textarea>
                  </div>
                </div>

                <div class="buckner-section" style="text-align: center;">
                      <h3>Buckner</h3>
                      <p>4801 S. Buckner Blvd. Suite 800 Dallas, TX 75227</p>
                      <p>p: 214-275-4808</p>
                    </div>
              </div>


            </div>
          </div>
        </section>
      </div>

    </div>

    
  </div>

  @include("frontend.partials.js")

</body>

</html>