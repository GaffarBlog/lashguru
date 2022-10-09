@extends('main')
@section('title') {{'Website Code'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">

  <!-- Dashboard Page Heading -->
  {{-- <h1 class="h3 mb-4 text-gray-800">@lang('language.Dashboard')</h1> --}}
  <h1 class="h3 mb-4 text-gray-800">Content: Website Codes</h1>
  <hr class="sidebar-divider rounded p-1 bg-primary text-white">
  <div class="row">
    {{--Section One start 01--}}
    <div class="col-4">
      <div id="accordionstart">
        <div class="card border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneesiteweb"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneesiteweb"
                  aria-expanded="true" aria-controls="collapseOne">1. Website data</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneesiteweb" class="collapse" aria-labelledby="headingOne" data-parent="#accordionstart">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Website Url</p>
                <p class="card-title text-right text-primary cwcode">{Website}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Provider</p>
                <p class="card-title text-right text-primary cwcode">{ProviderCompanyName}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end 01--}}
      {{-- start 04--}}
      <div id="accordiona">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseeasear"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseeasear"
                  aria-expanded="true" aria-controls="collapseOne">4. Areas</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseeasear" class="collapse" aria-labelledby="headingOne" data-parent="#accordiona">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title Area 1</p>
                <p class="card-title text-right text-primary cwcode">{Area1Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Area 1</p>
                <p class="card-title text-right text-primary cwcode">{Area1Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between cwcodee mt-2">
                <p class="card-title text-left">Title Area 2</p>
                <p class="card-title text-right text-primary cwcode">{Area2Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Area 2</p>
                <p class="card-title text-right text-primary cwcode">{Area2Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between cwcodee mt-2">
                <p class="card-title text-left">Title Area 3</p>
                <p class="card-title text-right text-primary cwcode">{Area3Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Area 3</p>
                <p class="card-title text-right text-primary cwcode">{Area3Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between cwcodee mt-2">
                <p class="card-title text-left">Title Area 4</p>
                <p class="card-title text-right text-primary cwcode">{Area4Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Area 4</p>
                <p class="card-title text-right text-primary cwcode">{Area4Infotext}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End 04 --}}
      {{-- start 07--}}
      <div id="accordionc">
        <div class="card border mt-3 border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneeser"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneeser"
                  aria-expanded="true" aria-controls="collapseOne">7. Contents</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneeser" class="collapse" aria-labelledby="headingOne" data-parent="#accordionc">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{ContentTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{ContentInfotext}</p>
              </div>
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Content 1</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Content1Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Content1Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Content1Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Content 2</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Content2Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Content2Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Content2Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Content 3</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Content3Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Content3Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Content3Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Content 4</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Content4Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Content4Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Content4Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Content 5</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Content5Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Content5Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Content5Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Content 6</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Content6Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Content6Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Content6Infotext2}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End 07 --}}
      {{-- start 04--}}
      <div id="accordions">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneesn"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneesn"
                  aria-expanded="true" aria-controls="collapseOne">10. Social Networks</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneesn" class="collapse" aria-labelledby="headingOne" data-parent="#accordions">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{SocialTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{SocialInfotext}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end 04--}}
      {{-- start 13--}}
      <div id="accordionct">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneegy"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneegy"
                  aria-expanded="true" aria-controls="collapseOne">13. Contact</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneegy" class="collapse" aria-labelledby="headingOne" data-parent="#accordionct">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Link Name</p>
                <p class="card-title text-right text-primary cwcode">{LinkNameContact}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{ContactInfotext}</p>
              </div>
              {{-- Start 13 - Custom Box --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Custom Box</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-danger">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{CustomBoxtitleContact}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description</p>
                <p class="card-title text-right text-primary cwcode">{CustomBoxtextContact}</p>
              </div>
              {{-- End 13 - Custom Box --}}
            </div>
          </div>
        </div>
      </div>
      {{-- end 13--}}
      {{-- start 16 --}}
      <div id="accordionnurt">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneebr"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneebr"
                  aria-expanded="true" aria-controls="collapseOne">16. Numerator</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneebr" class="collapse" aria-labelledby="headingOne" data-parent="#accordionnurt">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{NumeratorInfotext}</p>
              </div>
              {{-- start 16 - numerator & numerator texts--}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Numerator & Numerator Texts</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Numerator 1</p>
                <p class="card-title text-right text-primary cwcode">{Numerator1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Numerator 1 Text</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorText1}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Numerator 2</p>
                <p class="card-title text-right text-primary cwcode">{Numerator2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Numerator 2 Text</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorText2}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Numerator 3</p>
                <p class="card-title text-right text-primary cwcode">{Numerator3}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Numerator 3 Text</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorText3}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Numerator 4</p>
                <p class="card-title text-right text-primary cwcode">{Numerator4}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Numerator 4 Text</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorText4}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Numerator 5</p>
                <p class="card-title text-right text-primary cwcode">{Numerator5}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Numerator 5 Text</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorText5}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Numerator 6</p>
                <p class="card-title text-right text-primary cwcode">{Numerator6}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Numerator 6 Text</p>
                <p class="card-title text-right text-primary cwcode">{NumeratorText6}</p>
              </div>
              {{-- end 16 - numerator & numerator texts--}}
            </div>
          </div>
        </div>
      </div>
      {{-- end 16 --}}
      {{-- start 19--}}
      <div id="accordiontcx">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneear"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneear"
                  aria-expanded="true" aria-controls="collapseOne">19. Custom Texts</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneear" class="collapse" aria-labelledby="headingOne" data-parent="#accordiontcx">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Phone (with Prefix Code)</p>
                <p class="card-title text-right text-primary cwcode">{CustomPhoneNumber1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Phone (with Prefix Code)</p>
                <p class="card-title text-right text-primary cwcode">{CustomPhoneNumber1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Phone (with Prefix Code)</p>
                <p class="card-title text-right text-primary cwcode">{CustomPhoneNumber1}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Custom Text (Address) </p>
                <p class="card-title text-right text-primary cwcode">{CustomAddress1}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Custom Text (Business Hours)</p>
                <p class="card-title text-right text-primary cwcode">{CustomBusinessHours1}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End 19 --}}
    </div>
    {{--Section One End --}}
    {{--Section Two start--}}
    <div class="col-4">
      <div id="accordioncinf">
        {{-- start 02--}}
        <div class="card border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseciform"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseciform"
                  aria-expanded="true" aria-controls="collapseOne">2. Company Informations</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseciform" class="collapse" aria-labelledby="headingOne" data-parent="#accordioncinf">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Company Name</p>
                <p class="card-title text-right text-primary cwcode">{CompanyName}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Street</p>
                <p class="card-title text-right text-primary cwcode">{Street}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Zip Code</p>
                <p class="card-title text-right text-primary cwcode">{ZipCode}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">City</p>
                <p class="card-title text-right text-primary cwcode">{City}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Area</p>
                <p class="card-title text-right text-primary cwcode">{Area}</p>
              </div>
              {{-- start 02 - Contact Informations --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneear"
                  aria-expanded="true" aria-controls="collapseOne">Contact Informations</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Business Mail-ID</p>
                <p class="card-title text-right text-primary cwcode">{MailId}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Main Website</p>
                <p class="card-title text-right text-primary cwcode">{WebsiteMain}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">VAT Number</p>
                <p class="card-title text-right text-primary cwcode">{VATNumber}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Register Office</p>
                <p class="card-title text-right text-primary cwcode">{RegisterOffice}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Register Number</p>
                <p class="card-title text-right text-primary cwcode">{RegisterNumber}</p>
              </div>
              {{-- end 02 - Contact Informations --}}
              {{-- start 02 - Owner Informations --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneear"
                  aria-expanded="true" aria-controls="collapseOne">Owner Information</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">First Name</p>
                <p class="card-title text-right text-primary cwcode">{FirstName}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Last Name</p>
                <p class="card-title text-right text-primary cwcode">{LastName}</p>
              </div>
              {{-- end 02 - Owner Informations --}}
              {{-- start 02 - Other Informations --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneear"
                  aria-expanded="true" aria-controls="collapseOne">Other Information</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Founding Year</p>
                <p class="card-title text-right text-primary cwcode">{FoundingYear}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Count of Employers</p>
                <p class="card-title text-right text-primary cwcode">{Employers}</p>
              </div>
              {{-- end 02 - Other Informations --}}
            </div>
          </div>
        </div>
      </div>
      {{-- End 02 --}}
      {{-- start 05--}}
      <div id="accordionabtu">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneeabt"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneeabt"
                  aria-expanded="true" aria-controls="collapseOne">5. About</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneeabt" class="collapse" aria-labelledby="headingOne" data-parent="#accordionabtu">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{AboutTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description</p>
                <p class="card-title text-right text-primary cwcode">{AboutInfotext}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end 05--}}
      {{-- start 08--}}
      <div id="accordiongall">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneegyqw"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneegyqw"
                  aria-expanded="true" aria-controls="collapseOne">8. Gallery</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneegyqw" class="collapse" aria-labelledby="headingOne" data-parent="#accordiongall">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">Service title</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">Serviceinfotext</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end 08--}}
      {{-- start 11 --}}
      <div id="accordionbuho">
        <div class="card mt-3 mb-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneebn"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneebn"
                  aria-expanded="true" aria-controls="collapseOne">11. Business hours</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneebn" class="collapse" aria-labelledby="headingOne" data-parent="#accordionbuho">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Link Name</p>
                <p class="card-title text-right text-primary cwcode">{LinkNameTimes}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursInfotext}</p>
              </div>
              {{-- Start 11 - Custom Box --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Custom Box</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-danger">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{CustomBoxtitleBusinessTimes}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description</p>
                <p class="card-title text-right text-primary cwcode">{CustomBoxtextBusinessTimes}</p>
              </div>
              {{-- End 11 - Custom Box --}}
              {{-- Start 11 - Day Codes --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Day Codes</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Monday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextMon}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursMon}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Tuesday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextTue}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursTue}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Wednesday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextWed}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursWed}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Thursday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextThu}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursThu}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Friday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextFri}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursFri}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Saturday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextSat}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursSat}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Sunday</p>
                <p class="card-title text-right text-primary cwcode">{DayTextSun}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Business Hours</p>
                <p class="card-title text-right text-primary cwcode">{BusinessHoursSun}</p>
              </div>
              {{-- End 11 - Day Codes --}}
            </div>
          </div>
        </div>
      </div>
      {{-- start 14 --}}
      <div id="accordiontm">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOnteamb"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOnteamb"
                  aria-expanded="true" aria-controls="collapseOne">14. Team Members</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOnteamb" class="collapse" aria-labelledby="headingOne" data-parent="#accordiontm">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{TeamMembersTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{TeamMembersInfotext}</p>
              </div>
              {{-- start 14 - team member names & function--}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Team Member Names & Function</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Team Member Name 1</p>
                <p class="card-title text-right text-primary cwcode">{Name1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Function 1</p>
                <p class="card-title text-right text-primary cwcode">{Function1}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Team Member Name 2</p>
                <p class="card-title text-right text-primary cwcode">{Name2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Function 2</p>
                <p class="card-title text-right text-primary cwcode">{Function2}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Team Member Name 3</p>
                <p class="card-title text-right text-primary cwcode">{Name3}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Function 3</p>
                <p class="card-title text-right text-primary cwcode">{Function3}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Team Member Name 4</p>
                <p class="card-title text-right text-primary cwcode">{Name4}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Function 4</p>
                <p class="card-title text-right text-primary cwcode">{Function4}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Team Member Name 5</p>
                <p class="card-title text-right text-primary cwcode">{Name5}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Function 5</p>
                <p class="card-title text-right text-primary cwcode">{Function5}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Team Member Name 6</p>
                <p class="card-title text-right text-primary cwcode">{Name6}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Function 6</p>
                <p class="card-title text-right text-primary cwcode">{Function6}</p>
              </div>
              {{-- end 14 - team member names & function--}}
            </div>
          </div>
        </div>
      </div>
      {{-- end 14 --}}
      {{-- start 17 --}}
      <div id="accordionsign">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneesignar"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneesignar"
                  aria-expanded="true" aria-controls="collapseOne">17. Signpost</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneesignar" class="collapse" aria-labelledby="headingOne" data-parent="#accordionsign">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title Signpost 1</p>
                <p class="card-title text-right text-primary cwcode">{Signpost1Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Signpost 1</p>
                <p class="card-title text-right text-primary cwcode">{Signpost1Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Title Signpost 2</p>
                <p class="card-title text-right text-primary cwcode">{Signpost2Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Signpost 2</p>
                <p class="card-title text-right text-primary cwcode">{Signpost2Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Title Signpost 3</p>
                <p class="card-title text-right text-primary cwcode">{Signpost3Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Signpost 3</p>
                <p class="card-title text-right text-primary cwcode">{Signpost3Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Title Signpost 4</p>
                <p class="card-title text-right text-primary cwcode">{Signpost4Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Signpost 4</p>
                <p class="card-title text-right text-primary cwcode">{Signpost4Infotext}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End 17 --}}
      {{-- start 20 --}}
      <div id="accordionff">
        <div class="card mt-3 mb-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOnfooteeear"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOnfooteeear"
                  aria-expanded="true" aria-controls="collapseOne">20. Footer</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOnfooteeear" class="collapse" aria-labelledby="headingOne" data-parent="#accordionff">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">PreFooter Text</p>
                <p class="card-title text-right text-primary cwcode">{PreFooterText}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Footer Text 2</p>
                <p class="card-title text-right text-primary cwcode">{FooterText2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Footer Text 3</p>
                <p class="card-title text-right text-primary cwcode">{FooterText3}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End 20 --}}
    </div>
    {{--Section two end --}}
    {{--Section three start--}}
    {{--Start 03--}}
    <div class="col-4">
      <div id="accordionhere">
        <div class="card border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneetho"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneetho"
                  aria-expanded="true" aria-controls="collapseOne">3. Top Hero</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneetho" class="collapse" aria-labelledby="headingOne" data-parent="#accordionhere">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Hero Title Row 1</p>
                <p class="card-title text-right text-primary cwcode">{HeroTitleRow1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Hero Title Row 2</p>
                <p class="card-title text-right text-primary cwcode">{HeroTitleRow2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Hero Title Row 3</p>
                <p class="card-title text-right text-primary cwcode">{HeroTitleRow3}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Hero Slogan</p>
                <p class="card-title text-right text-primary cwcode">{HeroSlogan}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end 03--}}
      {{-- service 06 --}}
      <div id="accordionservice">
        <div class="card border mt-3 border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseservice"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseservice"
                  aria-expanded="true" aria-controls="collapseOne">6. Service</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseservice" class="collapse" aria-labelledby="headingOne" data-parent="#accordionservice">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{ServiceTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{ServiceInfotext}</p>
              </div>
              {{-- End service --}}
              {{-- Start Service 1 --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Service 1</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Service1Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Service1Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Service1Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Starting Price</p>
                <p class="card-title text-right text-primary cwcode">{ServiceStart1}</p>
              </div>
              {{-- End Service 1 --}}
              {{-- Start Service 2 --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Service 2</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Service2Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Service2Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Service2Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Starting Price</p>
                <p class="card-title text-right text-primary cwcode">{ServiceStart2}</p>
              </div>
              {{-- End Service 2 --}}
              {{-- Start Service 3 --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Service 3</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Service3Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Service3Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Service3Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Starting Price</p>
                <p class="card-title text-right text-primary cwcode">{ServiceStart3}</p>
              </div>
              {{-- End Service 3 --}}
              {{-- Start Service 4 --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Service 4</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Service4Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Service4Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Service4Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Starting Price</p>
                <p class="card-title text-right text-primary cwcode">{ServiceStart4}</p>
              </div>
              {{-- End Service 4 --}}
              {{-- Start Service 5 --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Service 5</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Service5Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Service5Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Service5Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Starting Price</p>
                <p class="card-title text-right text-primary cwcode">{ServiceStart5}</p>
              </div>
              {{-- End Service 5 --}}
              {{-- Start Service 6 --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Service 6</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-info">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left mt-3">Title</p>
                <p class="card-title text-right mt-3 text-primary cwcode">{Service6Title}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{Service6Infotext1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left"> Short Description </p>
                <p class="card-title text-right text-primary cwcode">{Service6Infotext2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Starting Price</p>
                <p class="card-title text-right text-primary cwcode">{ServiceStart6}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- start 09 --}}
      <div id="accordionb">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOnbrandeebr"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOnbrandeebr"
                  aria-expanded="true" aria-controls="collapseOne">9. Brands</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOnbrandeebr" class="collapse" aria-labelledby="headingOne" data-parent="#accordionb">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{BrandTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{BrandInfotext}</p>
              </div>
              {{-- start 09 - brand name & description--}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Brand Name & Description</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 1</p>
                <p class="card-title text-right text-primary cwcode">{Brand1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 1</p>
                <p class="card-title text-right text-primary cwcode">{Brand1Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 2</p>
                <p class="card-title text-right text-primary cwcode">{Brand2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 2</p>
                <p class="card-title text-right text-primary cwcode">{Brand2Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 3</p>
                <p class="card-title text-right text-primary cwcode">{Brand3}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 3</p>
                <p class="card-title text-right text-primary cwcode">{Brand3Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 4</p>
                <p class="card-title text-right text-primary cwcode">{Brand4}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 4</p>
                <p class="card-title text-right text-primary cwcode">{Brand4Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 5</p>
                <p class="card-title text-right text-primary cwcode">{Brand5}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 5</p>
                <p class="card-title text-right text-primary cwcode">{Brand5Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 6</p>
                <p class="card-title text-right text-primary cwcode">{Brand6}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 6</p>
                <p class="card-title text-right text-primary cwcode">{Brand6Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 7</p>
                <p class="card-title text-right text-primary cwcode">{Brand7}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 7</p>
                <p class="card-title text-right text-primary cwcode">{Brand7Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 8</p>
                <p class="card-title text-right text-primary cwcode">{Brand8}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 8</p>
                <p class="card-title text-right text-primary cwcode">{Brand8Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 9</p>
                <p class="card-title text-right text-primary cwcode">{Brand9}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 9</p>
                <p class="card-title text-right text-primary cwcode">{Brand9Infotext}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Brand Name 10</p>
                <p class="card-title text-right text-primary cwcode">{Brand10}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description Brand 10</p>
                <p class="card-title text-right text-primary cwcode">{Brand10Infotext}</p>
              </div>
              {{-- end 09 - brand name & description--}}
            </div>
          </div>
        </div>
      </div>
      {{-- end 09 --}}
      {{-- start 12--}}
      <div id="accordionmap">
        <div class="card mt-3 mb-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseOneebmpp"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseOneempp"
                  aria-expanded="true" aria-controls="collapseOne">12. Map</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseOneempp" class="collapse" aria-labelledby="headingOne" data-parent="#accordionmap">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Link Name</p>
                <p class="card-title text-right text-primary cwcode">{LinkNameMap}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description</p>
                <p class="card-title text-right text-primary cwcode">{MapInfotext}</p>
              </div>
              {{-- Start 05 - Custom Box --}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Custom Box</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-danger">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{CustomBoxtitleMap}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description</p>
                <p class="card-title text-right text-primary cwcode">{CustomBoxtextMap}</p>
              </div>
              {{-- End 05 - Custom Box --}}
            </div>
          </div>
        </div>
      </div>
      {{-- start 15 --}}
      <div id="accordionrew">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapserevewOneebr"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapserevewOneebr"
                  aria-expanded="true" aria-controls="collapseOne">15. Review</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapserevewOneebr" class="collapse" aria-labelledby="headingOne" data-parent="#accordionrew">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Title</p>
                <p class="card-title text-right text-primary cwcode">{ReviewsTitle}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">Description </p>
                <p class="card-title text-right text-primary cwcode">{ReviewsInfotext}</p>
              </div>
              {{-- start 15 - review texts & user names--}}
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold">Review Texts & User Names</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Review Text 1</p>
                <p class="card-title text-right text-primary cwcode">{Review1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">User Name 1</p>
                <p class="card-title text-right text-primary cwcode">{UserName1}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Review Text 2</p>
                <p class="card-title text-right text-primary cwcode">{Review2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">User Name 2</p>
                <p class="card-title text-right text-primary cwcode">{UserName2}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Review Text 3</p>
                <p class="card-title text-right text-primary cwcode">{Review3}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">User Name 3</p>
                <p class="card-title text-right text-primary cwcode">{UserName3}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Review Text 4</p>
                <p class="card-title text-right text-primary cwcode">{Review4}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">User Name 4</p>
                <p class="card-title text-right text-primary cwcode">{UserName4}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Review Text 5</p>
                <p class="card-title text-right text-primary cwcode">{Review5}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">User Name 5</p>
                <p class="card-title text-right text-primary cwcode">{UserName5}</p>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-warning">
              <div class="d-flex justify-content-between mt-2 cwcodee">
                <p class="card-title text-left">Review Text 6</p>
                <p class="card-title text-right text-primary cwcode">{Review6}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">User Name 6</p>
                <p class="card-title text-right text-primary cwcode">{UserName6}</p>
              </div>
              {{-- end 15 - review texts & user names--}}
            </div>
          </div>
        </div>
      </div>
      {{-- end 15 --}}
      {{-- start 18 --}}
      <div id="accordionerror">
        <div class="card mt-3 border border-primary rounded border-6 bg-white">
          <div class="card-header bg-white" id="headingOne" data-toggle="collapse" data-target="#collapseerrorOneear"
            aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <div class="d-flex justify-content-between">
                <h5 class=" text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseerrorOneear"
                  aria-expanded="true" aria-controls="collapseOne">18. 404 Page</h5>
              </div>
              <hr class="sidebar-divider my-0 p-1 rounded bg-primary">
          </div>
          <div id="collapseerrorOneear" class="collapse" aria-labelledby="headingOne" data-parent="#accordionerror">
            <div class="card-body">
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">404 Page Title Row 1</p>
                <p class="card-title text-right text-primary cwcode">{404TitleRow1}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">404 Page Title Row 2</p>
                <p class="card-title text-right text-primary cwcode">{404TitleRow2}</p>
              </div>
              <div class="d-flex justify-content-between cwcodee">
                <p class="card-title text-left">404 Page Title Row 3</p>
                <p class="card-title text-right text-primary cwcode">{404TitleRow3}</p>
              </div>
            </div>
          </div>
        </div>
        {{-- End 18 --}}
      </div>
    </div>
  </div>
</div>
{{--Section three end--}}
<!-- Page End -->
@push('js')
<script>
  var mainDiv = jQuery('.cwcodee');
    var childDiv = jQuery(mainDiv).children('.cwcode');
    jQuery(childDiv).click( function() {
        jQuery(this).addClass('displayclass');
        var temp = jQuery("<input>");
        jQuery("body").append(temp);
        temp.val(jQuery('.displayclass').text()).select();
        document.execCommand("copy");
        temp.remove();
        alert("Code Copied!");
        jQuery(this).removeClass('displayclass');
    });
</script>

@endpush
</div>
@endsection
<!-- End of Main Content -->