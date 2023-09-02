<?php
include "views/parts/header.php";
?>
<!-- Donate Now Start -->
<section class="donate-now">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="donate-now__left">
                    <div class="donate-now__enter-donation">
                        <h3 class="donate-now__title">Make a Donation</h3>
                        <div class="donate-now__enter-donation-input">
                            <select class="selectpicker">
                                <option>$</option>
                                <option>₤</option>
                                <option>¥</option>
                            </select>
                            <input type="text" name="donation-money" value="make your donation today">
                        </div>
                    </div>
                    
                    <div class="donate-now__payment-info">
                        <h3 class="donate-now__title">Payment Details</h3>
                        <form class="donate-now__payment-info-form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="donate-now__payment-info-input">
                                        <h3>Bank account details</h3>
                                        <p>
                                        sympathy africa <br/>
                                        1044201296485
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="donate-now__payment-info-input">
                                        <h3>Paypal</h3>
                                    </div>
                                </div>
                                
                               
                            </div>
                            <div class="donate-now__payment-info-btn-box">
                                <button type="button" class="thm-btn donate-now__payment-info-btn">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="donate-now__right">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-1.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">Support Education for Children</a></h3>
                            <p class="causes-one__text">Your contribution can provide access to quality education for children in need.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);"></div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="donation-details__organizer">
                        <div class="sidebar-shape-1"
                            style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                        <div class="donation-details__organizer-img">
                            <img src="assets/images/resources/donation-details-organizer-img.jpg" alt="">
                        </div>
                        <div class="donation-details__organizer-content">
                            <p class="donation-details__organizer-date">Created on April 20, 2022</p>
                            <p class="donation-details__organizer-title">Organizer:</p>
                            <p class="donation-details__organizer-name">Jessica Smith</p>
                            <ul class="list-unstyled donation-details__organizer-list">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-tag"></span>
                                    </div>
                                    <div class="text">
                                        <p>Education</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="text">
                                        <p>Africa, Uganda</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donate Now End -->


<?php
include "views/parts/footer.php";