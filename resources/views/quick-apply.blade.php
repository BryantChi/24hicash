@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">

        <div class="container-fluid px-0 pt-lg-5 pt-1 m-0 position-relative bg-quick-apply-section">

            <div class="container mb-3">
                <div class="row justify-content-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 wow fadeInUp mb-lg-5 mb-3" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">快速申辦</h2>
                            <!-- <img src="images/00-hp/title_line.svg" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt=""> -->
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp mb-lg-4" data-wow-delay="0.1s">
                        <p>
                            無需繁瑣手續，最快3分鐘即可到帳。<br>
                            無論何時何地，我們的專人服務都能即時協助，讓資金周轉變得前所未有的輕鬆與便捷！
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-3 mx-2 mt-lg-5 mt-3">

                    <div class="col-lg-6 mb-5">
                        <div
                            class="quick-apply-box d-block d-md-flex align-items-center position-relative px-lg-4 px-3 py-3">
                            <img src="{{asset('assets/images/05/steps_n1.png')}}" class="img-fluid quick-apply-step-num" alt="">
                            <div class="quick-apply-illu text-center">
                                <img src="{{asset('assets/images/05/05icon1.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="quick-apply-content">
                                <h5>聯繫我們</h5>
                                <p class="mb-0">
                                    透過線上客服、電話或訊息聯繫我們,提供您的需 求與信用額度基本資訊。<br>
                                    專人24小時隨時為您服務，快速回應您的問題。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5">
                        <div
                            class="quick-apply-box d-block d-md-flex align-items-center position-relative px-lg-4 px-3 py-3">
                            <img src="{{asset('assets/images/05/steps_n2.png')}}" class="img-fluid quick-apply-step-num" alt="">
                            <div class="quick-apply-illu text-center">
                                <img src="{{asset('assets/images/05/05icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="quick-apply-content">
                                <h5>高價收購</h5>
                                <p class="mb-0">
                                    根據您的核准額度，「安心額度換現金」提供專屬的高價收購方案，收購價格透明公正，讓您的額度價值最大化。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5">
                        <div
                            class="quick-apply-box d-block d-md-flex align-items-center position-relative px-lg-4 px-3 py-3">
                            <img src="{{asset('assets/images/05/steps_n3.png')}}" class="img-fluid quick-apply-step-num" alt="">
                            <div class="quick-apply-illu text-center">
                                <img src="{{asset('assets/images/05/05icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="quick-apply-content">
                                <h5>快速交易</h5>
                                <p class="mb-0">
                                    確認收購方案後，我們立即安排交易流程。<br>
                                    您可選擇線上操作或面交方式，交易過程簡單快速，安全有保障。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5">
                        <div
                            class="quick-apply-box d-block d-md-flex align-items-center position-relative px-lg-4 px-3 py-3">
                            <img src="{{asset('assets/images/05/steps_n4.png')}}" class="img-fluid quick-apply-step-num" alt="">
                            <div class="quick-apply-illu text-center">
                                <img src="{{asset('assets/images/05/05icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="quick-apply-content">
                                <h5>立即到帳</h5>
                                <p class="mb-0">
                                    完成交易後，現金最快3分鐘即可到帳，讓您即時解決資金需求！
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-3 mb-4">
                        <h4 class="text-322854">整個過程高度保密，無需提供任何帳號密碼，保障您的信息安全。</h4>
                    </div>

                </div>
            </div>

        </div>


        <div class="container-fluid px-0 pb-lg-auto m-0 position-relative bg-quick-apply-section2">

            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 quick-apply-section2 mb-lg-auto mb-3 pt-5">
                        <h5 class="text-red">選擇「安心額度換現金」助您安心快速取得資金！</h5>

                        <p>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/05/face_tick.png')}}" class="img-fluid quick-apply-tick" alt="">
                            <p>行業領先經驗：專業團隊助您快速完成交易。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/05/face_tick.png')}}" class="img-fluid quick-apply-tick" alt="">
                            <p>極速服務：手續簡化，讓資金最快3分鐘即刻到帳。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/05/face_tick.png')}}" class="img-fluid quick-apply-tick" alt="">
                            <p>全台覆蓋：不論您在哪，我們都提供彈性面交與多種操作方式。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/05/face_tick.png')}}" class="img-fluid quick-apply-tick" alt="">
                            <p>高度透明：免除隱藏費用，提供市場最高價格，讓您的每一分信用額度價值最大化。</p>
                        </div>
                        </p>
                    </div>

                    <div class="col-lg-7 position-relative mb-lg-auto mb-3 text-center">
                        <img src="{{asset('assets/images/05/05illu.png')}}" class="img-fluid quick-apply-illu-img" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
