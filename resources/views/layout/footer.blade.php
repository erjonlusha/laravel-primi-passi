<footer class="container bg_hint_of_red">
        <div class="container vw60 f_column">
            <div class=" f_top container ">
                <!-- 2div rispettivamente .f_left+.f_right -->
                <div class="f_left">
                    <ul>
                        <li><strong>Address</strong></li>
                        <li>{{ $address}}</li>
                        <li>{{ $contactNumber}} ({{ $openingHours}})</li>
                        <li>{{ $emailSupport}}</li>
                        <!-- <l  i class="social_li d_flex gray_chateau"><i v-for="social in socials" :class="social + ' f_fab'+' p_5'"></i></l> -->
                    </ul>
                </div>
                <div class="f_right d_flex">                        
                        <ul>
                            <li><strong>Explore</strong></li>
                            <li>Start here</li>
                            <li>Blog</li>
                            <li>About us</li>
                        </ul>
                        <ul>
                            <li><br></li>
                            <li>Success story</li>
                            <li>Courses</li>
                            <li>Contact us</li>
                        </ul>
                        <ul>
                            <li><strong>Information</strong></li>
                            <li>Membership</li>
                            <li>Purchase guide</li>
                            <li>Privacy policy</li>
                            <li>Terms of services</li>
                        </ul>
                </div>
            </div>
            <div class="copyright container gray_chateau">
                <!-- .copyright -->
                <h6>&copy;2020 All Rights Reserved</h6>
            </div>
        </div>
</footer>