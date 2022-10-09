<!-- Begin Text Editor Page Content -->
@extends('main')
@section('title') {{'Text Editor'}} @endsection
@section('main-container')
<!-- Text Editor Page Start -->
<div class="container-fluid">
    <!-- Text EditorPage Heading -->
	<a href="/content-img-cropped" class="btn btn-primary float-right mr-2">Banners & Pictures</a>
	<a href="/content-img-website-elements" class="btn btn-primary float-right mr-2">Website Elements</a>
	<div class="d-flex justify-content-between mb-3">
        <h1 class="h3 text-gray-800">Content: Text Editor</h1>
    </div>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    {{--Section Data Info Start --}}
    <div class="row mt-4">
        <div class="col-12">
            <div id="accordionstart">
                <div class="card border border-info rounded border-6 bg-info">
                    <div class="card-header bg-info" id="headingOne" data-toggle="collapse"
                        data-target="#collapseOneesiteweb" aria-expanded="true" aria-controls="collapseOne">
                        <h5 class="mb-0">
                            <div class="d-flex justify-content-between">
                                <h5 class=" text-white font-weight-bold" data-toggle="collapse"
                                    data-target="#collapseOneesiteweb" aria-expanded="true" aria-controls="collapseOne">
                                    Company Data</h5>
                            </div>
                    </div>
                    <div id="collapseOneesiteweb" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionstart">
                        <div class="card border border-info">
                            <div class="card-body bg-info">
                                <div class="row p-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center">Company Data</span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{CompanyName}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Street}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ZipCode}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Area}</span>
                                    </div>
                                </div>
                                {{--End company Data --}}
                                {{-- company info start --}}
                                <div class="row pl-2 pr-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center">Company Info</span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{PhoneCode}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Prefix}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{PhoneNumber}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{MailId}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{WebsiteMain}</span>
                                    </div>
                                </div>
                                {{-- start code --}}
                                <div class="row pl-2 pr-2 mt-3">
                                    <div class="col-12 bg-warning card text-white">
                                        <div class="d-flex justify-content-around ">
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">
                                                Zeilenumbruch:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;br&gt;</span>
                                            </p>
                                            <p
                                                class="card-title text-left mt-1 mb-1 contentWorkerText font-weight-bold ">
                                                Fettschrift:<br>
                                                <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;strong&gt;&lt;&#47;strong&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText font-italic">
                                                Betonung:<br>
                                                <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;em&gt;&lt;&#47;em&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText text-underline">
                                                Unterstrichen:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;u&gt;&lt;&#47;u&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText font-italic ">
                                                Kursiv:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;i&gt;&lt;&#47;i&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">
                                                Durchgestrichen:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;s&gt;&lt;&#47;s&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">Link:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;ahref&#61;&#34;&#34;&gt;Link-Text&lt;&#47;a&gt;</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- End code --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div id="accordioncustmfield">
                <div class="card border border-info border-6 bg-info">
                    <div class="card-header bg-info" id="headingOne" data-toggle="collapse"
                        data-target="#collapseOneField" aria-expanded="true" aria-controls="collapseOne">
                        <h5 class="mb-0">
                            <div class="d-flex justify-content-between">
                                <h5 class=" text-white font-weight-bold" data-toggle="collapse"
                                    data-target="#collapseOneField" aria-expanded="true" aria-controls="collapseOne">
                                    Custom Fields</h5>
                            </div>
                    </div>
                    <div id="collapseOneField" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordioncustmfield">
                        <div class="card  border border-info">
                            <div class="card-body bg-info  border border-info">
                                <div class="row pt-3">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class=" col-2 text-white">Services and Prices</div>
                                    <div class=" col-2 text-white"></div>
                                    <div class=" col-2 text-white">Cities</div>
                                    <div class=" col-2 text-white">Brands</div>
                                    <div class=" col-2 text-white">Company Infos</div>
                                </div>
                                <div class="row p-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Service1Title}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ServiceStart1}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Brand1}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{FoundingYear}</span>
                                    </div>
                                </div>
                                {{--End--}}
                                {{--start --}}
                                <div class="row pl-2 pr-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Service2Title}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ServiceStart2}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City2}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Brand2}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{RegisterOffice}</span>
                                    </div>
                                </div>
                                {{--End --}}
                                {{--start--}}
                                <div class="row p-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Service3Title}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ServiceStart3}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City3}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Brand3}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{RegisterNumber}</span>
                                    </div>
                                </div>
                                {{--End --}}
                                {{--start--}}
                                <div class="row pl-2 pr-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Service4Title}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ServiceStart4}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City4}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Brand4}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{VATNumber}</span>
                                    </div>
                                </div>
                                {{--End --}}
                                {{--start--}}
                                <div class="row p-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Service5Title}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ServiceStart5}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City5}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Brand5}</span>
                                    </div>
                                    <div class="col-lg ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1"></span>
                                    </div>
                                </div>
                                {{--End --}}
                                {{--start--}}
                                <div class="row pl-2 pr-2 contentWorkerText">
                                    <span class=" col-lg text-white self-align-center"></span>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Service6Title}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{ServiceStart6}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{City6}</span>
                                    </div>
                                    <div class="col-lg card ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1">{Brand6}</span>
                                    </div>
                                    <div class="col-lg ml-2 text-center text-primary contentWorkerTextCode"><span
                                            class="mt-1 mb-1"></span>
                                    </div>
                                </div>
                                {{-- start code --}}
                                <div class="row pl-2 pr-2 mt-3">
                                    <div class="col-12 bg-warning card text-white">
                                        <div class="d-flex justify-content-around ">
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">
                                                Zeilenumbruch:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;br&gt;</span>
                                            </p>
                                            <p
                                                class="card-title text-left mt-1 mb-1 contentWorkerText font-weight-bold ">
                                                Fettschrift:<br>
                                                <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;strong&gt;&lt;&#47;strong&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">Betonung:<br>
                                                <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;em&gt;&lt;&#47;em&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText text-underline ">
                                                Unterstrichen:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;u&gt;&lt;&#47;u&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText font-italic ">
                                                Kursiv:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;i&gt;&lt;&#47;i&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">
                                                Durchgestrichen:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;s&gt;&lt;&#47;s&gt;</span>
                                            </p>
                                            <p class="card-title text-left mt-1 mb-1 contentWorkerText ">Link:<br> <span
                                                    class="text-primary contentWorkerTextCode mt-1 mb-1">&lt;ahref&#61;&#34;&#34;&gt;Link-Text&lt;&#47;a&gt;</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- End code --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Section Data Info--}}
    <div class="row mt-4">
        <div class="col-12">
            <form method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label class="font-weight-bold">Please select category to get text suggestions:</label>
                    </div>
                    <div class="col-lg">
                        <select name="levelone" class="custom-select text-dark" id="cwCLevelOne">
                            <option class="bg-white text-dark" selected value="select">--- SELECT ---</option>
                            @if ( !empty($business_categories) && count($business_categories) )
                                @foreach ($business_categories as $business_category)
                                    @if ( $business_category->level_two == 0 )
                                        <option class="bg-white text-dark" value="{{ $business_category->category_name }}" data-id="{{ $business_category->id }}">{{ $business_category->category_name }}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg">
                        <select name="leveltwo" class="custom-select text-dark" id="cwCLevelTwo" disabled>
                            <option class="bg-white text-dark" value="select">--- SELECT ---</option>
                        </select>
                    </div>
                    <div class="col-lg">
                        <select name="levelthree" class="custom-select text-dark" id="cwCLevelThree" disabled>
                            <option class="bg-white text-dark" value="select">--- SELECT ---</option>
                        </select>
                    </div>
                    <div class="col-lg">
                        <select name="levelfour" class="custom-select text-dark" id="cwCLevelFour" disabled>
                            <option class="bg-white text-dark" value="select">--- SELECT ---</option>
                        </select>
                    </div>
                    <div class="col-lg">
                        <select name="levelfive" class="custom-select text-dark" id="cwCLevelFive" disabled>
                            <option class="bg-white text-dark" value="select">--- SELECT ---</option>
                        </select>
                    </div>
                </div>
            </form>
            <div id="cwcontentdata"></div>
            <div class=" d-flex justify-content-center mt-3"></div>
        </div>
    </div>
    {{--Start textarea --}}
    <div class="form-group">
        <label for="edittext" class="font-weight-bold">Please drag and drop the text you want in this description field. You can change the text inside your description box.</label>
        <textarea class=" form-control text-dark contentWorkerText textarea" id="edittext" rows="10"></textarea>
    </div>
    <div class="d-flex justify-content-between mb-5 ">
        <p class="card-title"></p>
        <button class="btn btn-primary cw-copy-content">Copy The Text</button>
    </div>
    {{--End textarea--}}
    {{-- End Section custom fields --}}
    <!-- Text Editor Page End -->
</div>
@push('css')
<link href="{{asset('css/style.cwd.css')}}" rel="stylesheet">
@endpush
@push('js')
<script src="{{ asset('js/txk-add-text.js') }}"></script>
<script src="{{ asset('js/txt-get-text.js') }}"></script>
<script>
    var mainDiv = jQuery('.contentWorkerText');
    var childDiv = jQuery(mainDiv).children('.contentWorkerTextCode');
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