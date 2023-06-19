<script>
  function handleClick(event) {
    event.preventDefault();
    window.location.href = "/user/signin.php";
  }
</script>

<style>
  .input-group.q2-login-selector-container {
    display: none !important;
  }
</style>

<div class="title-bar grid-x hide-for-large  landing-page-header">
  <div class="title-bar-menu shrink cell">
    <button class="mobile-menu-toggle" aria-controls="mobile-panel-menu" aria-haspopup="true">
      <i class="fa fa-bars toggle-default" aria-hidden="true"></i>
      <i class="fas fa-times toggle-active" aria-hidden="true"></i>
      <span class="sr-only">Main Menu</span>
    </button>
  </div>
  <div class="title-bar-logo auto cell">
    <a id="mobile-logo" href="./index.php" style="width: 180px; height: fit-content;">
      <img src="./logo.png" width="100%" height="100px" alt="Jeko Credit Federal Union (JEKOCFU)">
    </a>
  </div>
  <div class="title-bar-search shrink cell">
    <button class="mobile-search-toggle">
      <i class="fas fa-search toggle-default" aria-hidden="true"></i>
      <i class="fas fa-times toggle-active" aria-hidden="true"></i>
      <span class="sr-only">Search</span>
    </button>
  </div>
  <div class="title-bar-login shrink cell">
    <button class="mobile-login-toggle" onclick="handleClick(e)">
      <span class="toggle-default">Login</span>
      <i class="fas fa-times toggle-active" aria-hidden="true"></i>
    </button>
  </div>
</div>

