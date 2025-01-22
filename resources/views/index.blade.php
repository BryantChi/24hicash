@extends('layouts_main.master')

@section('content')
    <div class="main_section">

        <!-- 無卡分期額度收購 -->
        <div class="container-fluid px-0 px-0 pt-lg-5 pt-0 m-0 position-relative bg-00hp-s1">

            <!-- <div class="container position-relative w-100 mt-5 py-5"></div> -->

            <div class="container mb-3">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 wow fadeInUp mb-5" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">無卡分期額度收購</h2>
                            <img src="{{asset('assets/images/00-hp/title_line.svg')}}" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt="">
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp mb-4" data-wow-delay="0.1s">
                        <p>
                            不是只有信用卡額度才能換現金，只要有以下額度，便可將額度輕鬆轉換為現金，實現資金的靈活運用。<br>
                            我們提供多樣化的靈活解決方案，無論您需要短期小額資金或長期資金規劃，都能在這裡找到合適的選擇。
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/00-hp/nocard_p01.jpg')}}" class="img-fluid rounded-left w-100 rounded-m-top"
                                    alt="">
                            </div>
                            <div
                                class="col-lg d-flex justify-content-lg-start justify-content-center align-self-center px-lg-3">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n1.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">️刷卡換現金</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div
                                class="col-lg d-flex justify-content-lg-start justify-content-center align-self-center px-lg-3 order-2 order-lg-1">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n2.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">銀角零卡</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2">
                                <img src="{{asset('assets/images/00-hp/nocard_p02.jpg')}}" class="img-fluid rounded-right w-100 rounded-m-top"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/00-hp/nocard_p03.jpg')}}" class="img-fluid rounded-left w-100 rounded-m-top"
                                    alt="">
                            </div>
                            <div
                                class="col-lg d-flex justify-content-lg-start justify-content-center align-self-center px-lg-3">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n3.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">慢點付PI錢包</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div
                                class="col-lg d-flex justify-content-lg-start justify-content-center align-self-center px-lg-3 order-2 order-lg-1">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n4.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">大哥付</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2">
                                <img src="{{asset('assets/images/00-hp/nocard_p04.jpg')}}" class="img-fluid rounded-right w-100 rounded-m-top"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/00-hp/nocard_p05.jpg')}}" class="img-fluid rounded-left w-100 rounded-m-top"
                                    alt="">
                            </div>
                            <div
                                class="col-lg d-flex justify-content-lg-start justify-content-center align-self-center px-lg-3">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n5.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">PAY4U</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div
                                class="col-lg d-flex justify-content-lg-start justify-content-center align-self-center  px-lg-3 order-2 order-lg-1">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n6.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">遠信月付大人</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2">
                                <img src="{{asset('assets/images/00-hp/nocard_p06.jpg')}}" class="img-fluid rounded-right w-100 rounded-m-top"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="row g-0 rounded-gray-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="col-lg-4 col-md">
                                <img src="{{asset('assets/images/00-hp/nocard_p07.jpg')}}" class="img-fluid rounded-left w-100 rounded-m-top"
                                    alt="">
                            </div>
                            <div
                                class="col-auto d-flex justify-content-lg-start justify-content-center align-self-center px-lg-3">
                                <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                    <img src="{{asset('assets/images/00-hp/nocard_n7.png')}}" class="img-fluid" alt="">
                                    <h4 class="mb-0 text-322854">AFTEE先享後付</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 mt-lg-0 mt-3">
                        <div class="px-3 wow fadeIn" data-wow-delay="0.1s">
                            <h5 class="text-322854">讓「無卡分期額度」成為您靈活資金運作的利器</h5>
                            <p>不論您是短期資金支援，還是大額周轉，「安心額度換現金」都提供彈性方案，助您輕鬆應對每一筆財務挑戰。</p>
                            <div class="w-100 d-flex justify-content-end">
                                <div class="hp-social-link d-md-flex text-end">
                                    <a href="{{ route('bnpl') }}" target="_blank">
                                        <img src="{{asset('assets/images/00-hp/bu_more.svg')}}" class="img-fluid mx-1 my-1"
                                            style="height: 2.5rem;" alt="">
                                    </a>
                                    <a href="https://line.me/R/ti/p/@992ubcbw" target="_blank">
                                        <img src="{{asset('assets/images/00-hp/bu_line.svg')}}" class="img-fluid mx-1 my-1"
                                            style="height: 2.5rem;" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-3 mx-2 mt-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <h4 class="mb-3 text-322854">「安心額度換現金」提供全台灣任何地點的<span class="text-red">面交服務</span></h4>
                        <p class="mb-4">無論是北、中、南或偏遠地區，我們的專業團隊將親自到場，為您提供安全、快速、私密的現金交付服務。</p>
                        <p>
                            <img src="{{asset('assets/images/00-hp/face_tick.png')}}" class="img-fluid" alt="">
                            靈活地點：根據您的需求，我們可以在您最方便的時間與地點完成交易，無需擔心交通 或時間不便。<br>
                            <img src="{{asset('assets/images/00-hp/face_tick.png')}}" class="img-fluid" alt="">
                            全程保密：所有交易都在保密的情況下進行，保障您的隱私與安全。<br>
                            <img src="{{asset('assets/images/00-hp/face_tick.png')}}" class="img-fluid" alt="">
                            快捷高效：面交流程簡單迅速，您只需確認金額，立即收到現金。
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img src="{{asset('assets/images/00-hp/face_illu.png')}}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>

            <div class="container position-relative w-100 mt-5 py-5">
                <div class="my-5 py-lg-3 py-5 hp-section-height"></div>
                <div class="position-absolute top-0 start-50 translate-middle-x w-100" style="z-index: 3;">
                    <div class="row w-100 justify-content-center align-items-center2 mx-lg-3 mx-0 px-lg-auto px-2">
                        <div class="col-lg-4 mb-3 order-2 order-lg-1 text-center wow fadeIn" data-wow-delay="0.1s">
                            <img src="{{asset('assets/images/00-hp/steps_illu.png')}}" class="img-fluid w-90" alt="">
                        </div>
                        <div class="col-lg-8 mb-3 order-1 order-lg-2">
                            <h4 class="mb-5 text-center text-red wow fadeIn" data-wow-delay="0.1s">安心額度換現金・快速申辦流程</h4>
                            <div class="row">
                                <div class="col-lg-3 col-6 mb-3 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="position-relative s1-step-box text-center py-4">
                                        <img src="{{asset('assets/images/00-hp/steps_n1.png')}}" class="img-fluid s1-step-num"
                                            alt="">
                                        <img src="{{asset('assets/images/00-hp/steps_icon1.png')}}" class="img-fluid w-60 mb-3"
                                            alt="">
                                        <h5>聯繫我們</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mb-3 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="position-relative s1-step-box text-center py-4">
                                        <img src="{{asset('assets/images/00-hp/steps_n2.png')}}" class="img-fluid s1-step-num"
                                            alt="">
                                        <img src="{{asset('assets/images/00-hp/steps_icon2.png')}}" class="img-fluid w-60 mb-3"
                                            alt="">
                                        <h5>高價收購</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mb-3 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="position-relative s1-step-box text-center py-4">
                                        <img src="{{asset('assets/images/00-hp/steps_n3.png')}}" class="img-fluid s1-step-num"
                                            alt="">
                                        <img src="{{asset('assets/images/00-hp/steps_icon3.png')}}" class="img-fluid w-60 mb-3"
                                            alt="">
                                        <h5>快速交易</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mb-3 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="position-relative s1-step-box text-center py-4">
                                        <img src="{{asset('assets/images/00-hp/steps_n4.png')}}" class="img-fluid s1-step-num"
                                            alt="">
                                        <img src="{{asset('assets/images/00-hp/steps_icon4.png')}}" class="img-fluid w-60 mb-3"
                                            alt="">
                                        <h5>立即到帳</h5>
                                    </div>
                                </div>

                                <div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.1s">
                                    <h5 class="mb-5 text-322854">整個過程高度保密，無需提供任何帳號密碼，保障您的信息安全。</h5>
                                    <a href="{{ route('about') }}">
                                        <img src="{{asset('assets/images/00-hp/bu_more.svg')}}" class="img-fluid" style="height: 2.5rem;"
                                        alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container-fluid px-0 pt-5 m-0 position-relative bg-00hp-s2">

            <div class="container position-relative w-100 mt-5 py-5">
                <div class="my-5 py-lg-3 py-5 hp-section-height"></div>
            </div>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 d-flex justify-content-center align-items-center mb-3 wow fadeIn"
                        data-wow-delay="0.1s">
                        <img src="{{asset('assets/images/00-hp/cases_star.png')}}" class="img-fluid" width="50" alt="">
                        <h4 class="mb-0 text-red">安心額度換現金成功幫助多位客戶解決了現金需求問題</h4>
                        <img src="{{asset('assets/images/00-hp/cases_star.png')}}" class="img-fluid" width="50" alt="">
                    </div>

                    <div class="col-12 text-center mb-4 wow fadeIn" data-wow-delay="0.1s">
                        <p>
                            自成立以來，「安心額度換現金」已經成功協助眾多客戶解決短期資金需求，<br>
                            從小額週轉到大額資金運作，我們的靈活方案和貼心服務獲得了廣泛好評。
                        </p>
                    </div>

                    @foreach ($casesInfo as $case)
                    <div class="col-lg-5 mb-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="hp-cases-box d-grid justify-content-center align-items-start py-4">
                            <div class="cases-box-header d-flex align-items-center wm-content mx-auto">
                                <img src="{{asset('assets/images/00-hp/cases_coin.png')}}" class="img-fluid" width="60" alt="">
                                <h5 class="mb-0">{{ $case->name }}<span class="text-red">{{ $case->case_title }}</span></h5>
                            </div>
                            <img src="{{asset('assets/images/00-hp/cases_5stars.svg')}}" class="img-fluid mx-auto" style="height: 1.8rem;"
                                alt="">
                            <div class="cases-box-content px-lg-4 px-2 d-grid my-3 text-justify">
                                {!! $case->case_content !!}
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- <div class="col-lg-5 mb-4 wow fadeIn" data-wow-delay="0.1s">
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
                                <img src="{{asset('assets/images/00-hp/cases_pic.jpg')}}" class="img-fluid mx-auto w-75" alt="">
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                        <a href="{{ route('cases') }}">
                            <img src="{{asset('assets/images/00-hp/bu_cases.svg')}}" class="img-fluid" style="height: 2.5rem;"
                                alt="">
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <div class="container-fluid px-0 pt-5 m-0 position-relative bg-00hp-s3 mt-3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center mb-4 wow fadeIn" data-wow-delay="0.1s">
                        <h4 class="text-highlight">線上不管金額大小，皆可分次交易</h4>
                        <p class="text-1rem mb-4">例：五萬元額度分成五次一萬額度交易，每次一萬額度交易完後立即匯款給您，您確認款項到帳，再繼續操作下一筆</p>

                        <h5 class="text-red">有任何問題，讓「安心額度換現金」來幫您解決！</h5>
                        <p>
                            為了讓您更加瞭解我們的服務，我們整理了一些常見的問題與解答。<br>
                            如果您有其他疑問，隨時與我們聯繫，我們的專業團隊會為您提供即時協助。
                        </p>
                    </div>

                    <div class="col-md-auto mb-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <img src="{{asset('assets/images/00-hp/qa_illu.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/00-hp/qa_n1.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">什麼是「額度換現金」服務？</h6>
                                <p class="mb-0 text-justify">
                                    額度換現金是指透過我們的服務，將您的信用卡額度或無卡分期額度轉換成現金，可以立即變現，快速獲得資金以應對急需或特殊情況。
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/00-hp/qa_n2.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">需要哪些資料才能進行信用卡換現金？</h6>
                                <p class="mb-0 text-justify">
                                    只需要確認為本人使用，非冒用情況發生，就能立即協助您辦理。
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/00-hp/qa_n3.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">換現金的流程需要多久？</h6>
                                <p class="mb-0 text-justify">
                                    整個流程簡單快速，從確認額度到現金入帳，只需要十分鐘即可完成，讓您能在最短時間內取得所需資金。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center my-3 wow fadeIn" data-wow-delay="0.1s">
                        <a href="{{ route('faq') }}">
                            <img src="{{asset('assets/images/00-hp/bu_qa.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid px-0 pt-5 m-0 position-relative bg-00hp-s4 mt-3">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <h4 class="mb-4 text-red">信用卡額度換現金・無卡分期額度換現金</h4>
                        <p>只要有額度，不再為現金不足而煩惱！透過額度換現金服務，您可以輕鬆將額度轉換成現金，即時應付各種需求。</p>
                    </div>
                </div>
                <div class="row g-lg-5">
                    <div class="col-md-3 mb-3">
                        <div class="hp-card-box align-items-center py-3 h-100 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 text-center">
                                <img src="{{asset('assets/images/00-hp/card_icon1.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 me-lg-0 me-3 mb-3">
                                <h5 class="mb-3 text-center">手續簡便</h5>
                                <p class="mb-0 text-justify">
                                    手續簡單、流程透明，只需要確認是本人使用即可快速完成現金兌換，省時又方便。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="hp-card-box align-items-center py-3 h-100 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 text-center">
                                <img src="{{asset('assets/images/00-hp/card_icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 me-lg-0 me-3 mb-3">
                                <h5 class="mb-3 text-center">隱私保護</h5>
                                <p class="mb-0 text-justify">
                                    我們重視您的隱私與安全，交易過程嚴格保密，讓您安心使用。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="hp-card-box align-items-center py-3 h-100 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 text-center">
                                <img src="{{asset('assets/images/00-hp/card_icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 me-lg-0 me-3 mb-3">
                                <h5 class="mb-3 text-center">靈活額度</h5>
                                <p class="mb-0 text-justify">
                                    不論您需要小額或大額現金，<br>
                                    我們的服務都能滿足您的需求<br>
                                    ，靈活應對各種資金挑戰。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="hp-card-box align-items-center py-3 h-100 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 text-center">
                                <img src="{{asset('assets/images/00-hp/card_icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 me-lg-0 me-3 mb-3">
                                <h5 class="mb-3 text-center">解決短期資金需求</h5>
                                <p class="mb-0 text-justify">
                                    無論是急需支付帳單、旅遊還是其他用途，我們的信用卡換現金服務都是您最佳的解決方案。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center my-3 wow fadeIn" data-wow-delay="0.1s">
                        <a href="{{ route('exchange') }}">
                            <img src="{{asset('assets/images/00-hp/bu_more.svg')}}" class="img-fluid" style="height: 2.5rem;"
                                alt="">
                        </a>
                    </div>

                </div>

                <div class="row mt-4 pb-5">
                    <div class="col-lg-6 mb-3 align-self-center wow fadeIn" data-wow-delay="0.1s">
                        <h4 class="mb-4 text-322854">「安心額度換現金」─ 您最便捷可靠的資金夥伴</h4>
                        <p>
                            我們專注於提供快速、方便、安全的額度換現金服務，致力幫助客戶靈活運用額度，輕鬆滿足各種臨時現金需求；不論是應對突發開支，還是想要靈活運用資金，我們都能為您提供最佳的解決方案。
                        </p>
                        <p class="" style="color: #5a5a5a;">
                            <b>
                                「安心額度換現金」堅守透明操作、價格最高的服務宗旨，讓每一位客戶都能在安全可靠的環境中進行交易，無憂使用我們的服務。
                            </b>
                        </p>
                        <p>
                            選擇「安心額度換現金」，讓您的額度更具價值，隨時隨地，靈活掌控您的財務需求！
                        </p>
                        <div class="my-3">
                            <a href="{{ route('about') }}">
                                <img src="{{asset('assets/images/00-hp/bu_about.svg')}}" class="img-fluid" style="height: 2.5rem;"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <img src="{{asset('assets/images/00-hp/ab_illu.png')}}" class="img-fluid w-90" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
