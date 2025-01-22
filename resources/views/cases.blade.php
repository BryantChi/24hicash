@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">

        <div class="container-fluid px-0 pt-lg-5 pt-1 m-0 position-relative bg-cases-section">

            <!-- <div class="container position-relative w-100 mt-5 py-5"></div> -->

            <div class="container mb-3">
                <div class="row justify-content-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 wow fadeInUp mb-lg-5 mb-3" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">成交案例</h2>
                            <!-- <img src="images/00-hp/title_line.svg" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt=""> -->
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp mb-lg-4" data-wow-delay="0.1s">
                        <p>
                            每一次的成交，都是客戶對我們的信任與肯定，從緊急周轉到靈活運用額度，「安心額度換現金」成功幫助了無數客戶解決資金需求。<br>
                            以下是一些真實案例分享，讓您更了解我們的專業與用心！
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-3 mx-2 mt-lg-5 mt-3">

                    <div class="col-12 d-flex justify-content-end">
                        <p class="" style="font-size: 14px;">共有{{ count($casesInfo) }}則協助案例</p>
                    </div>

                    @foreach ($casesInfo as $case)
                    <div class="col-lg-6 mb-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="hp-cases-box d-grid justify-content-center align-items-start py-4">
                            <div class="cases-box-header d-flex align-items-center wm-content mx-auto">
                                <img src="{{asset('assets/images/00-hp/cases_coin.png')}}" class="img-fluid" width="60" alt="">
                                <h5 class="mb-0">{{$case->name}}<span class="text-red">{{$case->case_title}}</span></h5>
                            </div>
                            <img src="{{asset('assets/images/00-hp/cases_5stars.svg')}}" class="img-fluid mx-auto" style="height: 1.8rem;"
                                alt="">
                            <div class="cases-box-content px-lg-4 px-2 d-grid my-3 text-justify">
                                {!! $case->case_content !!}
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- <div class="col-lg-6 mb-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="hp-cases-box d-grid justify-content-center align-items-start py-4">
                            <div class="cases-box-header d-flex align-items-center wm-content mx-auto">
                                <img src="{{asset('assets/images/00-hp/cases_coin.png')}}" class="img-fluid" width="60" alt="">
                                <h5 class="mb-0">江小姐<span class="text-red">成功兌換現金10萬元</span></h5>
                            </div>
                            <img src="{{asset('assets/images/00-hp/cases_5stars.svg')}}" class="img-fluid mx-auto" style="height: 1.8rem;"
                                alt="">
                            <div class="cases-box-content px-lg-4 px-2 d-grid my-3">
                                <p class="text-justify">
                                    江小姐因家中突發醫療狀況急需資金，但無法在短時間內籌措足夠現金，透過
                                    「安心額度換現金」，他利用信用卡額度，在短短幾個小時內快速換得所需現金，順利支付醫療費用，解除了燃眉之急。
                                </p>

                                <img src="{{asset('assets/images/00-hp/cases_pic.jpg')}}" class="img-fluid mx-auto w-60" alt="">
                            </div>
                        </div>
                    </div> --}}



                </div>

                <div class="overflow-auto mb-3">
                    {{ $casesInfo->onEachSide(3)->links('layouts_main.custom-pagination') }}
                </div>
            </div>

        </div>

    </div>
@endsection
