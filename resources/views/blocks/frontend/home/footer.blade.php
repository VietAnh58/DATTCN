<footer class="footer bg-dark position-relative">
    <div class="footer-middle">
        <div class="container position-static">
            <div class="footer-ribbon">Get in touch</div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                    <div class="widget">
                        <h4 class="widget-title">Giới thiệu</h4>
                        <a href="demo1.html">
                            <img src="{{ asset('frontend/') }}/assets/images/logo-footer.png" alt="Logo"
                                class="logo-footer">
                        </a>
                        <p class="m-b-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                            magna, et dapibus lacus. Duis nec vestibulum magna, et dapibus lacus.</p>
                        <a href="#" class="read-more text-white">Tìm hiểu thêm...</a>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6 pb-4 pb-sm-0">
                    <div class="widget mb-2">
                        <h4 class="widget-title mb-1 pb-1">Thông tin liên hệ</h4>
                        <ul class="contact-info m-b-4">
                            <li>
                                <span class="contact-info-label">Địa chỉ:</span> 123 Tên Đường, Thành phố, Anh
                            </li>
                            <li>
                                <span class="contact-info-label">Điện thoại:</span><a href="tel:">(123) 456-7890</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a
                                    href="https://portotheme.com/cdn-cgi/l/email-protection#026f636b6e42677a636f726e672c616d6f"><span
                                        class="__cf_email__"
                                        data-cfemail="87eae6eeebc7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <span class="contact-info-label">Ngày/Giờ làm việc:</span> Thứ Hai - Chủ Nhật / 9:00 AM
                                - 8:00 PM
                            </li>
                        </ul>
                        <div class="social-icons">
                            <a href="{{ route('login') }}" class="social-icon social-facebook icon-facebook"
                                target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                title="Linkedin"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                    <ul class="links">
                        <li><a href="#">Trợ giúp & Câu hỏi thường gặp</a></li>
                        <li><a href="#">Theo dõi đơn hàng</a></li>
                        <li><a href="#">Vận chuyển & Giao hàng</a></li>
                        <li><a href="#">Lịch sử đơn hàng</a></li>
                        <li><a href="#">Tìm kiếm nâng cao</a></li>
                        <li><a href="dashboard.html">Tài khoản của tôi</a></li>
                        <li><a href="#">Cơ hội nghề nghiệp</a></li>
                        <li><a href="demo1-about.html">Về chúng tôi</a></li>
                        <li><a href="#">Bán hàng doanh nghiệp</a></li>
                        <li><a href="#">Quyền riêng tư</a></li>
                    </ul>
                    
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6 pb-0">
                    <div class="widget mb-1 mb-sm-3">
                        <h4 class="widget-title">Thẻ phổ biến</h4>

                        <div class="tagcloud">
                            <a href="#">Túi</a>
                            <a href="#">Màu đen</a>
                            <a href="#">Màu xanh</a>
                            <a href="#">Quần áo</a>
                            <a href="#">Thời trang</a>
                            <a href="#">Hub</a>
                            <a href="#">Quần jean</a>
                            <a href="#">Áo sơ mi</a>
                            <a href="#">Váy</a>
                            <a href="#">Thể thao</a>
                            <a href="#">Áo len</a>
                            <a href="#">Mùa đông</a>
                        </div>
                        
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

    <div class="container">
        <div class="footer-bottom d-sm-flex align-items-center">
            <div class="footer-left">
                <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
            </div>

            <div class="footer-right ml-auto mt-1 mt-sm-0">
                <div class="payment-icons">
                    <span class="payment-icon visa"
                        style="background-image: url({{ asset('frontend/') }}/assets/images/payments/payment-visa.svg)"></span>
                    <span class="payment-icon paypal"
                        style="background-image: url({{ asset('frontend/') }}/assets/images/payments/payment-paypal.svg)"></span>
                    <span class="payment-icon stripe"
                        style="background-image: url({{ asset('frontend/') }}/assets/images/payments/payment-stripe.png)"></span>
                    <span class="payment-icon verisign"
                        style="background-image:  url({{ asset('frontend/') }}/assets/images/payments/payment-verisign.svg)"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End .footer-bottom -->
</footer>
