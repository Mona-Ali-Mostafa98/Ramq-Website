@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        <img src="images/hero.jpg" alt="">
        <div class="container">
            <h3>مسكن أطلال - دورين</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>شراء المنتج</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap profile-wrap checkout col-xs-12">
        <div class="container">
            <div class="prof-content col-md-9 col-xs-12">
                <div class="pers-wrap col-xs-12">
                    <h3>معلومات المشترى</h3>
                    <div class="edit-form col-xs-12">
                        <div class="row">
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>الاسم ثلاثي <i>*</i></h4>
                                <input type="text" class="form-control" required>
                                <i class="la la-user place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> رقم الهوية <i>*</i></h4>
                                <input type="text" class="form-control" required>
                                <i class="la la-id-card place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>رقم الجوال <i>*</i></h4>
                                <input type="text" class="form-control" required>
                                <i class="la la-mobile place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> البريد الالكترونى <i>*</i></h4>
                                <input type="email" class="form-control" required>
                                <i class="la la-envelope place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> المدينة <i>*</i></h4>
                                <select class="form-control nice-select" required>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                </select>
                                <i class="la la-map-marker place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> الحى <i>*</i></h4>
                                <select class="form-control nice-select" required>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                </select>
                                <i class="la la-map-marker place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> المهنة <i>*</i></h4>
                                <input type="text" class="form-control" required>
                                <i class="la la-user-cog place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> صورة الصك او التقرير المساحى <i>*</i></h4>
                                <div class="f-upload">
                                    <input type="file">
                                    <i class="la la-file-text place-icon"></i>
                                    <input type="text" class="form-control" readonly="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pers-wrap col-xs-12">
                    <h3>معلومات بطاقة الدفع</h3>
                    <div class="edit-form col-xs-12">
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <h4>الاسم مثل البطاقة <i>*</i></h4>
                                <input type="text" class="form-control" required>
                                <i class="la la-user place-icon"></i>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <h4> رقم البطاقة <i>*</i></h4>
                                <input type="text" class="form-control ccFormatMonitor" placeholder="رقم البطاقة"
                                    maxlength='19' required>
                                <i class="la la-credit-card place-icon"></i>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <h4> العام <i>*</i></h4>
                                <select class="form-control nice-select" required>
                                    <option>اختار العام</option>
                                    <option>اختار العام</option>
                                    <option>اختار العام</option>
                                    <option>اختار العام</option>
                                </select>
                                <i class="la la-calendar place-icon"></i>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <h4> الشهر <i>*</i></h4>
                                <select class="form-control nice-select" required>
                                    <option>اختار الشهر</option>
                                    <option>اختار الشهر</option>
                                    <option>اختار الشهر</option>
                                    <option>اختار الشهر</option>
                                </select>
                                <i class="la la-calendar place-icon"></i>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <h4> ccv رقم ال <i>*</i></h4>
                                <input type="password" class="form-control cvv" placeholder="***" maxlength='3' required>
                                <i class="la la-credit-card place-icon"></i>
                            </div>
                            <div class="form-group confirm col-md-12 col-xs-12">
                                <label>
                                    <input type="checkbox">
                                    <span>أوافق على <a href="#" data-toggle="modal" data-target="#confirm_pop">اتفاقية
                                            الشراء</a></span>
                                </label>
                                <button type="submit" class="btn">ادفع 12399</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-sidebar col-md-3 col-xs-12">
                <div class="s-widget col-xs-12">
                    <h4>تفاصيل محتويات ملف التصميم</h4>
                    <div class="s-inner">
                        <ul>
                            <li>
                                <i class="la la-check"></i>
                                الرسوم الهيكلية
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                الرسوم المعمارية
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                رسوم الكهرباء
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                الرسوم السمكرية
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                رسوم الواجهة الامامية
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="w-widget col-xs-12">
                    <span>السعر : 10999 رس</span>
                </div>
                <div class="w-widget col-xs-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="كود الخصم ">
                        <button type="submit" class="btn">خصم</button>
                    </div>
                </div>
                <div class="w-widget col-xs-12">
                    <span>السعر بعد الخصم : 10999 رس</span>
                </div>
                <div class="w-widget col-xs-12">
                    <span>الضريبة : 1400 رس</span>
                </div>
                <div class="w-widget total col-xs-12">
                    <span>المجموع الكلى : 12399 رس</span>
                </div>
            </div>
        </div>
    </div>
    <div class="partners col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="container">
            <div class="part-slider owl-carousel">
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
                <div class="item">
                    <img src="images/part.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer class="main-footer col-xs-12" style="background-image: url(images/hero2.jpg);">
        <div class="container">
            <div class="f-top col-xs-12">
                <div class="row">
                    <div class="f-item col-md-4 col-xs-12">
                        <h4>نبذة عنا</h4>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                        </p>
                    </div>
                    <div class="f-item col-md-2 col-xs-12">
                        <h4>اهم الروابط</h4>
                        <ul class="sitemap">
                            <li>
                                <a href="#">الرئيسية</a>
                            </li>
                            <li>
                                <a href="#">من نحن</a>
                            </li>
                            <li>
                                <a href="#">متجر التصاميم</a>
                            </li>
                            <li>
                                <a href="#">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="f-item col-md-3 col-xs-12">
                        <h4>تواصل معنا</h4>
                        <ul class="siteinfo">
                            <li>
                                <i class="la la-crosshairs"></i>
                                العنوان
                                <p>
                                    <a href="#">‏17 شارع جدة - المملكة العربية السعودية</a>
                                </p>
                            </li>
                            <li>
                                <i class="la la-envelope"></i>
                                البريد الالكترونى
                                <p>
                                    <a href="mailto:companymaimail@gmail.com">companymaimail@gmail.com</a>
                                </p>
                            </li>
                            <li>
                                <i class="las la-crosshairs"></i>
                                الهاتف
                                <p>
                                    <a href="tel:0548596523">0548596523</a> -
                                    <a href="tel:055698547123">055698547123</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="f-item col-md-3 col-xs-12">
                        <h4>التواصل الاجتماعى</h4>
                        <div class="soclia">
                            <a href="#" class="twitter">
                                <i class="la la-twitter"></i>
                            </a>
                            <a href="#" class="youtube">
                                <i class="la la-youtube"></i>
                            </a>
                            <a href="#" class="instagram">
                                <i class="la la-instagram"></i>
                            </a>
                            <a href="#" class="facebook">
                                <i class="la la-facebook"></i>
                            </a>
                        </div>
                        <ul class="siteinfo">
                            <li>
                                <i class="la la-file-invoice"></i>
                                رقم السجل التجارى
                                <p>12345678912345</p>
                            </li>
                            <li>
                                <i class="la la-file-invoice"></i>
                                الرقم الضريبى
                                <p>310543829100003</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="f-bottom col-xs-12">
                <p>جميع الحقوق محفوظة لـمنصة رمق</p>
                <a href="#">
                    <img src="images/dev.svg" alt="">
                </a>
            </div>
        </div>
        <div class="toTop">
            <i class="la la-angle-up"></i>
        </div>
        <div class="float-icons">
            <a href="javascript:void(0)" class="dark-th" data-tool="tooltip" title="الوضع الليلي"
                data-placement="right">
                <i class="la la-moon"></i>
            </a>
            <a href="#" class="whats" data-tool="tooltip" title="تواصل عبر الواتساب" data-placement="right">
                <i class="la la-whatsapp"></i>
            </a>
        </div>
    </footer>
    <!-- /.modal -->
    </div>
@endsection
@section('diffrence')
    <div class="modal fade" id="confirm_pop">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="confo-p">
                        <h4>اتفاقية الشراء</h4>
                        <p> يقر المشتري بأن المنتج الذي يشتريه عبر المنصة هو للاستخدام الشخصي وليس التجاري ولمرة واحدة فقط ،
                            وذلك على أرضه المرفق بياناتها في عملية الشراء ، ويتحمل كافة التبعات القانونية في حال انتهاك
                            الحقوق أو
                            تسريب المخططات بشكل مقصود إلى الآخرين بقصد الاستفادة منها في البناء أو التطوير . كما يتعهد
                            بمراجعة
                            المخططات ومواءمتها مع الاستشاري والمقاول والتأكد من القواعد الإنشائية المناسبة بناء على تقرير
                            التربة
                            .وتوصية الاستشاري المشرف على المشروع</p>
                        <button type="button" data-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection