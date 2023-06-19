<?php require("./SET_UP.php") ?>
<?php
$errors = [];
require_once './admin/inc/functions/config.php';
// echo generateNumber(2);

if (isset($_POST['submit'])) {
  $response = user_login($_POST);

  if ($response === true) {
    redirect_to("./user/validate-login");
  } else {
    $errors = $response;
    if (is_array($errors)) {
      foreach ($errors as $err) {
        echo "<script>alert('$err')</script>";
      }
    } else {
      echo "<script>alert('$errors')</script>";
    }
  }
}
?>
<div class="show-for-large grid-x header-main">
  <div class="cell shrink logo-container">
    <a href="index.php">
      <h1 class="show-for-sr">Jeko Credit Federal Union (JEKOCFU)</h1>
      <img src="./logo.png" alt="Home">
    </a>
  </div>
  <div class="cell auto desktop-login">
    <div class="grid-x align-right">
      <div class="cell small-12">
        <div class="login-links-container">
          <ul class="login-links">
            <li><a href="#">Forgot password?</a></li>
            <li><a href="./user/signup.php">Enroll Now</a></li>
          </ul>
        </div>
        <form name="Q2OnlineLogin" action="" method="post">
          <div class="grid-x">
            <div class="cell shrink input-group">
              <input id="desktop-user-id" name="accNum" placeholder="Account number" type="text" autocomplete="username" required>
            </div>
            <div class="cell shrink input-group">
              <input id="desktop-password" name="password" placeholder="Password" type="password" autocomplete="current-password">
            </div>
            <div class="cell auto">
              <button class="button" name="submit" type="submit">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="desktop-navigation show-for-large">
  <nav class="menu-wrapper header" id="header-menu">
    <ul class="menu desktop multi-column" role="menubar">

      <li role="menuitem" class="parent top" aria-haspopup="true" aria-label="Personal">
        <button type="button" aria-expanded="false" data-q2-url="#" class="">Personal</button>

        <ul role="menu" aria-hidden="true">

          <li role="menuitem" class="parent" title="Banking">
            <h2>Bank</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Compare Checking Accounts">
                <a class="" href="checking-accounts.php">Checking</a>

              </li>
              <li role="menuitem" title="Compare Savings Accounts">
                <a class="" href="savings-accounts.php">Savings</a>

              </li>
              <li role="menuitem" title="Certificate of Deposit">
                <a class="" href="certificate-deposit.php">Certificate of Deposit (CD)</a>

              </li>
              <li role="menuitem" title="Learn more about Online &amp; Mobile banking">
                <a class="" href="digital-banking-personal.php">Online &amp; Mobile Banking</a>

              </li>
              <li role="menuitem" title="Debit Card Services">
                <a class="" href="debit-card-services.php">Debit Card Services</a>

              </li>
              <li role="menuitem" title="Overdraft Advantage">
                <a class="" href="additional-services.php#overdraft-advantage">Overdraft Advantage</a>

              </li>
              <li role="menuitem" title="Start a Secure Checking Account">
                <a class="" target="_blank" rel="nofollow" href="https://www.idprotectme247.com/sec/">Secure Checking Services</a>

              </li>
              <li role="menuitem" title="Additional Services">
                <a class="" href="additional-services.php">Additional Services</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Borrow</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem">
                <a class="" href="personal/borrow/consumer-loans-overview.php">Consumer Loans Overview</a>

              </li>
              <li role="menuitem" title="Browse Mortgage Services">
                <a class="" target="_blank" rel="nofollow" href="https://firstunitedteam.mymortgage-online.com/">Mortgage</a>

              </li>
              <li role="menuitem" title="HELOC">
                <a class="" href="personal/borrow/consumer-loans-overview/home-equity-line-credit.php">Home Equity Lines of Credit</a>

              </li>
              <li role="menuitem" title="Auto Loan">
                <a class="" href="personal/borrow/consumer-loans-overview/vehicle-loans.php">Vehicle Loans</a>

              </li>
              <li role="menuitem">
                <a class="" href="personal/borrow/consumer-loans-overview/personal-line-credit-ploc.php">Personal Line of Credit (PLOC)</a>

              </li>
              <li role="menuitem">
                <a class="" href="personal/borrow/consumer-loans-overview/personal-loan.php">Personal Loan</a>

              </li>
              <li role="menuitem" title="Agriculture Loan">
                <a class="" href="personal/borrow/consumer-loans-overview/agriculture-loans.php">Agriculture Loan</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent" title="Insurance Services">
            <h2>Protect</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem">
                <a class="" href="insurance.php">Insurance</a>

              </li>
              <li role="menuitem" title="Personal Insurance Products">
                <a class="" href="insurance/personal-insurance/personal-insurance-products.php">Personal Insurance Products</a>

              </li>
              <li role="menuitem">
                <a class="" href="/insurance/personal-insurance/life-insurance.php">Life Insurance</a>

              </li>
              <li role="menuitem">
                <a class="" href="insurance/personal-insurance/homeowners-insurance.php">Homeowners Insurance</a>

              </li>
              <li role="menuitem">
                <a class="" href="insurance/personal-insurance/auto-insurance.php">Auto Insurance</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Invest</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Estate Planning">
                <a class="" href="estate-planning.php">Estate Planning</a>

              </li>
              <li role="menuitem" title="Investment Management">
                <a class="" href="investment-management.php">Investment Management</a>

              </li>
              <li role="menuitem" title="Retirement Planning">
                <a class="" href="retirement-planning.php">Retirement Planning</a>

              </li>
              <li role="menuitem" title="Trust Services">
                <a class="" href="trust-services.php">Trust Services</a>

              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li role="menuitem" class="parent top" aria-haspopup="true" aria-label="Business">
        <button type="button" aria-expanded="false" data-q2-url="#" class="">Business</button>

        <ul role="menu" aria-hidden="true">

          <li role="menuitem" class="parent" title="Business Banking">
            <h2>Bank</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Compare Business Checking">
                <a class="" href="business-checking-accounts.php">Checking</a>

              </li>
              <li role="menuitem" title="Compare Business Savings">
                <a class="" href="business-savings-accounts.php">Savings</a>

              </li>
              <li role="menuitem" title="Learn more about Business Online &amp; Mobile Banking">
                <a class="" href="digital-banking-business.php">Online &amp; Mobile Banking</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Borrow</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="SBA Lending">
                <a class="" href="sba-lending.php">SBA Lending</a>

              </li>
              <li role="menuitem" title="Agriculture Loan">
                <a class="" href="personal/borrow/consumer-loans-overview/agriculture-loans.php">Agriculture Loan</a>

              </li>
              <li role="menuitem" title="Builder Finance Loans">
                <a class="" href="builder-finance-loans.php">Builder Finance Loans</a>

              </li>
              <li role="menuitem" title="Commercial Loans">
                <a class="" href="commercial-loans.php">Commercial Loans</a>

              </li>
              <li role="menuitem" title="Paycheck Protection Program Loan">
                <a class="" href="ppp-loan-update-main.php">PPP Loan</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Manage</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Treasury Management">
                <a class="" href="treasury-management.php">Treasury Management</a>

              </li>
              <li role="menuitem" title="Payables">
                <a class="" href="payables.php">Payables</a>

              </li>
              <li role="menuitem" title="Receivables">
                <a class="" href="receivables.php">Receivables</a>

              </li>
              <li role="menuitem" title="Liquidity Management">
                <a class="" href="liquidity-management.php">Liquidity Management</a>

              </li>
              <li role="menuitem" title="Fraud Prevention Services">
                <a class="" href="fraud-prevention-services.php">Fraud Prevention Services</a>

              </li>
              <li role="menuitem" title="Treasury Management Online &amp; Mobile Banking">
                <a class="" href="digital-banking-treasury-management.php">Online &amp; Mobile Treasury Management</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent" title="Insurance Services">
            <h2>Protect</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem">
                <a class="" href="insurance.php">Insurance</a>

              </li>
              <li role="menuitem">
                <a class="" href="insurance/business-insurance/commercial-insurance.php">Commercial Insurance</a>

              </li>
              <li role="menuitem">
                <a class="" href="/insurance/personal-insurance/life-insurance.php">Life Insurance</a>

              </li>
              <li role="menuitem">
                <a class="" href="insurance/business-insurance/employee-benefits.php">Employee Benefits</a>

              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li role="menuitem" class="parent top" title="About Jeko Credit Federal Union (JEKOCFU)" aria-haspopup="true" aria-label="Who We Are">
        <button type="button" aria-expanded="false" data-q2-url="#" class="">Who We Are</button>

        <ul role="menu" aria-hidden="true">

          <li role="menuitem" class="parent">
            <h2>About</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="About Us">
                <a class="" href="about-us.php">Our Purpose &amp; Values</a>

              </li>
              <li role="menuitem" title="Our Team">
                <a class="" href="our-team.php">Our Team</a>

              </li>
              <li role="menuitem" title="Spend Life Wisely">
                <a class="" href="spendlifewisely-overview.php">Spend Life Wisely</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Community</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Locations">
                <a class="" href="locations.php">Locations</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Learn</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Calculators">
                <a class="" href="spendlifewisely/calculators.php">Calculators</a>

              </li>
              <li role="menuitem" title="Coaching">
                <a class="" href="spendlifewisely/coaching.php">Coaching</a>

              </li>
              <li role="menuitem" title="Financial well-being">
                <a class="" target="_blank" rel="nofollow" href="https://firstunitedbank.teachbanzai.com/wellness">Financial Well-Being</a>

              </li>
              <li role="menuitem">
                <a class="" href="spendlifewisely.php">Blogs</a>

              </li>
            </ul>
          </li>
          <li role="menuitem" class="parent">
            <h2>Career</h2>

            <ul role="menu" aria-hidden="true">

              <li role="menuitem" title="Careers">
                <a class="" href="careers.php">Join Our Team</a>

              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>

  </nav>
  <div class="desktop-aux-nav js-desktop-aux-nav">
    <div>
      <div id="block-offcanvasauxnav">



        <ul>
          <li><a aria-label="Community Bank Locations" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="2a975d0a-12a6-49af-9f74-78cc0ea22229" href="locations.php" title="locations"><i class="fas fa-map-marker-alt"> </i> Locations</a></li>
          <li><a aria-label="Contact Us" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="8a753093-a0c3-42d2-a3ad-94c44c908f3f" href="contact-us.php" title="Contact Us"><i class="fas fa-phone"> </i> Contact Us</a></li>
        </ul>

      </div>

    </div>


  </div>
  <button aria-label="Close login pane." class="close-button js-desktop-menu-close"><i class="fal fa-times"></i><span>Close</span></button>
</div>