@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">

        <div class="container-fluid px-0 pt-lg-5 pt-1 m-0 position-relative bg-bnpl-section">

            <div class="container mb-3">
                <div class="row justify-content-center mx-lg-auto mx-2 mt-lg-3 mt-5 mb-3">
                    <div class="col-12 wow fadeInUp mb-lg-5 mb-3" data-wow-delay="0.1s">
                        <div class="text-center pg-title">
                            <h2 class="mb-2">無卡分期額度收購</h2>
                            <!-- <img src="images/00-hp/title_line.svg" class="img-fluid title-line-img"
                                style="height: 1.3rem;width: auto;" alt=""> -->
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp mb-lg-4 mb-3" data-wow-delay="0.1s">
                        <p>
                            「無卡分期額度收購」讓您的額度不再受限於卡片，靈活轉換為現金，滿足各種需求。
                        </p>
                    </div>
                    <div class="col-12 text-center wow fadeInUp mb-lg-4" data-wow-delay="0.1s">
                        <div class="">
                            <a href="#bnpl01">
                                <p class="mb-2 btn-bnpl-item d-inline-block">刷卡換現金</p>
                            </a>
                            <a href="#bnpl02">
                                <p class="mb-2 btn-bnpl-item d-inline-block">銀角零卡</p>
                            </a>
                            <a href="#bnpl03">
                                <p class="mb-2 btn-bnpl-item d-inline-block">慢點付PI錢包</p>
                            </a>
                            <a href="#bnpl04">
                                <p class="mb-2 btn-bnpl-item d-inline-block">大哥付</p>
                            </a>
                            <a href="#bnpl05">
                                <p class="mb-2 btn-bnpl-item d-inline-block">Pay4U</p>
                            </a>
                            <a href="#bnpl06">
                                <p class="mb-2 btn-bnpl-item d-inline-block">遠信月付大人</p>
                            </a>
                            <a href="#bnpl07">
                                <p class="mb-2 btn-bnpl-item d-inline-block">AFTEE先享後付</p>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section2">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl01">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n1.png')}}" class="img-fluid me-2" alt="">刷卡換現金</h5>
                    <p>只要您持有信用卡，即可申辦！持卡人只需確認信用卡的可用額度，購買指定商品後再進行轉售，即可輕鬆完成。</p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/1icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">還款時間寬裕</h6>
                                <p>無卡分期額度收購是您無卡分期額度轉換為現金的最佳選擇。</p>
                            </div>
                        </div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/1icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">可提升聯徵紀錄分數</h6>
                                <p>透過正規刷卡交易並按時還款，您不僅獲取了現金，還能有效提升信用分數。</p>
                            </div>
                        </div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/1icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">累積刷卡紅利</h6>
                                <p>刷卡換現金同樣享有信用卡提供的各種福利優惠、現金回饋等，讓每一次交易都為您帶來更多價值。</p>
                            </div>
                        </div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/1icon04.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">使用分期，避免高額利率</h6>
                                <p>刷卡分期可享低利率或0利率優 惠，可避免高額利率帶來的經濟壓力。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <p class="text-6a">
                        刷卡換現金不會影響您的聯徵紀錄，還可享有較長的還款期限，同時累積刷卡紅利。<br>
                        即刻聯繫我們，體驗快速、安全的刷卡換現金服務，靈活掌控您的財務需求！
                    </p>
                    <a href="https://lin.ee/9yWWFdt" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>

            </div>

        </div>

        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section3 bg-f3f2f7">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl02">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n2.png')}}" class="img-fluid me-2" alt="">銀角零卡</h5>
                    <p>
                        新型態消費支付，大額分期，小額支付，提供彈性靈活的支付方案。<br>
                        APP會員額度免綁卡、免現金，各種大小金額的付款，一支手機就搞定！
                    </p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/2icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">買你所愛不用等</h6>
                                <p>支援大額分期，小額支付。晚點才開始繳款，靈活消費更自由。</p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/2icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">APP快速入會</h6>
                                <p>今天申請購物額度，3日內審核，即可開始前往數萬家合作商家購物。</p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/2icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">安心相挺</h6>
                                <p>購物分期與支付服務。沒有隱藏費用，最高可分至二十四期。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="https://www.zingala.com/" target="_blank">
                        <div class="btn-apply wm-content mx-auto mb-3">
                            前往註冊申請額度
                        </div>
                    </a>
                    <h5 class="text-red mb-3">
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                        如何將額度兌換現金？
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                    </h5>
                    <p class="text-6a mb-3">
                        「安心額度換現金」會依照您核准的額度給予兌換方案，實際收購金額會依線上報價為準，歡迎線上諮詢或來電洽詢。
                    </p>
                    <a href="https://lin.ee/9yWWFdt" target="_blank" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>
            </div>

        </div>

        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section4">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl03">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n3.png')}}" class="img-fluid me-2" alt="">慢點付PI錢包</h5>
                    <p>
                        Pi 拍錢包與二十一世紀數位科技股份有限公司合作提供的「慢點付」為一種新型態的支付方式，申請綁定慢點付付款，<br>
                        慢點付系統立刻審核並配發支付上限，後續即可於交易流程中針對該筆交易選擇慢點付「一次付」或「分期付款」。
                    </p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/3icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">免綁卡、免儲值</h6>
                                <p>僅需要一個App，即可在多元的線上、線下適用通路店點購物。</p>
                            </div>
                        </div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/3icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">三期0利率</h6>
                                <p>輕鬆享有先消費後付款、單筆滿額三期零利率的服務。</p>
                            </div>
                        </div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/3icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">何時繳費自由選</h6>
                                <p>能依照需求自由選擇全額繳、慢點付或帳單分期。</p>
                            </div>
                        </div>
                        <div class="col-lg-3 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/3icon04.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">繳款方式多元</h6>
                                <p>支援超商條碼、ATM轉帳、銀行帳戶自動扣款。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="https://www.piapp.com.tw/pipaylater/" target="_blank">
                        <div class="btn-apply wm-content mx-auto mb-3">
                            前往註冊申請額度
                        </div>
                    </a>
                    <h5 class="text-red mb-3">
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                        如何將額度兌換現金？
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                    </h5>
                    <p class="text-6a mb-3">
                        「安心額度換現金」會依照您核准的額度給予兌換方案，實際收購金額會依線上報價為準，歡迎線上諮詢或來電洽詢。
                    </p>
                    <a href="https://lin.ee/9yWWFdt" target="_blank" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>
            </div>

        </div>

        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section5 bg-f3f2f7">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl04">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n4.png')}}" class="img-fluid me-2" alt="">️大哥付</h5>
                    <p>
                        先享後付，隨時支援你的大小消費；台灣大哥大門號獨享，一鍵啟用即享消費。
                    </p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/4icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">購買您所喜愛商品，輕鬆無負擔</h6>
                                <p>先買，晚點一次付清或分成數月付款。</p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/4icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">一鍵啟用，開通超簡單</h6>
                                <p>
                                    覺得填寫申請資料太麻煩？<br>
                                    使用大哥付結帳，輸入門號就能開通額度。
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/4icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">安心使用，繳款零壓力</h6>
                                <p>網銀ATM轉帳、門市都能繳款忘記繳款僅先暫停使用，繳清後即可重新開通。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="https://oppay.tw/" target="_blank">
                        <div class="btn-apply wm-content mx-auto mb-3">
                            前往註冊申請額度
                        </div>
                    </a>
                    <h5 class="text-red mb-3">
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                        如何將額度兌換現金？
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                    </h5>
                    <p class="text-6a mb-3">
                        「安心額度換現金」會依照您核准的額度給予兌換方案，實際收購金額會依線上報價為準，歡迎線上諮詢或來電洽詢。
                    </p>
                    <a href="https://lin.ee/9yWWFdt" target="_blank" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>
            </div>

        </div>

        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section6">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl05">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n5.png')}}" class="img-fluid me-2" alt="">PAY4U</h5>
                    <p>
                        無需一次性支付大筆金額，可以在享受產品或服務的同時，分期付款。<br>
                        Pay4U不僅有一般商品，還有旅遊行程、醫療美容等多元的服務。
                    </p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/5icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">申辦超迅速</h6>
                                <p>
                                    APP註冊，免出門最方便。<br>
                                    先申請消費額度，未來實際購物時，即可直接消費，不需等待。
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/5icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">消費超簡單</h6>
                                <p>
                                    網站申請，操作好直覺。<br>
                                    使用Pay4U，輕鬆分期，愉快購物。
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/5icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">繳款超即時</h6>
                                <p>可至超商刷條碼或透過網銀、ATM轉帳，繳款好簡單。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="https://www.pay4u.com.tw/" target="_blank">
                        <div class="btn-apply wm-content mx-auto mb-3">
                            前往註冊申請額度
                        </div>
                    </a>
                    <h5 class="text-red mb-3">
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                        如何將額度兌換現金？
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                    </h5>
                    <p class="text-6a mb-3">
                        「安心額度換現金」會依照您核准的額度給予兌換方案，實際收購金額會依線上報價為準，歡迎線上諮詢或來電洽詢。
                    </p>
                    <a href="https://lin.ee/9yWWFdt" target="_blank" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>
            </div>

        </div>

        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section7 bg-f3f2f7">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl06">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n6.png')}}" class="img-fluid me-2" alt="">遠信月付大人</h5>
                    <p>
                        新光合纖集團旗下分期及支付服務品牌，提供免卡支付與分期付款服務。<br>
                        您只需要每個『月付』款1次，就能享受『大人』物般的精采生活！
                    </p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/6icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">免辦卡 / 免貸款 / 免儲值</h6>
                                <p>線上填單申辦，手續簡單、審核快速。</p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/6icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">彈性分期</h6>
                                <p>
                                    可以根據自身需求選擇分期付款方案，減少一次性支付的壓力。
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/6icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">月付一次，繳款零壓力</h6>
                                <p>商品馬上帶回家，後續帳款分期慢慢繳，大大降低經濟壓力。</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="https://bnpl.monthlypay.com.tw/" target="_blank">
                        <div class="btn-apply wm-content mx-auto mb-3">
                            前往註冊申請額度
                        </div>
                    </a>
                    <h5 class="text-red mb-3">
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                        如何將額度兌換現金？
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                    </h5>
                    <p class="text-6a mb-3">
                        「安心額度換現金」會依照您核准的額度給予兌換方案，實際收購金額會依線上報價為準，歡迎線上諮詢或來電洽詢。
                    </p>
                    <a href="https://lin.ee/9yWWFdt" target="_blank" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>
            </div>

        </div>

        <div class="container-fluid px-0 pb-lg-auto pb-3 m-0 position-relative bg-bnpl-section8">

            <div class="row justify-content-center align-items-center2 mx-lg-5 mx-3 px-lg-5 px-2 py-lg-5 py-3"
                id="bnpl07">
                <div class="col-12 text-center mb-5">
                    <h5 class="text-322854"><img src="{{asset('assets/images/03/nocard_n7.png')}}" class="img-fluid me-2" alt="">AFTEE先享後付</h5>
                    <p>
                        提供讓消費者感到安心且安全的先買後付(Buy Now Pay Later)服務。<br>
                        先享受，後支付，輕鬆掌握你的財務自由！
                    </p>
                </div>

                <div class="col-12">
                    <div class="row bnpl-box position-relative py-3">
                        <div class="feat-txt wm-content">特色</div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/7icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">10秒結帳最快速</h6>
                                <p>手機號碼就是你的信用卡，無需繁瑣手續，只需簡單操作即可完成結帳。</p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/7icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">不需個資最安全</h6>
                                <p>
                                    不用提交個人敏感資料，保障您的隱私安全，免除資安疑慮。
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 bnpl-box-item px-lg-4 px-3 my-4">
                            <div class="bnpl-box-item-img text-center mb-3">
                                <img src="{{asset('assets/images/03/7icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="bnpl-box-item-text px-lg-3 px-2">
                                <h6 class="title-dark-blue mb-3 text-center">多元繳費最方便</h6>
                                <p>提供超商、ATM /網銀、電子支付等多元管道繳費，繳費期限最長達45天！</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="https://aftee.tw/" target="_blank">
                        <div class="btn-apply wm-content mx-auto mb-3">
                            前往註冊申請額度
                        </div>
                    </a>
                    <h5 class="text-red mb-3">
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                        如何將額度兌換現金？
                        <img src="{{asset('assets/images/03/rhombic.png')}}" class="img-fluid" alt="">
                    </h5>
                    <p class="text-6a mb-3">
                        「安心額度換現金」會依照您核准的額度給予兌換方案，實際收購金額會依線上報價為準，歡迎線上諮詢或來電洽詢。
                    </p>
                    <a href="https://lin.ee/9yWWFdt" target="_blank" onclick="return gtag_report_conversion_line('https://lin.ee/9yWWFdt');">
                        <img src="{{asset('assets/images/03/03bu_line.svg')}}" class="img-fluid" style="height: 2.5rem;" alt="">
                    </a>
                </div>
            </div>

        </div>

    </div>
@endsection