<div class="mb-pan mobile-panel-menu" id="mobile-panel-menu" aria-hidden="true" aria-expanded="false">
  <div class="mobile-panel">
    <div class="mobile-aux align-center grid-x">
      <div class="cell small-9">
        <div>
          <div id="block-left-auxnav">
            <ul>
              <li><a aria-label="Community Bank Locations" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="2a975d0a-12a6-49af-9f74-78cc0ea22229" href="./locations.php" title="locations"><i class="fas fa-map-marker-alt"> </i> Locations</a></li>
              <li><a aria-label="Contact Us" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="8a753093-a0c3-42d2-a3ad-94c44c908f3f" href="./contact-us.php" title="Contact Us"><i class="fas fa-phone"> </i> Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="oc-bottom grid-x align-center">
      <nav class="menu-wrapper small-9 cell" data-menu="off-canvas">
        <ul class="menu mobile vertical accordion-menu" data-accordion-menu="" data-multi-open="false">

          <li class="parent">
            <a class="" href="#">Personal</a>

            <ul class="menu vertical nested">

              <li class="parent" title="Banking">
                <a class="" href="#">Bank</a>

                <ul role="menu vertical nested">

                  <li title="Compare Checking Accounts">
                    <a class="" href="./checking-accounts.php">Checking</a>

                  </li>
                  <li title="Compare Savings Accounts">
                    <a class="" href="./savings-accounts.php">Savings</a>

                  </li>
                  <li title="Certificate of Deposit">
                    <a class="" href="./certificate-deposit.php">Certificate of Deposit (CD)</a>

                  </li>
                  <li title="Debit Card Services">
                    <a class="" href="./debit-card-services.php">Debit Card Services</a>

                  </li>
                  <li title="Overdraft Advantage">
                    <a class="" href="./additional-services.php#overdraft-advantage">Overdraft Advantage</a>

                  </li>
                  <li title="Additional Services">
                    <a class="" href="./additional-services.php">Additional Services</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Borrow</a>

                <ul role="menu vertical nested">

                  <li>
                    <a class="" href="./personal/borrow/consumer-loans-overview.php">Consumer Loans Overview</a>

                  </li>
                  <li title="Browse Mortgage Services">
                    <a class="" target="_blank" rel="nofollow" href="https://firstunitedteam.mymortgage-online.com/">Mortgage</a>

                  </li>
                  <li title="HELOC">
                    <a class="" href="./personal/borrow/consumer-loans-overview/home-equity-line-credit.php">Home Equity Lines of Credit</a>

                  </li>
                  <li title="Auto Loan">
                    <a class="" href="./personal/borrow/consumer-loans-overview/vehicle-loans.php">Vehicle Loans</a>

                  </li>
                  <li>
                    <a class="" href="./personal/borrow/consumer-loans-overview/personal-line-credit-ploc.php">Personal Line of Credit (PLOC)</a>

                  </li>
                  <li>
                    <a class="" href="./personal/borrow/consumer-loans-overview/personal-loan.php">Personal Loan</a>

                  </li>
                  <li title="Agriculture Loan">
                    <a class="" href="./personal/borrow/consumer-loans-overview/agriculture-loans.php">Agriculture Loan</a>

                  </li>
                </ul>
              </li>
              <li class="parent" title="Insurance Services">
                <a class="" href="#">Protect</a>

                <ul role="menu vertical nested">

                  <li>
                    <a class="" href="./insurance.php">Insurance</a>

                  </li>
                  <li title="Personal Insurance Products">
                    <a class="" href="./insurance/personal-insurance/personal-insurance-products.php">Personal Insurance Products</a>

                  </li>
                  <li>
                    <a class="" href="./insurance/personal-insurance/life-insurance.php">Life Insurance</a>

                  </li>
                  <li>
                    <a class="" href="./insurance/personal-insurance/homeowners-insurance.php">Homeowners Insurance</a>

                  </li>
                  <li>
                    <a class="" href="./insurance/personal-insurance/auto-insurance.php">Auto Insurance</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Invest</a>

                <ul role="menu vertical nested">

                  <li title="Estate Planning">
                    <a class="" href="./estate-planning.php">Estate Planning</a>

                  </li>
                  <li title="Investment Management">
                    <a class="" href="./investment-management.php">Investment Management</a>

                  </li>
                  <li title="Retirement Planning">
                    <a class="" href="./retirement-planning.php">Retirement Planning</a>

                  </li>
                  <li title="Trust Services">
                    <a class="" href="./trust-services.php">Trust Services</a>

                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="parent">
            <a class="" href="#">Business</a>

            <ul class="menu vertical nested">

              <li class="parent" title="Business Banking">
                <a class="" href="#">Bank</a>

                <ul role="menu vertical nested">

                  <li title="Compare Business Checking">
                    <a class="" href="./business-checking-accounts.php">Checking</a>

                  </li>
                  <li title="Compare Business Savings">
                    <a class="" href="./business-savings-accounts.php">Savings</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Borrow</a>

                <ul role="menu vertical nested">

                  <li title="SBA Lending">
                    <a class="" href="./sba-lending.php">SBA Lending</a>

                  </li>
                  <li title="Agriculture Loan">
                    <a class="" href="./personal/borrow/consumer-loans-overview/agriculture-loans.php">Agriculture Loan</a>

                  </li>
                  <li title="Builder Finance Loans">
                    <a class="" href="./builder-finance-loans.php">Builder Finance Loans</a>

                  </li>
                  <li title="Commercial Loans">
                    <a class="" href="./commercial-loans.php">Commercial Loans</a>

                  </li>
                  <li title="Paycheck Protection Program Loan">
                    <a class="" href="./ppp-loan-update-main.php">PPP Loan</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Manage</a>

                <ul role="menu vertical nested">

                  <li title="Treasury Management">
                    <a class="" href="./treasury-management.php">Treasury Management</a>

                  </li>
                  <li title="Payables">
                    <a class="" href="./payables.php">Payables</a>

                  </li>
                  <li title="Receivables">
                    <a class="" href="./receivables.php">Receivables</a>

                  </li>
                  <li title="Liquidity Management">
                    <a class="" href="./liquidity-management.php">Liquidity Management</a>

                  </li>
                  <li title="Fraud Prevention Services">
                    <a class="" href="./fraud-prevention-services.php">Fraud Prevention Services</a>

                  </li>
                </ul>
              </li>
              <li class="parent" title="Insurance Services">
                <a class="" href="#">Protect</a>

                <ul role="menu vertical nested">

                  <li>
                    <a class="" href="./insurance.php">Insurance</a>

                  </li>
                  <li>
                    <a class="" href="./insurance/business-insurance/commercial-insurance.php">Commercial Insurance</a>

                  </li>
                  <li>
                    <a class="" href="./insurance/personal-insurance/life-insurance.php">Life Insurance</a>

                  </li>
                  <li>
                    <a class="" href="./insurance/business-insurance/employee-benefits.php">Employee Benefits</a>

                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="parent" title="About Jeko Credit Federal Union (JEKOCFU)">
            <a class="" href="#">Who We Are</a>

            <ul class="menu vertical nested">

              <li class="parent">
                <a class="" href="#">About</a>

                <ul role="menu vertical nested">

                  <li title="About Us">
                    <a class="" href="./about-us.php">Our Purpose &amp; Values</a>

                  </li>
                  <li title="Our Team">
                    <a class="" href="./our-team.php">Our Team</a>

                  </li>
                  <li title="Spend Life Wisely">
                    <a class="" href="./spendlifewisely-overview.php">Spend Life Wisely</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Community</a>

                <ul role="menu vertical nested">

                  <li title="Locations">
                    <a class="" href="./locations.php">Locations</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Learn</a>

                <ul role="menu vertical nested">

                  <li title="Calculators">
                    <a class="" href="./spendlifewisely/calculators.php">Calculators</a>

                  </li>
                  <li title="Coaching">
                    <a class="" href="./spendlifewisely/coaching.php">Coaching</a>

                  </li>
                  <li title="Financial well-being">
                    <a class="" target="_blank" rel="nofollow" href="https://firstunitedbank.teachbanzai.com/wellness">Financial Well-Being</a>

                  </li>
                  <li>
                    <a class="" href="./spendlifewisely.php">Blogs</a>

                  </li>
                </ul>
              </li>
              <li class="parent">
                <a class="" href="#">Career</a>

                <ul role="menu vertical nested">

                  <li title="Careers">
                    <a class="" href="./careers.php">Join Our Team</a>

                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>

      </nav>
    </div>
  </div>
