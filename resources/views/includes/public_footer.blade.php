    <section class="footer">
        <div class="container footer-two">
        <div class="col-md-12 col-sm-12">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('aboutus') }}"><i class="fa fa-check"></i> About Us</a></li>
                    <li><a href="javascript:;" target="_blank"><i class="fa fa-check"></i> Blogs</a></li>
                    <li><a href="javascript:;"><i class="fa fa-check"></i> Sitemap</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <h4>Help &amp; Support</h4>
                <ul>
                    <li><a href="javascript:;"><i class="fa fa-check"></i> Live Support</a></li>
                    <li><a href="javascript:;"><i class="fa fa-check"></i> Online Help - FAQ</a></li>
                    <li><a href="{{ route('contactus') }}"><i class="fa fa-check"></i> Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <h4>Policies</h4>
                <ul>
                    <li><a href="{{ route('privacy') }}"><i class="fa fa-check"></i> Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}"><i class="fa fa-check"></i> Terms of Use</a></li>
                    <li><a href="{{ route('disclaimer') }}"><i class="fa fa-check"></i> Disclaimer</a></li>
                    <li><a href="{{ route('payment') }}"><i class="fa fa-check"></i> Payment Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <h4>Follow Us</h4>
             <ul class="social-icons icon-circle icon-zoom list-unstyled list-inline">
              <li> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li> <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li> <a href="https://www.pinterest.com//" target="_blank"><i class="fa fa-pinterest"></i></a></li>
              <li> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>

            </div>

          </div>
        </div>
    </section>

    <footer><span>Copyrights 2017, Siya Ke Ram Matrimony All Rights Reserved</span></footer>

    @include('includes.public_scripts')

</body>
</html>