<footer>
    <div class="footer-top">
        <div class="col-text">
        
        </div>
        <div class="col-logo">
            <img src="../images/dc-logo-bg.png" alt="">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="btn-box">
                <button>
                    sing-up now!
                </button>
            </div>
            <ul>
                <h2>follow us</h2>
                @foreach ($socials_array as $social)
                    <li>
                        <img src="{{ $social['icon_url'] }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>