</div>

<div class="mb-pan mobile-panel-search" id="mobile-panel-search" aria-hidden="true" aria-expanded="false">
  <div class="mobile-panel">
    <div class="grid-x align-center">
      <div class="cell small-9 mobile-search">
        <div>
          <div id="block-searchform">
            <form action="./search" class="search-block-form" method="get" name="search_query">
              <div class="js-form-item form-item js-form-type-search"><label class="visually-hidden" for="edit-keys">Search</label> <input class="form-search" data-drupal-selector="edit-keys" id="edit-keys" maxlength="128" name="search_query" title="Enter the terms you wish to search for." type="search" value="" /></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="oc-bottom grid-x align-center">
      <div class="cell small-9">
        <h2>Popular Searches</h2>
        <nav class="menu-wrapper popular-search" data-menu="off-canvas">
          <ul>
            <li>
              <a class="" href="./direct-deposit.php#direct-deposit">Routing Number</a>

            </li>
            <li>
              <a class="" href="./ppp-loan-update-main.php">PPP</a>

            </li>
            <li>
              <a class="" target="_blank" rel="nofollow" href="https://www.ordermychecks.com/login_a.jsp">Order Checks</a>

            </li>
            <li>
              <a class="" href="./locations.php">Locations</a>

            </li>
            <li>
              <a class="" href="./additional-services.php#overdraft-advantage">Overdraft</a>

            </li>
            <li title="Careers">
              <a class="" href="./careers.php">Careers</a>

            </li>
            <li>
              <a class="" href="./direct-deposit.php#direct-deposit">Account Number</a>

            </li>
          </ul>

        </nav>
      </div>
    </div>
  </div>
</div>

<div class="mb-pan mobile-panel-login" id="mobile-panel-login" aria-hidden="true" aria-expanded="false">
  <div class="mobile-panel">
    <div class="grid-x oc-login align-center">
      <div class="cell small-9">
        <form name="Q2OnlineLogin" action="#" method="post">
          <div class="input-group">
            <input id="mobile-user-id" name="accNum" placeholder="Account number" type="text" required>
          </div>
          <div class="cell shrink input-group">
            <input id="mobile-password" name="password" placeholder="Password" type="password" autocomplete="current-password">
          </div>
          <div class="cell auto">
            <button class="button" name="submit" type="submit">Login</button>
          </div>
          <ul class="login-links">
            <li><a href="#">Forgot password?</a></li>
            <li><a href="./user/signup.php.php">Enroll Now</a></li>
          </ul>
        </form>
      </div>
    </div>
    <div class="oc-bottom">
      <div class="grid-x align-center">
        <div class="cell small-5 text-center">
          <a href="https://itunes.apple.com/us/app/bekofcu-bank-mobile/id1076548973?mt=8" rel="nofollow">
            <img src="sites/default/themes/firstunitedbank-com/images/apple-app.png" alt="Download our app from the App Store.">
          </a>
        </div>
        <div class="cell small-5 text-center oc-app">
          <a href="https://play.google.com/store/apps/details?id=com.bekofcubank4915.mobile" rel="nofollow">
            <img src="sites/default/themes/firstunitedbank-com/images/google-app.png" alt="Download our app from the Google Play Store.">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>