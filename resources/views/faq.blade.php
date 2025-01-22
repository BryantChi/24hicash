@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">

        <div class="container-fluid px-0 pt-lg-5 pt-1 m-0 position-relative bg-quick-apply-section">

            <div class="container mb-3">
                <div class="row justify-content-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 wow fadeInUp mb-lg-5 mb-3" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">常見問答</h2>
                            <!-- <img src="images/00-hp/title_line.svg" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt=""> -->
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp mb-lg-4" data-wow-delay="0.1s">
                        <p>
                            在使用安心額度換現金服務的過程中，您可能會有一些疑問，<br>
                            為了讓您更加了解我們的服務流程與保障，我們整理了常見的問題並提供清晰解答，讓您每一步都能放心無憂！
                        </p>
                    </div>

                </div>

                <div class="row justify-content-evenly align-items-end mx-lg-3 mx-2 mt-lg-4 mt-3 faq-header">
                    <div class="col-lg-6 mb-lg-0 mb-3 py-4 px-lg-5 px-4">

                        <h5>用LINE專人服務線上諮詢超方便！</h5>

                        <p class="mb-0">
                            若還有疑慮歡迎利用LINE或來電與我們聯絡，我們將有親切的專人為您服務。

                            手機點選LINE免費諮詢按鈕，也可以輸入官方ID： <a
                                href="https://line.me/R/ti/p/@992ubcbw"><span>@992ubcbw</span></a>，即可加入好友詢問！
                        </p>
                    </div>

                    <div class="col-lg-3 position-relative mb-lg-0 mb-3 text-center">
                        <img src="{{asset('assets/images/06/06illu.png')}}" class="img-fluid faq-illu-img" alt="">
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-3 mx-2 mt-4">

                    <div class="col-12 mb-3">
                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/06/qa_n1.png')}}" class="img-fluid hp-qa-icon" alt="">
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
                                <img src="{{asset('assets/images/06/qa_n2.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">需要哪些資料才能進行信用卡換現金？</h6>
                                <p class="mb-0 text-justify">
                                    只需要確認本人使用，非冒用情況發生，就能立即協助您辦理。
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/06/qa_n3.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">換現金的流程需要多久？</h6>
                                <p class="mb-0 text-justify">
                                    整個流程簡單快速，從確認額度到現金入帳，只需要十分鐘即可完成，讓您能在最短時間內取得所需資金。
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/06/qa_n4.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">會影響我的信用評分或聯徵紀錄嗎？</h6>
                                <p class="mb-0 text-justify">
                                    不會。「額度換現金」服務不會對您的信用紀錄產生影響，按時繳款還能提升您的信用評分。
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/06/qa_n5.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">使用信用卡額度換現金需要提供信用卡帳號和密碼嗎？</h6>
                                <p class="mb-0 text-justify">
                                    不需要。我們的服務全程高度保密，無需提供信用卡帳號或密碼，保護您的私人資訊安全無憂。
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/06/qa_n6.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">刷卡換現金是否合法？</h6>
                                <p class="mb-0 text-justify">
                                    刷卡換現金是合法的商品消費行為，商家提供發票或收據，安全且符合法規。 <br>
                                    但請注意，持卡人需按時履行繳款義務，若拒絕還款，可能涉及詐欺銀行的法律問題；因此，信用無價，有借有還，再刷不難！
                                </p>
                            </div>
                        </div>

                        <div class="hp-qa-box d-flex justify-content-start align-items-center py-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="d-flex align-items-center px-0 me-lg-0 me-3 wm-content">
                                <img src="{{asset('assets/images/06/qa_n7.png')}}" class="img-fluid hp-qa-icon" alt="">
                            </div>

                            <div class="d-grid align-items-center px-0 me-lg-0 me-3 wm-content">
                                <h6 class="mb-3 text-322854">線上刷卡或額度換現金後，我要如何拿到錢？</h6>
                                <p class="mb-0 text-justify">
                                    交易成功後，現金將在3分鐘內轉入您提供的本人帳戶，您可立即前往ATM提領使用。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
