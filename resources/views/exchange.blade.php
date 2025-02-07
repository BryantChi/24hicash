@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">

        <div class="container-fluid px-0 pt-lg-5 pt-1 m-0 position-relative bg-exchange-section">

            <div class="container mb-3">
                <div class="row justify-content-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 wow fadeInUp mb-lg-5 mb-3" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">信用卡換現金</h2>
                            <!-- <img src="images/00-hp/title_line.svg" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt=""> -->
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp mb-lg-4" data-wow-delay="0.1s">
                        <p>
                            當面臨臨時財務壓力時，信用卡換現金成為解決短期資金需求的快速途徑。<br>
                            無論是支付突發開銷，還是規劃重大支出，透過我們的服務，您的信用卡額度將被轉化為強而有力的資金支援。
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center2 mx-lg-3 mx-2 mt-lg-5 mt-3 mb-5">

                    <div class="col-md-6 mb-3">
                        <div class="exchange-box h-100 d-block d-lg-flex wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/02/02icon1.png')}}" class="img-fluid exchange-box-icon" alt="">
                            </div>
                            <div class="d-grid align-items-center px-3">
                                <h5 class="ps-3 mb-3 py-1 exchange-box-title text-322854">
                                    <span class="text-red fst-italic" style="font-size: larger;">1.</span>
                                    超快速資金周轉，助您應對緊急狀況
                                </h5>
                                <p>
                                    有了信用卡換現金，您再也不需為現金不足而煩惱。<br>
                                    只需幾分鐘，我們即可將您的信用卡額度轉換為即時現金，<br>
                                    解決醫療支出、車輛維修等突發狀況。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="exchange-box h-100 d-block d-lg-flex wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/02/02icon2.png')}}" class="img-fluid exchange-box-icon" alt="">
                            </div>
                            <div class="d-grid align-items-center px-3">
                                <h5 class="ps-3 mb-3 py-1 exchange-box-title text-322854">
                                    <span class="text-red fst-italic" style="font-size: larger;">2.</span>
                                    簡單便捷的操作流程
                                </h5>
                                <p>
                                    我們的手續設計極其簡單明瞭，從提交需求到完成交易，只需幾個簡單步驟。不僅節省時間，更避免繁瑣的傳統貸款程序。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="exchange-box h-100 d-block d-lg-flex wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/02/02icon3.png')}}" class="img-fluid exchange-box-icon" alt="">
                            </div>
                            <div class="d-grid align-items-center px-3">
                                <h5 class="ps-3 mb-3 py-1 exchange-box-title text-322854">
                                    <span class="text-red fst-italic" style="font-size: larger;">3.</span>
                                    全面保障隱私與安全
                                </h5>
                                <p>
                                    我們採用嚴密的隱私保護措施，全程不需要提供信用卡卡號或驗證碼，交易過程加密處理，讓您的個人資訊絕對安全無虞。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="exchange-box h-100 d-block d-lg-flex wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center mb-3">
                                <img src="{{asset('assets/images/02/02icon4.png')}}" class="img-fluid exchange-box-icon" alt="">
                            </div>
                            <div class="d-grid align-items-center px-3">
                                <h5 class="ps-3 mb-3 py-1 exchange-box-title text-322854">
                                    <span class="text-red fst-italic" style="font-size: larger;">4.</span>
                                    彈性選擇的額度範圍
                                </h5>
                                <p>
                                    不管是小額應急還是大額周轉，我們都能根據您的需求量身定制換現方案，讓您的信用額度發揮最大價值。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-exchange-section2">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-3 position-relative mb-lg-0 mb-3 text-center align-self-center">
                        <img src="{{asset('assets/images/02/02illu.png')}}" class="img-fluid about-illu-img" alt="">
                    </div>
                    <div class="col-lg about-section2 mb-lg-0 pt-3 mb-3 align-self-center">
                        <h5 class="text-red mb-4">多種情況適用，滿足多元需求</h5>

                        <p>
                            信用卡換現金不僅解決生活中的各種挑戰，更能靈活支持：
                        <div class="d-flex">
                            <img src="{{asset('assets/images/01/01tick.png')}}" class="img-fluid exchange-tick" alt="">
                            <p class="mb-0">緊急帳單支付》如學費、水電費、房租等。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/01/01tick.png')}}" class="img-fluid exchange-tick" alt="">
                            <p class="mb-0">規劃大型支出》如購物、旅遊、婚禮籌備等。</p>
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('assets/images/01/01tick.png')}}" class="img-fluid exchange-tick" alt="">
                            <p class="mb-0">投資理財需求》利用換現資金靈活把握投資機會。</p>
                        </div>
                        </p>
                    </div>

                    <div class="col-lg mb-lg-0 mb-3 pt-4 align-self-center">
                        <div class="about-box2 px-lg-4 px-3 py-4">
                            <p>
                                無論是應對緊急情況，還是規劃未來，信用卡換現金都是您 可靈活運用的資金夥伴。立即聯繫我們，讓您的信用額度變 成即時可用的現金！
                            </p>
                            <div class="d-flex align-items-center">
                                <a href="https://lin.ee/9yWWFdt" target="_blank"
                                onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                                    <img src="{{asset('assets/images/02/02bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
