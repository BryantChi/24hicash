@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">

        <div class="container-fluid px-0 pt-lg-5 pt-1 m-0 position-relative bg-about-section">

            <!-- <div class="container position-relative w-100 mt-5 py-5"></div> -->

            <div class="container mb-3">
                <div class="row justify-content-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 wow fadeInUp mb-4" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">關於我們</h2>
                            <!-- <img src="images/00-hp/title_line.svg" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt=""> -->
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <p class="mb-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            「安心額度換現金」短短2年間已成功累積上千筆成交紀錄，深受客戶信賴。<br>
                            我們以24小時不間斷專人服務和3分鐘立即到帳的高效操作，讓您在任何時候都能快速解決資金需求。
                        </p>

                        <h4 class="text-322854 wow fadeInUp" data-wow-delay="0.1s">「安心額度換現金」─ 您最便捷可靠的資金夥伴</h4>
                    </div>

                </div>

                <div class="row justify-content-center align-items-stretch mx-lg-3 mx-2 mt-lg-5 mt-3">

                    <div class="col-lg-3 mb-3">
                        <div class="about-box h-100">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon1.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3">
                                <h5 class="text-center mb-3 text-322854">24小時專人服務</h5>
                                <p>
                                    專業客服團隊隨時待命，提供貼心一對一諮詢，無論日夜，隨時為您解答疑問，快速協助完成交易。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-box h-100">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 mb-3">
                                <h5 class="text-center mb-3 text-322854">3分鐘立即到帳</h5>
                                <p>
                                    「安心額度換現金」的高效流程讓資金快速到手，緊急時不需再等待，輕鬆解決您的金錢需求。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-box h-100">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 mb-3">
                                <h5 class="text-center mb-3 text-322854">免提供信用卡卡號和驗證碼</h5>
                                <p>
                                    交易全程無需敏感資料，充分保障您的隱私安全，操作簡單，隱私保護到位，您安心交易無負擔。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-box h-100">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 mb-3">
                                <h5 class="text-center mb-3 text-322854">全程由您自行操作</h5>
                                <p>
                                    從確認額度到完成交易，全程由您親自掌控，讓您完全掌握每一步的細節，無需依賴他人操作，安心又省心！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-box h-100">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon5.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 mb-3">
                                <h5 class="text-center mb-3 text-322854">全台皆可面對面</h5>
                                <p>
                                    我們提供靈活的面交服務，無論您身處哪個城市或鄉鎮，我們都能安排專業人員與您進行面交服務。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-box h-100">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon6.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-grid align-items-center px-lg-4 px-3 mb-3">
                                <h5 class="text-center mb-3 text-322854">價格最高</h5>
                                <p>
                                    「安心額度換現金」為客戶提供市場上最具競爭力的換現價格，保證您在兌現額度時獲得更高的價值回報。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-about-section2">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 position-relative mb-3 text-center">
                        <img src="{{asset('assets/images/01/01illu.png')}}" class="img-fluid about-illu-img" alt="">
                    </div>
                    <div class="col-lg-8 about-section2 mb-3">
                        <p>
                            無卡分期額度收購是「安心額度換現金」的特色服務，您無需信用卡，便可將分期額度輕鬆轉換為現金，實現資金的靈活運用；我們提供多樣化的解決方案，無論您需要短期小額資金或長期資金規劃，都能在我們這裡找到合適的選擇。
                        </p>

                        <p>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/01/01tick.png')}}" class="img-fluid about-tick" alt="">
                            <p>我們的服務流程簡單透明，全面保障您的個人資料安全。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/01/01tick.png')}}" class="img-fluid about-tick" alt="">
                            <p>面交服務覆蓋全台所有地區，讓交易更加靈活便捷。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/01/01tick.png')}}" class="img-fluid about-tick" alt="">
                            <p>選擇「安心額度換現金」，我們以價格最高，實現您額度價值的最大化！</p>
                        </div>
                        </p>
                        <div class="d-block d-lg-flex">
                            <a href="{{ route('bnpl') }}">
                                <img src="{{asset('assets/images/01/01bu01.svg')}}" class="img-fluid about-btn me-2 mb-2" style="height: 2.5rem;"
                                    alt="">
                            </a>
                            <a href="{{ route('exchange') }}">
                                <img src="{{asset('assets/images/01/01bu02.svg')}}" class="img-fluid about-btn ms-lg-2 mb-2" style="height: 2.5rem;"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
