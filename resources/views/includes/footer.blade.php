<!--Footer-->
<footer class="row" id="footer">
    <div class="container">
        <div class="row top-footer">
            <div class="widget col-sm-3 widget-about">
                <div class="row m0"><a href="index.html"><img src="images/logo-black-green.png" alt=""></a></div>
            </div>
            <div class="widget col-sm-5 widget-menu">
                <div class="row">
                    <ul class="nav column-menu white-bg">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">categories</a></li>
                        <li><a href="#">archives</a></li>
                    </ul>
                    <ul class="nav column-menu white-bg">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">faq</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="widget col-sm-4 widget-subscribe">
                <h5 class="widget-title">subscribe to our newsletter.</h5>
                <form action="#" method="post" class="form-inline subscribe-form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>
                </form>
            </div>
        </div>
        <h5 class="copyright"><a href="#">&copy; Chivalric 2016</a></h5>
    </div>
</footer>

<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->

</footer>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{!! asset('vendor/oc/docs/assets/owlcarousel/owl.carousel.min.js') !!}"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{!! asset('vendors/magnific-popup/jquery.magnific-popup.min.js') !!}"></script>
<script src="{!! asset('vendors/instafeed/instafeed.min.js') !!}"></script>
<script src="{!! asset('vendors/imagesLoaded/imagesloaded.pkgd.min.js') !!}"></script>
<script src="{!! asset('vendors/isotope/isotope.pkgd.min.js') !!}"></script>
<script src="{!! asset('vendors/flexslider/jquery.flexslider-min.js') !!}"></script>
@yield('scripts')

<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</html>
