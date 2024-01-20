    <footer>
        <div class="wrapper">
            <div id="footerContent">
                <p>© 2024 Marko Milivojevic. All <span id="hiddenLoginButton">rights</span> reserved. <span id="hiddenLogin"><a target="_blank" rel="noopener" href="{{url('/login');}}">Login</a></span></p>
                <ul>
                    <li><a target="_blank" rel="noopener" href="https://www.linkedin.com/in/mmilivojevic"><i class="fa fa-linkedin"></i><span class="spanInvisible">linkedin</span></a></li>
                    <li><a target="_blank" rel="noopener" href="mailto:contact@markomilivojevic.net"><i class="fa fa-envelope"></i><span class="spanInvisible">mail</span></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div id="scrollToTop"><i class="scrolColor fa fa-angle-up"></i><div>

    @section('javascript')
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    @show

</body>
</html>
