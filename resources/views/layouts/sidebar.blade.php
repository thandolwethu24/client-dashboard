<div id="header">
    <div id="logo">
        <img src="images/pic02.jpg" alt="" />
        <h1><a href="#">{{ $user->name}}</a></h1>
        <span>Axxess Client since <a href="http://templated.co" rel="nofollow"> <b>12 JAN 2016</b></a></span>
    </div>
    <div id="menu">
        <ul>
            <li class="{{ Request::is('landing') ? 'current_page_item' : ''}}"><a href="landing" accesskey="1" title="">Homepage</a></li>
            <li class="{{ Request::is('service') ? 'current_page_item' : ''}}"><a href="service" accesskey="2" title="">My Services</a></li>
            <li class="{{ Request::is('account_info') ? 'current_page_item' : ''}}"><a href="account_info" accesskey="3" title="">My Account</a></li>
            <li class="{{ Request::is('support') ? 'current_page_item' : ''}}"><a href="support" accesskey="4" title="">Support</a></li>
            <li class="{{ Request::is('about_us' ? 'current_page_item' : '') }}"><a href="about_us" accesskey="5" title="">Contact Us</a></li>
        </ul>
    </div>
</div>
