<?php include('logic.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">

<head>
  <meta charset="utf-8" />
  <script>
    let nodeID = 23;
  </script>
  <noscript>
    <style>
      form.antibot * :not(.antibot-message) {
        display: none !important;
      }
    </style>
  </noscript>
  <link rel="canonical" href="checking-accounts.php" />
  <meta name="Generator" content="Drupal 9 (https://www.drupal.org)" />
  <meta name="MobileOptimized" content="width" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php include("./seo.php") ?>
  <style>
    /*** SASS ***/
    /*** GLOBAL ***/
    .smallest {
      font-size: 0.75rem;
    }

    .small-text {
      font-size: 0.875rem;
    }

    .uppercase {
      text-transform: uppercase !important;
    }

    .app-icon {
      width: 130px;
      height: auto;
    }

    .orange {
      color: #EE3124 !important;
    }

    .white {
      color: #fefefe !important;
    }

    .green {
      color: #78BE21 !important;
    }

    .black {
      color: #0a0a0a !important;
    }

    .blue {
      color: #2D6FB7 !important;
    }

    .blue-tag {
      color: #7cadcd !important;
    }

    .primary-blue {
      color: #1b2c57 !important;
    }

    .dark-blue {
      color: #002D72 !important;
    }

    .footer-blue {
      color: #101E41 !important;
    }

    .dark-gray {
      color: #595959 !important;
    }

    .gray {
      color: #C4C2C2 !important;
    }

    .uppercase {
      text-transform: uppercase !important;
    }

    .align-content-bottom {
      margin-top: auto;
    }

    .vertical-align-top {
      vertical-align: top;
    }

    .th-gray {
      background: #D8D8D8;
    }

    .bold900 {
      font-weight: 900 !important;
    }

    .bold-pls {
      font-weight: bold !important;
    }

    .arrow-pls:after {
      font-family: "Font Awesome 5 Pro", sans-serif;
      content: '\f054';
      margin-left: 0.625rem;
      font-size: 0.9rem;
      color: #EE3124;
    }

    .arrow-pls:hover {
      color: #EE3124;
    }

    .li-spacing ul,
    .li-spacing ol {
      margin-left: 2rem;
    }

    .li-spacing li {
      padding-left: 0.2rem;
    }

    .red-arrow-link::after {
      color: #EE3124 !important;
    }

    mark {
      background: yellow;
    }

    .cta-pls {
      padding: 1.5625rem 0.625rem;
      text-align: center;
    }

    .cta-pls p {
      font-size: 2rem;
      font-weight: 900;
    }

    .underline3px {
      text-decoration: underline;
      color: #fefefe;
      text-decoration-thickness: 3px;
    }

    .underline5px {
      text-decoration: underline;
      color: #fefefe;
      text-decoration-thickness: 5px;
    }

    /*** Put this in ol or ul class***/
    .section-summary-list {
      font-size: 1.5rem;
      margin-left: 2rem;
    }

    .blue-border,
    .blue-border-img img {
      border: 10px solid #2D6FB7;
      border-radius: 4px;
    }

    .primary-blue-border,
    .primary-blue-border-img img {
      border: 10px solid #1b2c57;
      border-radius: 4px;
    }

    .primary-blue-border,
    .primary-blue-border-img img {
      border: 10px solid #002D72;
      border-radius: 4px;
    }

    .shadow-on-object,
    .shadow-on-object-img img {
      box-shadow: 0 0 10px 5px rgba(10, 10, 10, 0.04);
    }

    .border-radius-2,
    .border-radius-2-img img {
      border-radius: 2px;
    }

    .fs-1rem {
      font-size: 1rem;
    }

    /*** Login Header ***/
    .desktop-login .input-group select.q2-login-selector {
      padding-right: 1rem !important;
    }

    /*** Business Callouts ***/
    article[about="/united-business-free"] .q2-section.grid-section.callouts .callout::before,
    article[about="/united-business"] .q2-section.grid-section.callouts .callout::before,
    article[about="/united-commercial"] .q2-section.grid-section.callouts .callout::before,
    article[about="/business-savings"] .q2-section.grid-section.callouts .callout::before,
    article[about="/united-business-money-market-gold"] .q2-section.grid-section.callouts .callout::before,
    article[about="/united-business-interest-checking"] .q2-section.grid-section.callouts .callout::before {
      border-top: solid 10px #2D6FB7;
    }

    /*** SLW Section***/
    article[about="/basic-checking"] .blue-pattern-top .medium-8,
    article[about="/secure-checking"] .blue-pattern-top .medium-8,
    article[about="/prestige-checking"] .blue-pattern-top .medium-8,
    article[about="/savings"] .blue-pattern-top .medium-8,
    article[about="/money-market"] .blue-pattern-top .medium-8,
    article[about="/smartstart"] .blue-pattern-top .medium-8,
    article[about="/cd"] .blue-pattern-top .medium-8,
    article[about="/united-business-free"] .blue-pattern-top .medium-8,
    article[about="/united-business"] .blue-pattern-top .medium-8,
    article[about="/united-commercial"] .blue-pattern-top .medium-8,
    article[about="/united-business-money-market-gold"] .blue-pattern-top .medium-8,
    article[about="/united-business-now"] .blue-pattern-top .medium-8 {
      display: flex;
      flex-direction: column;
    }

    article[about="/basic-checking"] .blue-pattern-top .medium-8 .button-container,
    article[about="/secure-checking"] .blue-pattern-top .medium-8 .button-container,
    article[about="/prestige-checking"] .blue-pattern-top .medium-8 .button-container,
    article[about="/savings"] .blue-pattern-top .medium-8 .button-container,
    article[about="/money-market"] .blue-pattern-top .medium-8 .button-container,
    article[about="/smartstart"] .blue-pattern-top .medium-8 .button-container,
    article[about="/cd"] .blue-pattern-top .medium-8 .button-container,
    article[about="/united-business-free"] .blue-pattern-top .medium-8 .button-container,
    article[about="/united-business"] .blue-pattern-top .medium-8 .button-container,
    article[about="/united-commercial"] .blue-pattern-top .medium-8 .button-container,
    article[about="/united-business-money-market-gold"] .blue-pattern-top .medium-8 .button-container,
    article[about="/united-business-now"] .blue-pattern-top .medium-8 .button-container {
      margin-top: auto;
    }

    #slw-section {
      text-align: right;
    }

    #slw-section p {
      font-size: 1.2rem;
    }

    #slw-section .slw-tag {
      color: #101E41;
    }

    /*** Overview Benefits Section ***/
    article[about="/checking-accounts"] .accordion-section,
    article[about="/savings-accounts"] .accordion-section,
    article[about="/business-savings-accounts"] .accordion-section,
    article[about="/business-checking-accounts"] .accordion-section {
      display: none;
    }

    /*** Comparison Table ****/
    #compare-accounts .q2-js-responsive-table-wrap {
      overflow: inherit;
    }

    #compare-accounts .start-icon {
      display: none;
    }

    #compare-accounts .align-top {
      vertical-align: top;
    }

    #compare-accounts table {
      table-layout: fixed;
      text-align: center;
    }

    #compare-accounts table thead {
      border: 1px solid #D8D8D8;
    }

    #compare-accounts table tbody {
      font-size: 1.1rem;
    }

    #compare-accounts table tbody .row-mobile {
      display: none;
    }

    #compare-accounts table tbody .row-desktop {
      text-align: left;
    }

    #compare-accounts table tbody tr {
      background: #ffffff;
    }

    #compare-accounts table tbody tr:nth-child(4n) {
      background: #f8f8f8;
    }

    #compare-accounts table th[scope=col],
    #compare-accounts table .sticky {
      position: sticky;
      top: 0;
      background: #D8D8D8;
      font-size: 1.2rem;
      line-height: 1.2;
      text-align: center;
      vertical-align: bottom;
      z-index: 1;
    }

    #compare-accounts table .tick {
      color: #2D6FB7;
    }

    #compare-accounts table .button {
      margin: 1rem 0 0 0;
      font-size: .95rem;
    }

    /*** Location Hours Section ***/
    .locations-ada th[scope=col],
    .locations-ada th[scope=row] {
      text-transform: none !important;
      color: #0a0a0a !important;
      text-align: left !important;
    }

    .path-locations .locations-ada thead tr td,
    .path-locations .locations-ada th[scope=col] {
      padding: 0.3125rem 0;
    }

    .path-locations .locations-ada th[scope=row] {
      padding: 0.3125rem 0 !important;
      font-size: 0.9rem;
    }

    /*** Disclosure Section ***/
    #disclosure {
      font-size: 0.75rem;
    }

    #disclosure ol {
      padding-bottom: 0px;
    }

    #disclosure p {
      padding-left: 1rem;
    }

    /*** About Us Page ***/
    #about-us-purpose {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    #about-us-purpose .statement {
      width: 75%;
    }

    #about-us-purpose .statement .section-summary p {
      display: block;
      text-align: left;
      padding: 0 0 0.5rem;
    }

    #about-us-purpose .statement .statement2 p {
      font-weight: 900;
      font-style: oblique;
      letter-spacing: .1rem;
      font-size: 2.3rem;
      color: #2D6FB7;
      text-align: right;
      display: block;
    }

    #about-us-values .blue {
      color: #2D6FB7;
    }

    #about-us-values .orange {
      color: #EE3124;
    }

    #about-us-stakeholders {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    #about-us-stakeholders .statement {
      width: 85%;
    }

    #about-us-stakeholders .statement span.blue {
      color: #2D6FB7;
      font-size: 2.3rem;
      font-weight: 900;
      font-style: oblique;
      letter-spacing: .1rem;
    }

    #stakeholder-tree img {
      width: 80%;
      border: 10px solid #2D6FB7;
      border-radius: 50%;
    }

    .about-us-vision p {
      font-size: 1.1rem;
    }

    /*** Leadership Page ***/
    article[about="/our-team"] div.callouts a::after {
      color: #EE3124;
    }

    #leadership h2 {
      margin-top: 1rem;
      font-size: 2.5rem;
    }

    #leadership p.title {
      color: #C4C2C2;
      letter-spacing: 0.0625rem;
      padding-bottom: 0;
    }

    #leadership i:hover {
      color: #EE3124;
    }

    #leadership .fa-phone-square {
      color: #1b2c57;
    }

    #leadership .fa-linkedin {
      color: #3B5999;
      font-weight: 800;
    }

    #leadership .fa-twitter-square {
      color: #30A1F2;
    }

    #bio-headshot img {
      border: 10px solid #002D72;
      border-radius: 2px;
    }

    /*** Loan Pages ***/
    #loans .light-blue {
      color: #7cadcd;
    }

    #loans .blue {
      color: #2D6FB7;
    }

    #loans .orange {
      color: #EE3124;
    }

    #loans .h3 {
      color: #2D6FB7;
    }

    #loans .comm-title {
      color: #2D6FB7;
      font-size: 1.5rem;
      letter-spacing: 0.0625rem;
    }

    #loans .icons-indent {
      margin: 0 1.25rem;
    }

    #loans .icons-indent p {
      margin: 0 .5rem;
      font-size: 1.1rem;
    }

    #loans ul.custom-icon-padding li {
      padding-bottom: 0.9375rem;
    }

    #loans ul.custom-icon-padding li a {
      overflow-wrap: break-word;
    }

    #loans .column-link {
      font-size: 1.1rem;
      margin: 1.25rem 0;
      letter-spacing: 0.03125rem;
      line-height: 1.6;
    }

    #loans .column-link:after {
      color: #EE3124;
    }

    #loans .column-link:hover {
      color: #EE3124;
    }

    /*** Vehicle Loans ***/
    article[about="/personal/borrow/consumer-loans-overview/vehicle-loans"] .grid-x.grid-margin-x.grid-margin-y {
      justify-content: center;
      -webkit-box-pack: center;
    }

    .vehicle-values {
      display: flex;
      justify-content: flex-end;
    }

    /*** HELOC ***/
    .heloc-benefits {
      font-size: 2rem;
      padding: 1.5625rem 0.625rem;
    }

    .heloc-benefits p {
      padding-bottom: 0;
    }

    /*** PLOC ***/
    .ploc-benefits {
      margin-left: 2.5rem;
      font-size: 1.4rem;
    }

    /*** Personal Loans ***/
    article[about="/personal/borrow/consumer-loans-overview/personal-loan"] .grid-x.grid-margin-x.grid-margin-y {
      justify-content: center;
      -webkit-box-pack: center;
    }

    /*** SBA-Lending Webform ***/
    form.sba-lending-webform #edit-captcha-response {
      margin: 0;
      width: 3rem;
    }

    form.sba-lending-webform #edit-captcha-response--description {
      font-size: 12px;
      font-style: italic;
    }

    /*** Wendell section ***/
    #wendell-headshot {
      width: 400px;
      height: 400px;
      border-radius: 50%;
      position: relative;
      overflow: hidden;
      border: 10px solid #1b2c57;
    }

    #wendell-headshot img {
      position: absolute;
      left: 50%;
      top: 42%;
      -webkit-transform: translate(-50, -42%);
      -moz-transform: translate(-50%, -42%);
      -ms-transform: translate(-50%, -42%);
      transform: translate(-50%, -42%);
      border-radius: 42%;
    }

    #wendell {
      display: flex;
      height: 100%;
    }

    #wendell .wendell-info {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    #wendell .wendell-info h2 {
      margin: 0;
    }

    #wendell .wendell-info h3 {
      font-size: 1.1rem;
      color: #C4C2C2;
      text-transform: uppercase;
      letter-spacing: 0.0625rem;
    }

    #wendell .wendell-info .contacts {
      font-size: 1.1rem;
      color: #C4C2C2;
      text-transform: uppercase;
      letter-spacing: 0.0625rem;
    }

    #wendell .wendell-info a {
      font-weight: normal;
      text-transform: none;
      color: #ffffff;
    }

    /*** Treasury Management ***/
    #tm-cta {
      text-align: center;
    }

    #tm-cta h2 {
      color: #C4C2C2;
    }

    #tm-cta strong {
      color: #fefefe;
    }

    #tm-cta .button {
      margin: 1rem 0 0 0;
    }

    #menu-list-tm .main {
      text-align: right;
      width: 155px;
      font-weight: 900;
      color: #002D72;
    }

    #menu-list-tm .quicklinks {
      font-weight: 900;
      color: #002D72;
    }

    #menu-list-tm .col {
      display: flex;
    }

    #menu-list-tm ul {
      display: flex;
      flex-wrap: wrap;
      margin-left: 0;
    }

    #menu-list-tm li {
      padding-right: 2rem;
      list-style: none;
    }

    #menu-list-tm li::marker {
      color: #002D72;
    }

    /*** Contact Us Page ***/
    #contact-us h2 {
      margin-bottom: 2rem;
    }

    #contact-us .note {
      padding-left: 0.5rem;
    }

    #contact-us .contact-box {
      border-radius: 2px;
      padding: 2.6rem;
      border-top: 10px solid #2D6FB7;
      box-shadow: 0 0 10px 5px rgba(10, 10, 10, 0.04);
      background: #fefefe;
    }

    #contact-us .custom-form-styles [type='text'],
    #contact-us .custom-form-styles [type='email'] {
      border-color: #666666;
      background: none;
      border-radius: 2px;
      padding-left: 2.6rem;
    }

    #contact-us .custom-form-styles .form-item input {
      margin-bottom: 2rem;
    }

    #contact-us .custom-form-styles .form-item label {
      left: 2.6rem;
    }

    #contact-us .custom-form-styles .form-item textarea {
      height: 250px;
      margin-bottom: 0rem;
    }

    #contact-us .custom-form-styles .form-item::after {
      color: #2D6FB7;
    }

    #contact-us .g-recaptcha.g-form-rc {
      margin: 2rem 0 3rem;
    }

    #contact-us #g-recaptcha-response {
      display: block !important;
      position: absolute;
      margin: -85px 0 0 0 !important;
      width: 302px !important;
      height: 76px !important;
      z-index: -999999;
      opacity: 0;
    }

    /*** Online & Mobile Banking ***/
    #online-mobile-banking .app-icons-wrapper {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    #online-mobile-banking .app-icon-320 {
      margin: 0.5rem;
      width: 250px;
    }

    #online-mobile-banking .icons-indent {
      margin: 0 1.25rem;
    }

    #online-mobile-banking .icons-indent p {
      margin: 0 .5rem;
      font-size: 1.1rem;
    }

    /*** Direct Deposit ***/
    #direct-deposit li {
      padding-left: .5rem;
      padding-bottom: 1rem;
    }

    #direct-deposit li::marker {
      color: #EE3124;
      font-weight: 900;
    }

    #direct-deposit table {
      float: right;
      max-width: 350px;
    }

    #direct-deposit thead th {
      background: #002D72;
      color: #fefefe;
    }

    #blank-check {
      margin: 2rem 0 1rem 0;
    }

    /*** Insurance Overview ***/
    #button-bottom {
      height: 100%;
      position: relative;
    }

    #button-bottom .bottom-right {
      position: absolute;
      bottom: 0;
      right: 0;
    }

    #button-bottom .bottom-left {
      position: absolute;
      bottom: 0;
    }

    .uip-button-mobile {
      display: none !important;
    }

    .uip-personal-button {
      margin: 0 0 2.5rem 0 !important;
    }

    /*** Insurance Menu ***/
    .uip-nav {
      overflow: hidden;
      justify-content: space-between;
      display: flex;
      flex-wrap: wrap;
      border-bottom: 10px solid #2D6FB7;
      padding: 1rem 0;
    }

    .uip-nav a {
      display: block;
      float: left;
      color: #fefefe;
      text-align: center;
      font-size: 1.1rem;
      text-transform: uppercase;
      letter-spacing: 0.0625rem;
      font-weight: 900;
    }

    .uip-nav a:hover {
      color: #fefefe;
    }

    .uip-nav a.active {
      color: #D8D8D8;
    }

    .uip-nav a:focus {
      color: #fefefe;
    }

    .uip-nav .ham-icon {
      display: none;
    }

    /*** Insurance Products Page ***/
    #insurance-form {
      background: #D8D8D8;
      padding: 0.9375rem 1.5625rem;
      border-radius: 2px;
      overflow: auto;
    }

    #insurance-form legend {
      font-size: 1.15rem;
      font-weight: 900;
      letter-spacing: 0.0625rem;
    }

    #insurance-form label {
      color: #595959;
      margin: 0 0 1rem;
    }

    #insurance-form [type='checkbox'],
    #insurance-form [type='radio'] {
      margin: 0 0.5rem 0 0;
    }

    #insurance-service h2 {
      font-size: 1.25rem;
      text-transform: none;
    }

    #insurance-service li {
      font-size: 1.1rem;
      margin: 0 0 1rem;
    }

    #insurance-service ul {
      margin-top: 1rem;
    }

    #insurance-service img {
      width: 160px;
      height: 153px;
      padding: 0 10px;
    }

    /*** Insurance About Us Page ***/
    #insurance-logo img {
      border: 10px solid #2D6FB7;
      border-radius: 2px;
      padding: 0 2rem;
    }

    #insurance-intro {
      display: flex;
      height: 100%;
    }

    #insurance-intro .intro-wrapper {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    #insurance-team .button {
      font-size: 1.5rem;
      margin: 0.9375rem 0 1rem;
      letter-spacing: 0.0625rem;
    }

    #insurance-team .button:after {
      color: #EE3124;
    }

    #insurance-team h4 {
      text-transform: none;
    }

    /*** Insurance Bio Page ***/
    #insurance-headshot img {
      border: 10px solid #1b2c57;
      border-radius: 2px;
    }

    /*** Insurance Locations Page ***/
    #insurance-locations {
      margin-bottom: 1rem;
    }

    #insurance-locations h3,
    #insurance-locations i {
      color: #EE3124;
    }

    #insurance-locations span.role {
      margin-left: 1.5625rem;
    }

    #insurance-locations a {
      color: #1b2c57;
    }

    /*** Insurance Disclosure ***/
    #insurance-disclosure table p {
      margin-top: 0.9375rem;
      font-weight: 900;
    }

    /*** Wealth Management Pages ***/
    #wealth-management .security-message {
      line-height: 1.6;
      font-size: 1.2rem;
      margin-top: 1rem;
    }

    #wealth-management .button {
      background: #2D6FB7;
      border: 2px solid #2D6FB7;
      margin: 1rem 0;
    }

    #wealth-management .button:hover,
    #wealth-management .button:focus {
      color: #2D6FB7;
      background: #fefefe;
      border: 2px solid #2D6FB7;
    }

    /*** YouFirst Personalized Debit Cards ***/
    #youfirst ol.steps {
      margin-top: 2rem;
      margin-left: 2.4rem;
    }

    #youfirst li {
      padding: 0 0 0.9375rem .5rem;
    }

    #youfirst .read-terms-conditions {
      font-size: 1.2rem;
      margin: 1.25rem 0;
      letter-spacing: 0.03125rem;
      line-height: 1.6;
      color: #1b2c57;
      text-transform: uppercase;
      font-weight: 900;
    }

    #youfirst .read-terms-conditions:after {
      font-family: "Font Awesome 5 Pro", sans-serif;
      content: '\f054';
      margin-left: 0.625rem;
      font-size: 0.9rem;
      color: #EE3124;
    }

    #youfirst .read-terms-conditions:hover {
      color: #EE3124;
    }

    /*** PPP ***/
    #ppp-sba-updated {
      display: flex;
      height: 100%;
    }

    #ppp-sba-updated .sba-wrapper {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    #ppp-sba-updated .sba-wrapper p {
      padding: 0.9375rem 0;
    }

    /*** Online Security Page ***/
    #online-security .callouts {
      padding-right: 1.5625rem;
      color: #ffffff;
    }

    #online-security tbody {
      border: 4px solid #1b2c57;
      background-color: transparent;
    }

    #online-security tbody td.warning-icon {
      background: #1b2c57;
      color: #EE3124;
      font-size: 100px;
      width: 240px;
      height: 240px;
      text-align: center;
    }

    #online-security tbody td.warning-icon span {
      display: none;
    }

    #online-security tbody .message {
      text-align: justify;
    }

    /*** Estatement Page ***/
    #estatement .summary {
      font-weight: 900;
      color: #2D6FB7;
      text-transform: uppercase;
      letter-spacing: 0.0625rem;
      font-size: 1.15rem;
    }

    #estatement .no-padding .media-image.align-center {
      padding: 0;
    }

    /*** Careers Page ***/
    /* When screen is at least 639.98px (mobile) */
    @media screen and (min-width: 39.99875em) {

      .careers-tab .explore,
      .slw-main .explore {
        text-transform: uppercase;
        letter-spacing: 0.03125rem;
        float: right;
        font-size: 1.025rem;
        font-weight: 900;
        color: #1b2c57;
        padding-top: 1.25rem;
        transition: background-color 0.25s ease-out, color 0.25s ease-out;
      }

      .careers-tab .explore:after,
      .slw-main .explore:after {
        font-family: "Font Awesome 5 Pro", sans-serif;
        content: '\f054';
        margin-left: 0.625rem;
        font-size: 0.9rem;
        color: #EE3124;
      }

      .careers-tab .explore:hover,
      .slw-main .explore:hover {
        color: #EE3124;
      }
    }

    #careers-testimonies {
      position: relative;
      min-height: 580px;
    }

    #careers-testimonies .slideshow-container {
      max-width: 1000px;
      margin: auto;
    }

    #careers-testimonies .mySlides {
      display: none;
    }

    #careers-testimonies img {
      vertical-align: middle;
      border: 10px solid #2D6FB7;
      border-radius: 50%;
    }

    #careers-testimonies .mySlides {
      display: none;
    }

    #careers-testimonies .prev,
    #careers-testimonies .next {
      cursor: pointer;
      position: absolute;
      top: 80%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: #2D6FB7;
      font-weight: bold;
      font-size: 3rem;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    #careers-testimonies .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    #careers-testimonies .prev {
      left: 0;
      border-radius: 3px 0 0 3px;
    }

    #careers-testimonies .prev:hover,
    #careers-testimonies .next:hover {
      color: #EE3124;
    }

    #careers-testimonies .text {
      width: 100%;
      text-align: center;
      margin-top: 1rem;
      padding: 0 6rem;
    }

    #careers-testimonies .justify-align {
      text-align: justify;
    }

    #careers-testimonies .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    #careers-testimonies .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    #careers-testimonies .active,
    #careers-testimonies .dot:hover {
      background-color: #717171;
    }

    #careers-testimonies .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fade {
      from {
        opacity: .4;
      }

      to {
        opacity: 1;
      }
    }

    #careers-dot .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #808080;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    #careers-dot .active,
    #careers-dot .dot:hover {
      background-color: #2E3133;
    }

    /*** American Women Quarters ***/
    .american-women-quarters {
      border-left: 8px solid #ffffff;
    }

    /*** Account Chooser ***/
    .q2-section.product-guide .product-guide-slide .answer-container .button i {
      font-size: 2rem;
      padding-right: 1rem;
    }

    .q2-section.product-guide .button.answer {
      display: flex;
      text-align: left;
    }

    /*** Campaign Hide Login & Alerts ***/
    .path-taxsavings25 #alerts,
    .path-taxsavings25 .header-main,
    .path-cd-offer-2022 #alerts,
    .path-cd-offer-2022 .header-main,
    .path-cdoffer #alerts,
    .path-cdoffer .header-main,
    .path-moneymarketoffer #alerts,
    .path-moneymarketoffer .header-main {
      display: none;
    }

    .path-secure300 #alerts,
    .path-safe-secure #alerts,
    .path-500discount #alerts {
      display: none;
    }

    /*** Business Checking Creative 2021 ***/
    #bcc2021 {
      border: 1px solid #C4C2C2;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
      padding: 1rem 1.5rem;
      border-radius: 4px;
    }

    #bcc2021-logo {
      max-width: 80%;
    }

    .path-business-checking-creative-2021 #alerts,
    .path-business-checking-creative-2021 .header-main {
      display: none;
    }

    /*** Tax Savings 2022 ***/
    .path-taxsavings25 .cell.small-12.medium-7,
    .path-taxsavings25 .cell.small-12.medium-5 {
      margin-top: 3rem;
    }

    .path-taxsavings25 .column-left img {
      border-radius: 4px;
    }

    .path-taxsavings25 .column-left .section-summary {
      padding: 1.5rem 0;
    }

    .path-taxsavings25 .column-left .fub-logo {
      width: 300px;
    }

    .path-taxsavings25 .column-left h2 {
      margin-bottom: 2.5rem;
    }

    .path-taxsavings25 .column-right h2.right-title {
      padding: 0 1.25rem 1.25rem;
    }

    .path-taxsavings25 .column-right .cards {
      padding: 0;
    }

    /*** CD Campaign 2022 ***/
    .path-cd-offer-2022 header .internal-page-banner .grid-container .internal-header p {
      display: none;
    }

    .path-cd-offer-2022 .cell.small-12.medium-7,
    .path-cd-offer-2022 .cell.small-12.medium-5 {
      margin-top: 3rem;
    }

    #cd-offer-2022 {
      position: relative;
      border: 5px solid #2D6FB7;
      border-radius: 4px;
      padding: 0 1.4rem 1rem;
    }

    #cd-offer-2022 .fub-logo {
      max-width: 310px;
    }

    #cd-offer-2022 .button {
      position: relative;
      bottom: -20px;
    }

    /*** CD Offer 2022 (May 2) ***/
    #cd-offer-52-2022 {
      position: relative;
      border: 5px solid #2D6FB7;
      border-radius: 4px;
      max-width: 450px;
    }

    #cd-offer-52-2022 .promo-wrapper {
      padding: 1rem 1.4rem;
    }

    #cd-offer-52-2022 h2 {
      margin-bottom: 0;
    }

    #cd-offer-52-2022 .rate {
      margin: 1.5rem 0;
    }

    #cd-offer-52-2022 p {
      margin-bottom: 0;
      padding-bottom: 0;
    }

    #cd-offer-52-2022 .rate-value {
      float: none;
    }

    #cd-offer-52-2022 .border-right-gray {
      border-right: 1px solid #C4C2C2;
    }

    /*** Heloc Campaign 2022 ***/
    .heloc-campaign .benefits {
      margin-top: 2rem;
    }

    /*** TM Offer 2022 ***/
    .tm-offer2022 .intro {
      text-align: center;
    }

    .tm-offer2022 h2 {
      text-align: center;
    }

    .tm-offer2022 h3 {
      font-size: 1.5rem !important;
    }

    .tm-offer2022 .benefit {
      margin-bottom: 2rem;
    }

    .tm-offer2022 .benefit2 {
      margin-bottom: 1rem;
      width: 95%;
    }

    .tm-offer2022 .benefits-content {
      display: flex;
      margin-bottom: 2rem;
      text-align: center;
      padding-left: 20px;
      padding-right: 20px;
    }

    .tm-offer2022 .hr {
      display: none;
    }

    .tm-offer2022 .q2-section.grid-section .icon:not(.image) {
      margin: 0;
    }

    /*** Save & Secure Campaign 2022 ***/
    /*** Safe & Secure Campaign 2022 ***/
    .path-secure300 h1,
    .path-safe-secure h1 {
      font-size: 4.75rem;
      text-align: right;
    }

    .path-secure300 .internal-header p,
    .path-safe-secure .internal-header p {
      display: none !important;
    }

    .path-secure300 .header-text,
    .path-safe-secure .header-text {
      text-align: right;
      padding: .2rem 0 0rem;
    }

    .path-secure300 .grid-x.grid-margin-x.grid-margin-y,
    .path-safe-secure .grid-x.grid-margin-x.grid-margin-y {
      margin-left: 1rem;
    }

    /*** Mortgage Offer 2022 ***/
    .path-500discount h1,
    .path-500discount .internal-header p {
      display: none !important;
    }

    .path-500discount h2.header-title {
      font-size: 3rem;
    }

    .path-500discount .header-text {
      padding: .2rem 0 1rem;
      font-size: 1.9375rem;
      font-weight: normal;
    }

    .path-500discount .banner-button {
      display: flex;
      flex-direction: column;
      align-items: start;
    }

    /*** Forms ***/
    .form-required:after {
      content: " *";
      color: #EE3124;
    }

    /*** Journey Biz dotted line ***/
    .q2-section.journey-tabs .tabs-container .tabs-content .tabs-panel .grid-x .step-marker:after,
    .q2-section.journey-tabs .tabs-container .tabs-content .tabs-panel .grid-x .step-marker:before {
      display: none;
    }

    .q2-section.journey-tabs .tabs-container .accordion .accordion-item .accordion-content .accordion-tab-content .grid-x .step-marker:nth-of-type(4n+3)::before,
    .q2-section.journey-tabs .tabs-container .accordion .accordion-item .accordion-content .accordion-tab-content .grid-x .step-marker:nth-of-type(4n+1)::before {
      display: none;
    }

    /*** Calendar ***/
    .content-container-center {
      height: 100%;
      display: flex;
      align-items: center;
    }

    .feb-content {
      display: flex;
      height: 100%;
    }

    .feb-content .content-wrapper {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    #march-content-cta .button-container {
      display: flex;
      justify-content: end;
      align-items: center;
    }

    #march-content-cta .lead-text {
      font-size: 1.5rem;
      padding-right: 1rem;
    }

    #march-content-cta .button {
      margin: 0;
    }

    #july-content .h3 {
      color: #1b2c57;
    }

    #july-content i {
      float: left;
      margin: 5px;
    }

    #july-content p {
      text-align: justify;
      color: #0a0a0a;
    }

    /*** Temporary Fix ***/
    /* Online Banking FAQ page */
    .path-online-banking-frequently-asked-questions .q2-section .accordion-item.is-active a:not(.button):not([type='submit'])::before {
      display: none;
    }

    .acc-link-fix {
      display: inline-block !important;
      text-transform: none !important;
      padding: 0 !important;
    }

    .acc-link-fix::before {
      display: none;
    }

    /*** Chatbox ***/
    header.sidebarHeader h2 {
      color: white;
    }

    /* Box Margins & Padding */
    .embeddedServiceSidebarForm .fieldList {
      margin: 30px 24px 0 12px !important;
    }

    .embeddedServiceSidebarFormField .uiInputPhone input.Phone,
    .embeddedServiceSidebarFormField .uiInputEmail input.Email {
      margin-bottom: 0px;
    }

    #dialogTextBody:after {
      content: "After the chat ends, your transcript will be deleted.  Click go back at the bottom of the chat window if you wish to view your transcript before ending chat. ";
    }

    #dialogTextBody .uiOutputRichText {
      display: none;
    }

    /*** Spend Life Wisely ***/
    .path-spendlifewisely #main-content .content-wrapper .blog-index {
      padding: 6.25rem 0.625rem !important;
    }

    /*** Top 50 ***/
    .icon-spacing50 {
      margin-bottom: 1rem;
    }

    .blog-callout {
      background: #002D72;
      padding: 2.0625rem 1.5rem;
      box-shadow: 0 0 10px 0px rgba(10, 10, 10, 0.4);
      border-radius: 2px;
    }

    .blog-callout .callout-content {
      margin-bottom: 0;
      color: #fefefe;
    }

    blockquote.top50 {
      border-left: 5px solid #cacaca;
    }

    .ordered-list-top50 ol.sub {
      list-style: none;
      margin-left: 0;
      padding-top: 0.9375rem;
    }

    .ordered-list-top50 li.title {
      padding-left: 0.5rem;
    }

    .ordered-list-top50 ::marker {
      color: #0a0a0a;
      font-size: 1.25rem;
      font-weight: bold;
    }

    .top50-pt-pls {
      padding-top: 0.9375rem;
    }

    .summer-savings-action-steps {
      margin-bottom: 2rem;
    }

    /*** Recipe for Good Credit ***/
    .qrcode-recipe {
      text-align: left !important;
      padding: 0 !important;
    }

    /*** Zip Code Modal ***/
    #zipCodeChallenge {
      height: 310px;
      padding-left: 2rem;
      padding-right: 2rem;
    }

    #zipCodeChallenge button {
      margin: 0 0 .7rem 0;
    }

    #zipCodeChallenge h2 {
      padding-top: 1.5rem;
    }

    #odao-loader {
      border: 4px solid #C4C2C2;
      /* Light grey */
      border-top: 4px solid #2D6FB7;
      /* Blue */
      border-radius: 50%;
      width: 20px;
      height: 20px;
      animation: spin 1s linear infinite;
      display: none;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    #odao-zip-error {
      display: none;
    }

    /*** Financial Well Being Video Series ***/
    #fwb-series span.gray {
      letter-spacing: 0.0625rem;
    }

    #fwb-series .section-summary p {
      font-size: 1.2rem;
    }

    /*** Lisas Story section on FWB blog ***/
    #lisas-story {
      margin-top: 3.125rem;
    }

    #lisas-story .media-object {
      flex-wrap: wrap !important;
    }

    #lisas-story .thumbnail {
      box-shadow: none;
      -webkit-box-shadow: none;
      border: 0;
    }

    #lisas-story img {
      vertical-align: middle;
      border: 10px solid #2D6FB7;
      border-radius: 50%;
    }

    #lisas-story .main-section {
      padding: 0 0 0 1rem;
    }

    .qr-medicare {
      padding: 0 !important;
    }

    /*** CoreNet Award ***/
    #corenet-award {
      margin-top: 1rem;
    }

    #corenet-award .awardee {
      float: left;
      margin: .4rem 1.5rem 0 0;
    }

    #corenet-award .vid1 {
      border-right: 5px solid #fefefe;
    }

    #corenet-award .vid2 {
      border-left: 5px solid #fefefe;
    }

    /*** Remebering John Massey blog ***/
    #remembering-john-massey {
      margin-top: 1rem;
    }

    #remembering-john-massey p.main-content {
      margin-bottom: 0;
    }

    #remembering-john-massey .left-image {
      float: left;
      margin: 0.4rem 1.5rem 0 0;
    }

    #remembering-john-massey .right-image {
      float: right;
      margin: 0.4rem 0 0 1.5rem;
    }

    #remembering-john-massey .image1 {
      width: 260px;
    }

    #remembering-john-massey .image2,
    #remembering-john-massey .image3 {
      width: 490px;
    }

    #remembering-john-massey .image4 {
      width: 310px;
    }

    #remembering-john-massey .image5 {
      width: 390px;
    }

    /*** eAccessibility Icon ***/
    .ea-icon {
      text-align: right;
    }

    .ea-icon img {
      height: 30px;
    }

    /*** All Webforms (ADA & Nicer Borders) ***/
    .general-insurance-wb,
    .employee-benefits-wb,
    .commercial-insurance-wb,
    .treasury-management-wb,
    .business-deposit-wb {
      background: #f1f1f1;
      border-radius: 2px;
      overflow: auto;
    }

    .general-insurance-wb [type='text'],
    .general-insurance-wb [type='password'],
    .general-insurance-wb [type='date'],
    .general-insurance-wb [type='datetime'],
    .general-insurance-wb [type='datetime-local'],
    .general-insurance-wb [type='month'],
    .general-insurance-wb [type='week'],
    .general-insurance-wb [type='email'],
    .general-insurance-wb [type='number'],
    .general-insurance-wb [type='search'],
    .general-insurance-wb [type='tel'],
    .general-insurance-wb [type='time'],
    .general-insurance-wb [type='url'],
    .general-insurance-wb [type='color'],
    .general-insurance-wb textarea,
    .general-insurance-wb select,
    .employee-benefits-wb [type='text'],
    .employee-benefits-wb [type='password'],
    .employee-benefits-wb [type='date'],
    .employee-benefits-wb [type='datetime'],
    .employee-benefits-wb [type='datetime-local'],
    .employee-benefits-wb [type='month'],
    .employee-benefits-wb [type='week'],
    .employee-benefits-wb [type='email'],
    .employee-benefits-wb [type='number'],
    .employee-benefits-wb [type='search'],
    .employee-benefits-wb [type='tel'],
    .employee-benefits-wb [type='time'],
    .employee-benefits-wb [type='url'],
    .employee-benefits-wb [type='color'],
    .employee-benefits-wb textarea,
    .employee-benefits-wb select,
    .commercial-insurance-wb [type='text'],
    .commercial-insurance-wb [type='password'],
    .commercial-insurance-wb [type='date'],
    .commercial-insurance-wb [type='datetime'],
    .commercial-insurance-wb [type='datetime-local'],
    .commercial-insurance-wb [type='month'],
    .commercial-insurance-wb [type='week'],
    .commercial-insurance-wb [type='email'],
    .commercial-insurance-wb [type='number'],
    .commercial-insurance-wb [type='search'],
    .commercial-insurance-wb [type='tel'],
    .commercial-insurance-wb [type='time'],
    .commercial-insurance-wb [type='url'],
    .commercial-insurance-wb [type='color'],
    .commercial-insurance-wb textarea,
    .commercial-insurance-wb select,
    .treasury-management-wb [type='text'],
    .treasury-management-wb [type='password'],
    .treasury-management-wb [type='date'],
    .treasury-management-wb [type='datetime'],
    .treasury-management-wb [type='datetime-local'],
    .treasury-management-wb [type='month'],
    .treasury-management-wb [type='week'],
    .treasury-management-wb [type='email'],
    .treasury-management-wb [type='number'],
    .treasury-management-wb [type='search'],
    .treasury-management-wb [type='tel'],
    .treasury-management-wb [type='time'],
    .treasury-management-wb [type='url'],
    .treasury-management-wb [type='color'],
    .treasury-management-wb textarea,
    .treasury-management-wb select,
    .business-deposit-wb [type='text'],
    .business-deposit-wb [type='password'],
    .business-deposit-wb [type='date'],
    .business-deposit-wb [type='datetime'],
    .business-deposit-wb [type='datetime-local'],
    .business-deposit-wb [type='month'],
    .business-deposit-wb [type='week'],
    .business-deposit-wb [type='email'],
    .business-deposit-wb [type='number'],
    .business-deposit-wb [type='search'],
    .business-deposit-wb [type='tel'],
    .business-deposit-wb [type='time'],
    .business-deposit-wb [type='url'],
    .business-deposit-wb [type='color'],
    .business-deposit-wb textarea,
    .business-deposit-wb select {
      border: 1px solid #696969;
      border-radius: 2px;
    }

    .general-insurance-wb,
    .employee-benefits-wb,
    .commercial-insurance-wb {
      padding: 0.9375rem 1.5625rem;
    }

    .treasury-management-wb,
    .business-deposit-wb {
      padding: 2rem 3rem;
    }

    .treasury-management-wb {
      max-width: 800px;
    }

    .commercial-insurance-wb label[for="edit-homeowners-insurance"] {
      margin-right: 1px;
    }

    .business-deposit-wb #edit-captcha-response {
      width: 150px;
    }

    .business-deposit-wb .webform-button--submit {
      margin: 1rem 0;
    }

    .business-deposit-wb #edit-checking- .js-form-item {
      display: flex;
      margin-bottom: .5rem;
    }

    .business-deposit-wb #edit-checking- .js-form-item label {
      margin-top: -7px;
    }

    .business-deposit-wb #edit-source-of-funds-options .js-form-item {
      display: flex;
      margin-bottom: .5rem;
    }

    .business-deposit-wb #edit-source-of-funds-options .js-form-item label {
      margin-top: -7px;
    }

    /*** Holiday Consumer Services 2022 ***/
    .hcs2022-table {
      font-size: 1.3rem;
    }

    .hcs2022-table table tr {
      background: #ffffff;
    }

    .hcs2022-table table tr:nth-child(2n) {
      background: #f8f8f8;
    }

    /*** Calendar ***/
    .path-calendar-2022-august .q2-section.v-tabs-section.grey.gutter-both {
      padding: 4.25rem 0;
    }

    .sept2022-bq {
      border-left: 5px solid #cacaca;
    }

    .sept2022-bq .section-summary p {
      padding: 0 0 1rem !important;
    }

    .sept2022-intro {
      margin-top: 1.7rem;
    }

    .path-calendar-2022-october .q2-section.grid-section.callouts.gutter-bottom {
      padding: 0 0 2.5rem;
    }

    .path-calendar-2022-october .q2-section.grid-section.callouts .callout::before {
      border-top: solid 10px #FF8300;
    }

    /*** Finotta ***/
    .finotta-vid {
      max-width: 900px;
      margin: auto;
    }

    .fin-wrapper {
      display: flex;
      flex-direction: column;
      height: 100%;
      justify-content: center;
    }

    .path-financialguide h2 {
      font-size: 2.60rem;
    }

    .smartphone-wrapper {
      position: relative;
    }

    .smartphone {
      position: absolute;
      max-width: 325px;
      max-height: 700px;
      z-index: -1;
      margin: auto;
      border: 16px #E4E4E2 solid;
      border-top-width: 60px;
      border-bottom-width: 60px;
      border-radius: 36px;
      box-shadow: 0 0 10px 5px rgba(10, 10, 10, 0.09);
    }

    .smartphone:before {
      content: '';
      display: block;
      width: 60px;
      height: 5px;
      position: absolute;
      top: -30px;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #333;
      border-radius: 10px;
    }

    .smartphone:after {
      content: '';
      display: block;
      width: 35px;
      height: 35px;
      position: absolute;
      left: 50%;
      bottom: -65px;
      transform: translate(-50%, -50%);
      background: #333;
      border-radius: 50%;
    }

    .smartphone .content {
      max-height: 700px;
      background: white;
      overflow: hidden;
    }

    /*** MOBILE ***/
    /* 1163px */
    @media screen and (max-width: 72.688em) {

      /*** GLOBAL ***/
      .hide-on-mobile {
        display: none;
      }

      /*** CD Offer 2022 (May 2) ***/
      .path-cdoffer .grid-x.grid-margin-x.grid-margin-y {
        flex-direction: column;
        align-items: center;
      }

      .path-cdoffer .details {
        order: 2;
      }

      .path-cdoffer .promo {
        order: 1;
      }

      .path-cdoffer #cd-offer-52-2022 .grid-container {
        padding-right: 0;
        padding-left: 0;
      }
    }

    /* 1023.98px */
    @media screen and (max-width: 63.99875em) {

      /*** About Us Page ***/
      #about-us-purpose .statement {
        width: 100%;
      }

      #about-us-stakeholders .statement {
        width: 90%;
      }

      #about-us-stakeholders .statement span.blue {
        font-size: 2rem;
      }

      #stakeholder-tree img {
        width: 100%;
      }

      /*** Comparison Table ***/
      #compare-accounts table tbody tr:nth-child(4n) {
        background: transparent;
      }

      #compare-accounts table tbody .row-mobile {
        display: table-row;
        background: #f1f1f1;
      }

      #compare-accounts .row-desktop {
        display: none;
      }

      #compare-accounts td {
        border: 1px solid #CCC;
      }

      #compare-accounts .hide-mobile {
        display: none;
      }

      /*** Wendell section ***/
      #wendell-headshot {
        width: 200px;
        height: 200px;
      }

      /*** Vehicle Loans ***/
      .vehicle-values {
        justify-content: center;
      }

      .vehicle-kelley {
        display: flex !important;
        justify-content: center;
      }

      /*** HELOC ***/
      .heloc-benefits {
        font-size: 1.4rem;
        margin: 0 -10%;
      }

      /*** Lisas Story section on FWB blog ***/
      #lisas-story .media-object {
        flex-direction: column;
      }

      #lisas-story .lisa-headshot,
      #lisas-story h2 {
        text-align: center;
      }

      #lisas-story .main-section,
      #lisas-story .media-object-section:first-child {
        padding: 0;
      }

      /*** CoreNet Award ***/
      #corenet-award .vid1 {
        border-right: none;
      }

      #corenet-award .vid2 {
        border-left: none;
      }

      /*** Insurance Overview ***/
      .uip-button-desktop {
        display: none !important;
      }

      .uip-button-mobile {
        display: inline !important;
      }

      /*** Finotta ***/
      .smartphone {
        max-height: 600px;
      }

      .smartphone .content {
        max-height: 475px;
      }
    }

    /* 930px Insurance Menu Mobile */
    @media screen and (max-width: 58.125em) {
      .uip-nav a:not(:first-child) {
        display: none;
      }

      .uip-nav a.ham-icon {
        float: right;
        display: block;
      }

      .uip-nav.responsive {
        position: relative;
        flex-direction: column;
      }

      .uip-site-links {
        padding-top: 1rem;
      }

      .uip-home-icon,
      .ham-icon {
        font-size: 1.4rem !important;
        padding-bottom: 6px;
      }

      .uip-nav.responsive .ham-icon {
        position: absolute;
        right: 0;
        top: 0;
        padding: 1rem 0;
      }

      .uip-nav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }

    /* 768px iPad Mini */
    @media screen and (max-width: 48em) {

      #remembering-john-massey .image2,
      #remembering-john-massey .image3 {
        width: 400px;
      }

      #remembering-john-massey .right-image {
        margin: 0.4rem 0 0 1rem;
      }

      #remembering-john-massey .left-image {
        margin: 0.4rem 1rem 0 0;
      }
    }

    /* 639.98px Mobile   */
    @media screen and (max-width: 39.99875em) {

      /*** Global ***/
      .mobile-center {
        text-align: center;
      }

      .large14rem,
      .section-summary-font-size,
      .section-summary-list {
        font-size: 1.2rem;
      }

      .break-on-mobile-pls {
        display: block;
        margin-bottom: 0 !important;
      }

      .bold-on-mobile-pls {
        font-weight: bold;
      }

      /*** About Us Page ***/
      #about-us-purpose .statement .section-summary p {
        text-align: center;
      }

      #about-us-purpose .statement .statement2 p {
        font-size: 1.75rem;
        text-align: center;
      }

      article[about="/about-us"] .small-12.medium-4 {
        order: 1;
      }

      article[about="/about-us"] .small-12.medium-8 {
        order: 2;
      }

      #about-us-stakeholders .statement {
        width: 100%;
        text-align: center;
      }

      #about-us-stakeholders .statement span.blue {
        font-size: 1.75rem;
      }

      #stakeholder-tree img {
        max-width: 320px;
      }

      /*** Leadership Page ***/
      #leadership h2 {
        font-size: 1.75rem;
        text-align: center;
        margin-top: 0;
      }

      #leadership .social-bio-links {
        text-align: center;
      }

      /*** Overview Benefits Section ***/
      article[about="/checking-accounts"] .accordion-section,
      article[about="/savings-accounts"] .accordion-section,
      article[about="/business-savings-accounts"] .accordion-section,
      article[about="/business-checking-accounts"] .accordion-section {
        display: block;
      }

      article[about="/checking-accounts"] #cards-intro,
      article[about="/savings-accounts"] #cards-intro,
      article[about="/business-savings-accounts"] #cards-intro,
      article[about="/business-checking-accounts"] #cards-intro {
        display: none;
      }

      article[about="/checking-accounts"] .cards,
      article[about="/savings-accounts"] .cards,
      article[about="/business-savings-accounts"] .cards,
      article[about="/business-checking-accounts"] .cards {
        display: none;
      }

      /*** Comparison Table ***/
      #compare-accounts {
        margin: 0 -10%;
      }

      #compare-accounts h2 {
        padding: 15px;
      }

      #compare-accounts .smallest {
        font-size: 0.75rem;
      }

      #compare-accounts td,
      #compare-accounts th {
        padding: 1.25rem 0.25rem;
      }

      #compare-accounts .button {
        font-size: 14px;
        padding: 10px 20px;
        margin: 0.75rem 0 0 0;
      }

      #compare-accounts .small320 {
        font-size: 0.75rem;
      }

      /*** SLW Section***/
      #slw-section h2 {
        text-align: left;
      }

      /*** HELOC ***/
      .heloc-benefits p {
        display: flex;
        flex-direction: column;
      }

      .heloc-benefits br,
      .heloc-benefits .divider {
        display: none;
      }

      /*** Insurance Overview ***/
      .uip-h2 {
        text-align: center;
      }

      /*** Insurance Products Page ***/
      article[about="/personal-insurance"] .small-12.medium-7,
      article[about="/commercial-insurance"] .small-12.medium-7,
      article[about="/employee-benefits"] .small-12.medium-7,
      article[about="/sba-lending"] .small-12.medium-7 {
        order: 2;
      }

      article[about="/personal-insurance"] .small-12.medium-5,
      article[about="/commercial-insurance"] .small-12.medium-5,
      article[about="/employee-benefits"] .small-12.medium-5,
      article[about="/sba-lending"] .small-12.medium-5 {
        order: 1;
      }

      article[about="/personal-insurance"] #insurance-service img,
      article[about="/commercial-insurance"] #insurance-service img,
      article[about="/employee-benefits"] #insurance-service img,
      article[about="/sba-lending"] #insurance-service img {
        width: 100%;
        height: auto;
      }

      /*** Journey Biz ***/
      .q2-section.journey-tabs .tabs-container .accordion .accordion-item .accordion-content .accordion-tab-content .grid-x .step-content {
        padding: 0 0.625rem 0.625rem !important;
      }

      /*** Wendell section ***/
      #wendell-headshot {
        width: 260px;
        height: 260px;
      }

      #wendell .wendell-info {
        align-items: center;
        margin: 1.5625rem auto 0;
      }

      #wendell .wendell-info h3 {
        letter-spacing: normal;
      }

      #wendell .wendell-info a {
        font-size: 1rem;
      }

      /*** Wealth Management Pages ***/
      #wealth-management .security-message {
        font-size: 1rem;
      }

      /*** Careers Page ***/
      #careers .explore {
        float: none;
      }

      #careers .explore:after {
        display: none;
      }

      #careers-testimonies .mySlides .media-image {
        width: 80%;
      }

      #careers-testimonies .prev {
        left: -40px;
      }

      #careers-testimonies .next {
        right: -50px;
      }

      #careers-testimonies .text {
        padding: 0 0 0 1rem;
      }

      #careers-testimonies .justify-align {
        font-size: 1rem;
      }

      article[about="/careers-test"] .q2-section.grid-section .icon.image div img {
        height: 70% !important;
      }

      article[about="/careers-test"] .q2-section.grid-section.columns .column .button {
        margin: -50px 0 0 0 !important;
      }

      /*** Online Security ***/
      #online-security tbody td.warning-icon {
        display: none;
      }

      /*** Direct Deposit ***/
      #direct-deposit table {
        float: none;
        max-width: 100%;
      }

      #blank-check {
        margin: 0;
      }

      /*** Privacy Policy ***/
      .privacy-policy {
        margin: 0 -10%;
      }

      /*** Business Deposit Webform ***/
      .business-deposit-wb {
        padding: 1rem 1.5rem;
        border-radius: 2px;
      }

      .business-deposit-wb #edit-checking- {
        display: flex;
        flex-direction: column;
      }

      /*** Contact Us Page ***/
      #contact-us .contact-box {
        padding: 2rem 1rem 1rem;
      }

      /*** Treasury Management Webform ***/
      .treasury-management-wb .webform-options-display-two-columns {
        column-count: 1;
      }

      /*** Treasury Management Resource Page ***/
      #menu-list-tm .space {
        display: none;
      }

      #menu-list-tm .main {
        text-align: left;
        text-decoration: underline;
      }

      #menu-list-tm .col {
        flex-wrap: wrap;
      }

      #menu-list-tm .doc,
      #menu-list-tm .vid {
        padding-bottom: 0;
      }

      /*** Recipe for Good Credit ***/
      .qrcode-recipe {
        width: 50%;
        margin-left: 0;
      }

      /*** Calendar ***/
      article[about="/calendar/2022/january"] .cell.small-12.medium-7 {
        order: 2;
      }

      .jan-image {
        padding: 1.5625rem 0 0 0 !important;
      }

      #march-content-cta .button-container {
        flex-direction: column;
      }

      #march-content-cta .lead-text {
        font-size: 1.2rem;
        padding-right: 0;
        padding-bottom: .4rem;
      }

      .sept2022-intro {
        margin-top: 0;
      }

      /*** eAccessibility Icon ***/
      .ea-icon {
        text-align: center;
        padding-bottom: 1rem;
      }

      /*** Tax Savings 2022 ***/
      .column-right h2.right-title {
        font-size: 1.25rem;
      }

      /*** Holiday Consumer Services ***/
      .hcs2022-table {
        font-size: 1rem;
        margin: 0 -10%;
      }

      /*** Top 50 ***/
      .icon-spacing50 {
        margin-bottom: 0;
      }

      blockquote.top50 .quote {
        font-size: 20px;
      }

      blockquote.top50 .quoter {
        font-size: 1rem;
      }

      .ordered-list-top50 li.title {
        padding-left: 0.3rem;
      }

      .ordered-list-top50 ::marker {
        font-size: 1.0625rem;
      }

      .summer-savings-action-steps {
        margin-bottom: 0;
      }

      /*** CD Offer 2022 (May 2) ***/
      .path-cdoffer .q2-section.general-section .grid-container {
        width: 100%;
      }

      .path-cdoffer #cd-offer-52-2022 .promo-wrapper {
        padding: 1rem;
      }

      .path-cdoffer #cd-offer-52-2022 .title {
        font-size: 2.5rem;
      }

      .path-cdoffer #cd-offer-52-2022 .rate {
        margin: 1.5rem 0;
      }

      .path-cdoffer #cd-offer-52-2022 .rate-wrap {
        margin-bottom: 0;
        text-align: left;
        left: 0;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
      }

      .path-cdoffer #cd-offer-52-2022 .q2-section.rate-section .grid-container {
        width: 100%;
      }

      /*** HELOC Campaign 2022 ***/
      .heloc-campaign .h-large {
        font-size: 2rem;
      }

      .heloc-campaign .low {
        font-style: italic;
        margin-top: 0.5rem;
      }

      .heloc-campaign .benefits ul {
        padding-bottom: 0;
      }

      /*** TM Offer 2022 ***/
      .path-treasury-management-sharedpurpose .q2-section.general-section .grid-container {
        width: 100%;
      }

      .tm-offer2022 h2 {
        text-align: left;
      }

      .tm-offer2022 .intro {
        text-align: left;
      }

      .tm-offer2022 .benefit {
        margin-bottom: 0rem;
        font-size: 1rem;
      }

      .tm-offer2022 .benefits-content {
        text-align: left;
        padding-left: 0;
        padding-right: 0;
        margin-bottom: 0;
      }

      .tm-offer2022 .hr {
        display: block;
      }

      /*** Save & Secure Campaign 2022 ***/
      /*** Safe & Secure Campaign 2022 ***/
      .path-secure300 h1,
      .path-safe-secure h1 {
        font-size: 2.75rem;
      }

      .path-secure300 .header-text,
      .path-safe-secure .header-text {
        padding: 1.5625rem 0 0;
        font-size: 1.3rem;
      }

      /*** Mortgage Offer 2022 ***/
      .path-500discount .header-text {
        padding: 1.5625rem 0 0;
        font-size: 1.5rem;
      }

      /*** Remebering John Massey blog ***/
      #remembering-john-massey p.main-content {
        margin-bottom: 1rem;
      }

      #remembering-john-massey .image1,
      #remembering-john-massey .image2,
      #remembering-john-massey .image3,
      #remembering-john-massey .image4,
      #remembering-john-massey .image5 {
        width: 100%;
      }

      #remembering-john-massey .right-image,
      #remembering-john-massey .left-image {
        margin: 0 0 1rem 0;
      }

      .smartphone {
        position: relative;
      }

      .cell.small-12.medium-8 {
        order: 1;
      }

      .cell.small-12.medium-4 {
        order: 2;
      }

      .path-financialguide h2 {
        font-size: 2rem;
      }
    }

    /* 412px */
    @media screen and (max-width: 25.75em) {

      /*** Comparison Table ***/
      #compare-accounts table .tick {
        font-size: 1.5rem;
      }

      #compare-accounts table th {
        font-size: .9rem;
      }

      #compare-accounts table tbody a {
        font-size: .9rem;
      }

      #compare-accounts .start-button {
        display: none;
      }

      #compare-accounts .start-icon {
        margin: 1rem 0 0 0;
        display: block;
      }

      #compare-accounts .start-icon a {
        color: #EE3124;
      }

      #compare-accounts .start-icon a:hover {
        color: #fefefe;
      }

      #compare-accounts .key-benefits p {
        font-size: .9rem;
      }

      /*** CD Offer 2022 (May 2) ***/
      .path-cdoffer #cd-offer-52-2022 .title {
        font-size: 2rem;
      }
    }

    /*** Notes ***/
    /*** &nbsp; article[about="/checking-accounts"]  ***/
  </style>
  <link rel="icon" href="/logo.png" type="image/gif" />
  <link rel="alternate" hreflang="en" href="checking-accounts.php" />

  <title>Checking Accounts | Jeko Credit Federal Union (JEKOCFU)</title>
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/ajax-progress.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/align.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/autocomplete-loading.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/fieldgroup.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/container-inline.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/clearfix.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/details.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/hidden.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/item-list.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/js.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/nowrap.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/position-container.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/progress.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/reset-appearance.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/resize.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/sticky-header.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/system-status-counter%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/system-status-report-counters%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/system-status-report-general-info%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/tabledrag.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/tablesort.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/system/components/tree-child.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="modules/custom/q2_admin_overrides/src/dist/css/q2_admin%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/filter/filter.caption%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/media/filter.caption%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="core/themes/stable/css/views/views.module%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="./modules/custom/q2_product_guide/src/dist/css/q2_product_guide.css?ro3e14" />
  <link rel="stylesheet" media="all" href="modules/custom/q2_smart_search/src/dist/css/q2_smart_search%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="modules/custom/q2_additional_logins/src/dist/css/q2_additional_logins%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="modules/custom/q2_external_link/src/dist/css/q2_external_link%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="libraries/fontawesome/css/all.min%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="modules/contrib/paragraphs/css/paragraphs.unpublished%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="modules/custom/q2_map/src/dist/css/q2_map%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="modules/custom/q2_blog/src/dist/css/q2_blog%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="themes/custom/q2_base/dist/css/q2_base%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
  <link rel="stylesheet" media="all" href="sites/default/themes/firstunitedbank-com/dist/css/app%EF%B9%96ro3e14.css" />
  <link rel="stylesheet" media="all" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&amp;display=swap" />

  <script src="core/assets/vendor/jquery/jquery.min%EF%B9%96v=3.6.0.js"></script>
  <script src="https://cds-sdkcfg.onlineaccess1.com/common.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-26361158-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 10907350128 -->

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-10907350128');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T65FC2B');
  </script>
  <!-- End Google Tag Manager -->

  <!-- FB Verify Pixel -->
  <meta name="facebook-domain-verification" content="4t74kkhf8p5tkl4ayucl12uiknc43p" />


  <style>
    .desktop-aux-nav.js-desktop-aux-nav {
      z-index: 99;
    }

    @media screen and (max-width: 39.99875em) {
      .product-guide .button.start-over {
        transform: translateX(-55%)
      }

      .slick-slide {
        float: none;
        max-width: 70vw;
        min-width: 225px;
      }

      .slick-track {
        max-width: 1200px;
        padding-bottom: 1rem;
      }

      .js-map-on-page .js-map-grid-container #map-container .map-panel .map-list li .get-directions {
        display: block;
      }
    }

    .product-guide-slide {
      width: 100% !important;
    }

    .path-search .q2-smart-search-form .q2-smart-search-list {
      top: 50%;
    }

    .q2-login-selector-container {
      vertical-align: top;
    }

    .desktop-login .input-group select.q2-login-selector {
      padding-right: 2.5rem !important;
    }

    .gm-svpc {
      display: none;
    }

    p.info-address span.address {
      display: inline-flex !important;
    }

    @media screen and (max-width: 640px) {
      .accordion-tab-content {
        display: flex;
        flex-direction: column;
      }

      .accordion-tab-content .button {
        align-self: flex-start;
      }

      .accordion-tab-content .align-right.button {
        align-self: flex-end;
      }

      .accordion-tab-content .align-center.button {
        align-self: center;
      }

      ul.pager__items {
        margin-left: auto;
        margin-right: auto;
      }
    }

    @media screen and (min-width: 640px) {
      .form-item--error-message {
        position: absolute !important;
      }
    }

    @media screen and (max-width: 640px) {
      .path-search .views-exposed-form {
        display: inline-flex !important;
        margin-bottom: 10px;
      }

      .form-item--error-message {
        position: absolute !important
      }
    }

    .menu-wrapper.header {
      z-index: 1;
    }

    header .desktop-navigation .close-button {
      z-index: 3;
    }
  </style>

</head>

<body class="path-checking-accounts path-node page-node-type-page page-published">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T65FC2B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <a href="#main-content" class="visually-hidden focusable skip-link">
    Skip to main content
  </a>

  <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

    <div class="off-canvas position-top" id="off-canvas-other" data-off-canvas data-transition="overlap">
      <div class="oc-container">
        <div class="grid-x oc-top">
          <div class="cell shrink small-order-2">
            <button aria-label="Close login pane." class="off-canvas-close oc-close-top" data-toggle="off-canvas-other"><i class="fal fa-times"></i><span>Close</span></button>
          </div>
          <div class="cell auto oc-aux small-order-1">
            <div>
              <div id="block-auxnav">



                <ul>
                  <li><a aria-label="Community Bank Locations" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="2a975d0a-12a6-49af-9f74-78cc0ea22229" href="locations.php" title="locations"><i class="fas fa-map-marker-alt"> </i> Locations</a></li>
                  <li><a aria-label="Contact Us" data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="8a753093-a0c3-42d2-a3ad-94c44c908f3f" href="contact-us.php" title="Contact Us"><i class="fas fa-phone"> </i> Contact Us</a></li>
                </ul>

              </div>

            </div>

          </div>
        </div>
        <button aria-label="Close login pane." class="off-canvas-close oc-close-bottom" data-toggle="off-canvas-other"><i class="fal fa-times"></i><span>Close</span></button>
      </div>
    </div>
    <div class="off-canvas-content" data-off-canvas-content>
      <header>
        <?php include("./header.php"); ?>
        <div class="internal-page-banner banner-img" style="background-image: url(https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/2021-03/checkingoverview-banner-internal.jpg?VersionId=MLX4x7jp45BkvuNpSsNRJYd5fbuYYJn3); background-position: 50% 50%;">
          <div class="grid-container">
            <div class="internal-header">


              <h1>Checking Accounts</h1>
              <p>Everyday life is filled with transactions – from groceries and utility bills to gift-giving and evenings out. Jeko Credit Federal Union (JEKOCFU) offers a variety of checking options to give you easy, convenient access to your money.


              </p>

            </div>

            <div class="banner-button">
              <p>Which is right for you?</p>

              <a href="#compare-accounts" class="no-new-window button" aria-label="compare accounts">Compare Accounts</a>

            </div>

          </div>
        </div>
      </header>
      <main id="main-content" class="js-quickedit-main-content">
        <div class="grid-container">
          <div class="small-12 cell">

            <div class="highlighted">
              <div>
                <div data-drupal-messages-fallback class="hidden"></div>

              </div>
            </div>


          </div>
        </div>
        <div class="grid-container content-wrapper full">
          <div class="grid-x page-content">
            <section class="cell small-12">


              <div>
                <div id="block-firstunitedbank-content">


                  <article role="article" about="/checking-accounts" typeof="schema:WebPage">


                    <span property="schema:name" content="Checking Accounts" class="hidden"></span>



                    <div>


                      <div class="q2-section general-section gutter-top grey">
                        <div class="q2-wrap grid-container">

                          <div id="cards-intro">
                            <h2>Benefits abound.</h2>

                            <div class="section-summary">
                              <p><br />
                                No two financial journeys are the same. Whether you’re looking for a starter account or an opportunity to earn interest, the team at Jeko Credit Federal Union (JEKOCFU) has you covered with an account built&nbsp;to fit your needs.</p>
                            </div>
                          </div>


                        </div>
                      </div>



                      <div class="q2-section grid-section grey cards gutter-bottom">
                        <div class="q2-wrap grid-container">
                          <div class="grid-x grid-margin-x grid-margin-y">

                            <div class="cell small-12 medium-6 large-4 card">
                              <div class="icon image">
                                <div class="media-image">

                                  <img src="https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/2021-03/personalchecking_card_360x171.png?VersionId=P00C5hc2u9unFxJSZXGI5bmNKqeuZpBe" width="360" height="171" alt="Man and woman smiling while working on laptop" loading="lazy" typeof="foaf:Image" class="img-fluid" />



                                </div>

                              </div>
                              <h2>Basic Checking</h2>

                              <p>If simplicity and convenience is what you’re after, there’s no better choice than Basic Checking.&nbsp;</p>

                              <div aria-label="How to waive" class="reveal" data-reveal="" id="details-modal8">
                                <div class="row">
                                  <div class="small-12 large-10 large-centered columns text-center">&nbsp;
                                    <p>To waive the monthly maintenance fee for Basic Checking: Sign-up for eStatements, setup Direct Deposit, or Primary account holder maintains $10,000 or more in combined deposit accounts (Checking, savings, certificates of deposit) throughout the periodic statement cycle: on any given day of the periodic statement cycle; on the day the Monthly Maintenance fee may be charged. Automatically waived for accountholders 17 and under.</p>

                                    <div class="row">
                                      <div class="large-12 columns">
                                        <div class="row ">
                                          <div class="small-10 small-centered columns"><button aria-label="Close modal" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <ul>
                                <li>Opening deposit: $100</li>
                                <li>Interest earning: No</li>
                                <li>Monthly maintenance fee: $3.50<sup>5</sup><br />
                                  <a aria-label="how to waive" class="details8" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                </li>
                              </ul>



                              <a href="#" class="button" aria-label="Learn more by going to our basic checking page">LEARN MORE</a>

                            </div>

                            <div class="cell small-12 medium-6 large-4 card">
                              <div class="icon image">
                                <div class="media-image">

                                  <img src="https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/2021-03/securechecking_card_360x171.png?VersionId=oXzdEIDDB7jxHjvdB9XVzCr4jnrXzNuF" width="360" height="171" alt="Couple smiling and sitting on the couch with their laptop" loading="lazy" typeof="foaf:Image" class="img-fluid" />



                                </div>

                              </div>
                              <h2>Secure Checking</h2>

                              <p>There is only one you. SecureChecking with IDProtect® can help protect your identity<sup>4</sup>.&nbsp;</p>

                              <ul>
                                <li>Opening deposit: $100</li>
                                <li>Interest earning: No</li>
                                <li>Monthly maintenance fee: $6.95</li>
                              </ul>



                              <a href="secure-checking.php" class="button" aria-label="Learn more by going to our secure checking page">LEARN MORE</a>

                            </div>

                            <div class="cell small-12 medium-6 large-4 card">
                              <div class="icon image">
                                <div class="media-image">

                                  <img src="https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/2021-03/prestigechecking_card_360x171.png?VersionId=sKpSRu1Hcmf_Q_hMADOibjkdXRPLoviE" width="360" height="171" alt="Couple smiling and walking on the beach with their bikes" loading="lazy" typeof="foaf:Image" class="img-fluid" />



                                </div>

                              </div>
                              <h2>Prestige Checking</h2>

                              <p>Enjoy all the convenience of a checking account while earning interest on your money. &nbsp;</p>

                              <div aria-label="How to waive" class="reveal" data-reveal="" id="details-modal2">
                                <div class="row">
                                  <div class="small-12 large-10 large-centered columns text-center">&nbsp;
                                    <p>To waive the monthly maintenance fee for Prestige Checking you must have $1,000 min. daily balance.</p>

                                    <div class="row">
                                      <div class="large-12 columns">
                                        <div class="row ">
                                          <div class="small-10 small-centered columns"><button aria-label="Close modal" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <ul>
                                <li>Opening deposit: $100</li>
                                <li>Interest earning: Yes</li>
                                <li>Monthly maintenance fee: $7.50<sup>6</sup><br />
                                  <a aria-label="how to waive" class="details2" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                </li>
                              </ul>



                              <a href="#" class="button" aria-label="Learn more by going to our prestige checking page">LEARN MORE</a>

                            </div>


                          </div>
                        </div>
                      </div>



                      <div class="q2-section accordion-section grey gutter-bottom">
                        <div class="q2-wrap grid-container">
                          <div class="grid-x grid-margin-y">
                            <div class="cell small-12 section-title">
                              <h2>Benefits abound.</h2>
                            </div>
                            <div class="section-summary">
                              <p>No two financial journeys are the same. Whether you’re looking for a starter account or an opportunity to earn interest, the team at Jeko Credit Federal Union (JEKOCFU) has you covered with an account built to fit your needs. </p>
                            </div>
                            <div class="cell small-12 ">
                              <ul class="accordion" data-responsive-accordion-tabs="accordion" data-multi-expand="false" data-allow-all-closed="true">


                                <li class=" accordion-item is-active" data-accordion-item="data-accordion-item" data-q2-deep-link-id="basic-checking-358">
                                  <a href="#" class="accordion-title">
                                    <h3>
                                      BASIC CHECKING
                                    </h3>
                                  </a>
                                  <div class="accordion-content" data-tab-content="data-tab-content">
                                    <div class="accordion-tab-content">

                                      <p>If simplicity and convenience is what you’re after, there’s no better choice than Basic Checking.&nbsp;</p>

                                      <div class="reveal" data-reveal="" id="details-modal3">
                                        <div class="row">
                                          <div class="small-12 large-10 large-centered columns text-center">&nbsp;
                                            <p>To waive the monthly maintenance fee for Basic Checking: Sign-up for eStatements, setup Direct Deposit, or Primary account holder maintains $10,000 or more in combined deposit accounts (Checking, savings, certificates of deposit) throughout the periodic statement cycle: on any given day of the periodic statement cycle; on the day the Monthly Maintenance fee may be charged. Automatically waived for accountholders 17 and under.</p>

                                            <div class="row">
                                              <div class="large-12 columns">
                                                <div class="row ">
                                                  <div class="small-10 small-centered columns"><button aria-label="Close modal" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <ul>
                                        <li>Opening deposit: $100</li>
                                        <li>Interest earning: No</li>
                                        <li>Monthly maintenance fee: $3.50<sup>5</sup><br />
                                          <a aria-label="how to waive" class="details3" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                        </li>
                                      </ul>



                                      <a href="#" class="button" aria-label="Learn more by going to our basic checking page">LEARN MORE</a>

                                    </div>
                                  </div>
                                </li>


                                <li class=" accordion-item" data-accordion-item="data-accordion-item" data-q2-deep-link-id="secure-checking-359">
                                  <a href="#" class="accordion-title">
                                    <h3>
                                      SECURE CHECKING
                                    </h3>
                                  </a>
                                  <div class="accordion-content" data-tab-content="data-tab-content">
                                    <div class="accordion-tab-content">

                                      <p>There is only one you. SecureChecking with IDProtect® can help protect your identity<sup>4</sup>.&nbsp;</p>

                                      <ul>
                                        <li>Opening deposit: $100</li>
                                        <li>Interest earning: No</li>
                                        <li>Monthly maintenance fee: $6.95<br />
                                          &nbsp;</li>
                                      </ul>



                                      <a href="secure-checking.php" class="button" aria-label="Learn more by going to our secure checking page">LEARN MORE</a>

                                    </div>
                                  </div>
                                </li>


                                <li class=" accordion-item" data-accordion-item="data-accordion-item" data-q2-deep-link-id="prestige-checking-360">
                                  <a href="#" class="accordion-title">
                                    <h3>
                                      PRESTIGE CHECKING
                                    </h3>
                                  </a>
                                  <div class="accordion-content" data-tab-content="data-tab-content">
                                    <div class="accordion-tab-content">

                                      <p>Enjoy all the convenience of a checking account while earning interest on your money. &nbsp;</p>

                                      <ul>
                                        <li>Opening deposit: $100</li>
                                        <li>Interest earning: Yes</li>
                                        <li>Monthly maintenance fee: $7.50<sup>6</sup><br />
                                          <a aria-label="how to waive" class="details2" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                        </li>
                                      </ul>



                                      <a href="#" class="button" aria-label="Learn more by going to our prestige checking page">LEARN MORE</a>

                                    </div>
                                  </div>
                                </li>


                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="q2-section product-guide">
                        <button class="js-start-over-button button start-over"><i class="fas fa-redo"></i> Start Over</button>
                        <ul class="js-product-guide-container" data-equalizer data-q2-product-guide-id="2237" data-q2-product-required-features="personal_checking">
                          <li class="js-product-guide-slide js-call-to-action product-guide-slide call-to-action">
                            <h2>
                              <div id="compare-pca">Find the account that's right for you.</div>
                            </h2>
                            <p>Try out our simple and speedy online Checking Selector Tool.&nbsp;</p>

                            <button class="js-product-guide-start button">Get started</button>
                          </li>



                          <li class="js-product-guide-slide js-product-guide-question js-required product-guide-slide product-guide-question grid_of_buttons" data-q2-question-id="2234">
                            <div class="title-container">
                              <h2>Which do you prefer in a checking account? </h2>
                            </div>
                            <div class="answer-container">
                              <ul>

                                <li class="answer-1">
                                  <button data-q2-feature="minimum_fees" class="js-product-guide-answer button answer">
                                    Minimum Fees
                                  </button>
                                </li>
                                <li class="answer-2">
                                  <button data-q2-feature="maximum_benefits" class="js-product-guide-answer button answer">
                                    Maximum Benefits
                                  </button>
                                </li>
                                <li>
                                  <button class="js-product-guide-answer js-no-answer button answer">None</button>
                                </li>
                              </ul>
                            </div>
                            <div class="navigation-container">
                              <button class="js-previous-button button previous">Previous</button>
                              <button class="js-next-button button next" disabled>Next</button>
                              <button class="js-finish-button js-next-button button next finish" disabled>Finish</button>
                            </div>
                          </li>



                          <li class="js-product-guide-slide js-product-guide-question js-required product-guide-slide product-guide-question grid_of_buttons" data-q2-question-id="2235">
                            <div class="title-container">
                              <h2>Are identity theft protection/features important to you?</h2>
                            </div>
                            <div class="answer-container">
                              <ul>

                                <li class="answer-1">
                                  <button data-q2-feature="identity_theft_protection___yes" class="js-product-guide-answer button answer">
                                    Yes
                                  </button>
                                </li>
                                <li class="answer-2">
                                  <button data-q2-feature="identity_theft_protection___no" class="js-product-guide-answer button answer">
                                    No
                                  </button>
                                </li>
                                <li>
                                  <button class="js-product-guide-answer js-no-answer button answer">None</button>
                                </li>
                              </ul>
                            </div>
                            <div class="navigation-container">
                              <button class="js-previous-button button previous">Previous</button>
                              <button class="js-next-button button next" disabled>Next</button>
                              <button class="js-finish-button js-next-button button next finish" disabled>Finish</button>
                            </div>
                          </li>



                          <li class="js-product-guide-slide js-product-guide-question js-required product-guide-slide product-guide-question grid_of_buttons" data-q2-question-id="2236">
                            <div class="title-container">
                              <h2>Do you plan to keep a balance of at least $1000 in your checking account at all time?</h2>
                            </div>
                            <div class="answer-container">
                              <ul>

                                <li class="answer-1">
                                  <button data-q2-feature="higher_balance___yes" class="js-product-guide-answer button answer">
                                    Yes
                                  </button>
                                </li>
                                <li class="answer-2">
                                  <button data-q2-feature="higher_balance___no" class="js-product-guide-answer button answer">
                                    No
                                  </button>
                                </li>
                                <li>
                                  <button class="js-product-guide-answer js-no-answer button answer">None</button>
                                </li>
                              </ul>
                            </div>
                            <div class="navigation-container">
                              <button class="js-previous-button button previous">Previous</button>
                              <button class="js-next-button button next" disabled>Next</button>
                              <button class="js-finish-button js-next-button button next finish" disabled>Finish</button>
                            </div>
                          </li>


                        </ul>
                      </div>
                      <div class="js-product-list">
                        <div class="views-element-container">
                          <div class="js-product-guide-block js-view-dom-id-8f791a1fa8cc56e8be2ed6ede6105029e179c44e84f8d387a8389a1967b057e5">








                            <div class="js-product-wrapper">
                              <div class="js-product-title">
                                <h2>Basic Checking</h2>
                              </div>
                              <div class="js-product-button"><a href="./basic-checking">Get started</a></div>
                              <div class="js-product-button-aria">get started opening a basic checking account</div>
                              <div class="js-product-description">
                                <p>If simplicity and convenience is what you’re after, there’s no better choice than Basic Checking.&nbsp;</p>

                                <ul>
                                  <li>Opening deposit: $100</li>
                                  <li>Interest earning: No</li>
                                  <li>Monthly maintenance fee: $3.50<sup>5</sup><br />
                                    <a aria-label="how to waive" data-open="waiverModal_basic" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                  </li>
                                </ul>

                                <div aria-label="How to waive" aria-labelledby="waiverModal" class="reveal text-center" data-reveal="" id="waiverModal_basic">&nbsp;
                                  <p>To waive the monthly maintenance fee for Basic Checking: Sign-up for eStatements, setup Direct Deposit, or Primary account holder maintains $10,000 or more in combined deposit accounts (Checking, savings, certificates of deposit) throughout the periodic statement cycle: on any given day of the periodic statement cycle; on the day the Monthly Maintenance fee may be charged. Automatically waived for accountholders 17 and under.</p>
                                  <button aria-label="Close waiver modal" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button>
                                </div>
                              </div>
                              <div class="js-product-features">
                                <ul>
                                  <li>Personal Checking</li>
                                  <li>Higher Balance - No</li>
                                  <li>Minimum Fees</li>
                                  <li>Identity Theft Protection - No</li>
                                </ul>
                              </div>
                              <div class="js-product-icon-type">icon</div>
                              <div class="js-product-fa-icon">
                                <div class="fontawesome-icons">
                                  <div class="fontawesome-icon">
                                    <i class="fas fa-badge-dollar" data-fa-transform="" data-fa-mask="" style=""></i>
                                  </div>

                                </div>
                              </div>
                              <div class="js-product-image-icon"></div>
                            </div>
                            <div class="js-product-wrapper">
                              <div class="js-product-title">
                                <h2>Business Savings</h2>
                              </div>
                              <div class="js-product-button"><a href="./business-savings">Get started</a></div>
                              <div class="js-product-button-aria">get started opening a business savings account</div>
                              <div class="js-product-description">
                                <p>Interest-bearing account for businesses of all sizes.&nbsp;</p>

                                <ul>
                                  <li>Interest earned on all balances</li>
                                  <li>Online and mobile banking</li>
                                  <li>9 waived debits per quarter<sup>1</sup></li>
                                </ul>
                              </div>
                              <div class="js-product-features">
                                <ul>
                                  <li>Business Savings</li>
                                  <li>Lower Fees - Lower Interest</li>
                                  <li>9 waived debits per quarter¹</li>
                                </ul>
                              </div>
                              <div class="js-product-icon-type">icon</div>
                              <div class="js-product-fa-icon">
                                <div class="fontawesome-icons">
                                  <div class="fontawesome-icon">
                                    <i class="fas fa-badge-dollar" data-fa-transform="" data-fa-mask="" style=""></i>
                                  </div>

                                </div>
                              </div>
                              <div class="js-product-image-icon"></div>
                            </div>
                            <div class="js-product-wrapper">
                              <div class="js-product-title">
                                <h2>Prestige Checking</h2>
                              </div>
                              <div class="js-product-button"><a href="./prestige-checking">Get started</a></div>
                              <div class="js-product-button-aria">get started opening a prestige checking account</div>
                              <div class="js-product-description">
                                <p>Enjoy all the convenience of a checking account while earning interest on your money. &nbsp;</p>

                                <ul>
                                  <li>Opening deposit: $100</li>
                                  <li>Interest earning: Yes</li>
                                  <li>Monthly maintenance fee: $7.50<sup>6</sup><br />
                                    <a aria-label="how to waive" class="details8" data-open="waiverModal_prestige" href="checking-accounts.php" onclick="return false">How to waive</a>
                                  </li>
                                </ul>

                                <div aria-label="How to waive" aria-labelledby="waiverModal" class="reveal text-center" data-reveal="" id="waiverModal_prestige">&nbsp;
                                  <p>To waive the monthly maintenance fee for Prestige Checking you must have $1,000 min. daily balance.</p>
                                  <button aria-label="Close waiver modal" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button>
                                </div>
                              </div>
                              <div class="js-product-features">
                                <ul>
                                  <li>Personal Checking</li>
                                  <li>Higher Balance - Yes</li>
                                  <li>Maximum Benefits</li>
                                  <li>Identity Theft Protection - No</li>
                                </ul>
                              </div>
                              <div class="js-product-icon-type">icon</div>
                              <div class="js-product-fa-icon">
                                <div class="fontawesome-icons">
                                  <div class="fontawesome-icon">
                                    <i class="fas fa-award" data-fa-transform="" data-fa-mask="" style=""></i>
                                  </div>

                                </div>
                              </div>
                              <div class="js-product-image-icon"></div>
                            </div>
                            <div class="js-product-wrapper">
                              <div class="js-product-title">
                                <h2>Secure Checking</h2>
                              </div>
                              <div class="js-product-button"><a href="secure-checking.php">Get started</a></div>
                              <div class="js-product-button-aria">get started opening a secure checking account</div>
                              <div class="js-product-description">
                                <p>There is only one you. SecureChecking with IDProtect® can help protect your identity<sup>4</sup>.&nbsp;</p>

                                <ul>
                                  <li>Opening deposit: $100</li>
                                  <li>Interest earning: No</li>
                                  <li>Monthly maintenance fee: $6.95</li>
                                </ul>

                              </div>
                              <div class="js-product-features">
                                <ul>
                                  <li>Personal Checking</li>
                                  <li>Higher Balance - Yes</li>
                                  <li>Maximum Benefits</li>
                                  <li>Identity Theft Protection - Yes</li>
                                </ul>
                              </div>
                              <div class="js-product-icon-type">icon</div>
                              <div class="js-product-fa-icon">
                                <div class="fontawesome-icons">
                                  <div class="fontawesome-icon">
                                    <i class="fas fa-shield-alt" data-fa-transform="" data-fa-mask="" style="--fa-primary-color: #000000; --fa-secondary-color: #000000;"></i>
                                  </div>

                                </div>
                              </div>
                              <div class="js-product-image-icon"></div>
                            </div>
                            <div class="js-product-wrapper">
                              <div class="js-product-title">
                                <h2>United Business Interest Checking</h2>
                              </div>
                              <div class="js-product-button"><a href="./united-business-interest-checking">Get started</a></div>
                              <div class="js-product-button-aria">get started opening a united business interest checking</div>
                              <div class="js-product-description">
                                <p>An account that pays interest to sole proprietors, public funds, trusts, nonprofits and other eligible fiduciary accounts.&nbsp;</p>

                                <ul>
                                  <li>Interest earned on all balances</li>
                                  <li>Online and mobile banking</li>
                                  <li>25 waived transactions per month<sup>2</sup></li>
                                </ul>
                              </div>
                              <div class="js-product-features">
                                <ul>
                                  <li>Business Savings</li>
                                  <li>Higher Fees - Higher Interest</li>
                                  <li>25 waived transactions per month²</li>
                                </ul>
                              </div>
                              <div class="js-product-icon-type">icon</div>
                              <div class="js-product-fa-icon">
                                <div class="fontawesome-icons">
                                  <div class="fontawesome-icon">
                                    <i class="fas fa-chart-line" data-fa-transform="" data-fa-mask="" style=""></i>
                                  </div>

                                </div>
                              </div>
                              <div class="js-product-image-icon"></div>
                            </div>
                            <div class="js-product-wrapper">
                              <div class="js-product-title">
                                <h2>United Business Money Market Gold</h2>
                              </div>
                              <div class="js-product-button"><a href="./united-business-money-market-gold">Get Started</a></div>
                              <div class="js-product-button-aria">get started opening a untied business money market gold account</div>
                              <div class="js-product-description">
                                <p>Interest-bearing account that provides additional cash access options.&nbsp;</p>

                                <ul>
                                  <li>Interest earned on all balances</li>
                                  <li>Online and mobile banking</li>
                                  <li>Access via check-writing and debit card&nbsp;</li>
                                </ul>
                              </div>
                              <div class="js-product-features">
                                <ul>
                                  <li>Business Savings</li>
                                  <li>Higher Fees - Higher Interest</li>
                                  <li>Check-writing</li>
                                </ul>
                              </div>
                              <div class="js-product-icon-type">icon</div>
                              <div class="js-product-fa-icon">
                                <div class="fontawesome-icons">
                                  <div class="fontawesome-icon">
                                    <i class="fas fa-ring" data-fa-transform="" data-fa-mask="" style=""></i>
                                  </div>

                                </div>
                              </div>
                              <div class="js-product-image-icon"></div>
                            </div>








                          </div>
                        </div>

                      </div>




                      <div class="q2-section call-to-action-section secondary gutter-none">
                        <div class="q2-wrap">
                          <p>Need new checks? Order them using your account information.</p>

                          <a href="https://www.ordermychecks.com/login_a.jsp" target="_blank" rel="nofollow" class="button" aria-label="Order checks by going to ordermychecks.com">Order Checks</a>

                        </div>
                      </div>


                      <div class="q2-section general-section gutter-both ">
                        <div class="q2-wrap grid-container">

                          <div class="reveal" data-reveal="" id="zipCodeChallenge">
                            <div class="row">
                              <div class="small-12 large-10 large-centered columns text-center">
                                <h2>What's your ZIP code?</h2>

                                <p>We need this to give you the right info for your location.</p>

                                <div class="row">
                                  <div class="large-12 columns">
                                    <div class="row ">
                                      <div class="small-10 small-centered columns"><input id="userInputZip" placeholder="Your ZIP Code" type="text" /><button aria-label="Close modal" class="close-button" data-close="" type="button"><span aria-hidden="true">×</span></button></div>
                                    </div>

                                    <div class="row">
                                      <div class="small-10 small-centered columns"><button class="button radius large expand" id="userInputZipSend">Get Started</button>

                                        <div class="align-center" id="odao-loader">&nbsp;</div>

                                        <div class="align-center" id="odao-zip-error"><span><strong><i>Please enter a valid ZIP code.</i></strong></span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div id="compare-accounts">
                            <h2>Find the personal account that's right for you.&nbsp;</h2>

                            <div class="section-summary">
                              <p><br />
                                When it comes to checking, one size does not fit all. From IDProtect® to mobile check deposit, we offer account options with features designed around the way you live.</p>
                            </div>

                            <table>
                              <caption class="sr-only">Compare Checking Accounts</caption>
                              <thead>
                                <tr>
                                  <td class="sticky row-desktop">&nbsp;</td>
                                  <th scope="col">Basic Checking
                                    <div class="start-button"><a aria-label="start here for basic checking account opening" class="button addProduct checkingOverview_basic odao-overview" data-product="basic_checking" href="#odao" role="button" tabindex="0">Start <span class="hide-mobile">Here</span></a></div>

                                    <div class="start-icon"><a aria-label="start here for basic checking account opening" class="addProduct checkingOverview_basic odao-overview" data-product="basic_checking" href="#odao" role="button" tabindex="0"><i class="fa fa-external-link-alt fa-2x">&nbsp;</i></a></div>
                                  </th>
                                  <th scope="col">Secure Checking
                                    <div class="start-button"><a aria-label="start here for secure checking account opening" class="button addProduct checkingOverview_secure odao-overview" data-product="secure_checking" href="#odao" role="button" tabindex="0">Start <span class="hide-mobile">Here</span></a></div>

                                    <div class="start-icon"><a aria-label="start here for secure checking account opening" class="addProduct checkingOverview_secure odao-overview" data-product="secure_checking" href="#odao" role="button" tabindex="0"><i class="fa fa-external-link-alt fa-2x">&nbsp;</i></a></div>
                                  </th>
                                  <th scope="col">Prestige Checking
                                    <div class="start-button"><a aria-label="start here for prestige checking account opening" class="button addProduct checkingOverview_prestige odao-overview" data-product="prestige_checking" href="#odao" role="button" tabindex="0">Start <span class="hide-mobile">Here</span></a></div>

                                    <div class="start-icon"><a aria-label="start here for prestige checking account opening" class="addProduct checkingOverview_prestige odao-overview" data-product="prestige_checking" href="#odao" role="button" tabindex="0"><i class="fa fa-external-link-alt fa-2x">&nbsp;</i></a></div>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Online &amp; Mobile Banking</strong><sup>1,9</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Online &amp; Mobile Banking</strong><sup>1,9</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>No-Fee Foreign ATM Withdrawals</strong><sup>2</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>No-Fee Foreign ATM Withdrawals</strong><sup>2</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Visa® Instant Issue Debit Card</strong><sup>3</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Visa® Instant Issue Debit Card</strong><sup>3</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Online Bill Pay</strong></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Online Bill Pay</strong></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Mobile Check Deposit</strong><sup>1</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Mobile Check Deposit</strong><sup>1</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Pay-a-Person</strong></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Pay-a-Person</strong></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>e-Statements</strong><sup>9</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>e-Statements</strong><sup>9</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>$100 off Mortgage Closing</strong><sup>7</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>$100 off Mortgage Closing</strong><sup>7</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Identity and Cell Phone Protection</strong><sup>4</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Identity and Cell Phone Protection</strong><sup>4</sup></th>
                                  <td>
                                    <p>‒</p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p>‒</p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Credit File Monitoring</strong><sup>4</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Credit File Monitoring</strong><sup>4</sup></th>
                                  <td>
                                    <p>‒</p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p>‒</p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>ID Theft Resolution Services</strong><sup>4</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>ID Theft Resolution Services</strong><sup>4</sup></th>
                                  <td>
                                    <p>‒</p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p>‒</p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong><a aria-label="YouFirst Personalized Debit Card page" href="./personalized-debit" target="_blank">You<i>First</i> Personalized Debit Card</a></strong><sup>8</sup></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong><a aria-label="YouFirst Personalized Debit Card page" href="./personalized-debit" target="_blank">You<i>First</i> Personalized Debit Card</a></strong><sup>8</sup></th>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                  <td>
                                    <p><span class="tick">✔</span></p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Earns Interest</strong></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Earns Interest</strong></th>
                                  <td>
                                    <p>No</p>
                                  </td>
                                  <td>
                                    <p>No</p>
                                  </td>
                                  <td>
                                    <p>Yes</p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Opening Deposit</strong></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Opening Deposit</strong></th>
                                  <td>
                                    <p>$100</p>
                                  </td>
                                  <td>
                                    <p>$100</p>
                                  </td>
                                  <td>
                                    <p>$100</p>
                                  </td>
                                </tr>
                                <tr class="row-mobile">
                                  <th colspan="3" scope="row"><strong>Monthly Maintenance Fee</strong></th>
                                </tr>
                                <tr>
                                  <th class="row-desktop" scope="row"><strong>Monthly Maintenance Fee</strong></th>
                                  <td>
                                    <p>$3.50<sup>5</sup><br />
                                      <a aria-label="how to waive" class="details8" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                    </p>
                                  </td>
                                  <td>
                                    <p>$6.95</p>
                                  </td>
                                  <td>
                                    <p>$7.50<sup>6</sup><br />
                                      <a aria-label="how to waive" class="details2" href="#" onclick="return false" role="button" tabindex="0">How to waive</a>
                                    </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <p>&nbsp;</p>


                        </div>
                      </div>

                      <div class="q2-section testimonial-section">
                        <div id="testimonial-orbit" class="orbit" role="region" data-orbit data-auto-play="false" data-use-m-u-i="false">
                          <div class="orbit-wrapper">
                            <ul class="orbit-container">

                              <li class="orbit-slide">
                                <figure class="orbit-figure">
                                  <div class="orbit-image" style="background-image: url(https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/2021-03/testimonial_securechecking.png?VersionId=SSz8vqOtWUXDE5mke.nIMRcdWpxdCkNr); background-position: 50% 50%;"></div>
                                  <figcaption class="orbit-caption grid-container">
                                    <div class="grid-x">
                                      <div class="quote-container cell small-12">
                                        <h2 class="quote">"I love being a part of our customers' life, being able to make a difference is so heartwarming."</h2>
                                      </div>
                                      <div class="testimonial-name cell small-12">
                                        Sandra
                                        <div class="testimonial-sub">Relationship Banker at Jeko Credit Federal Union (JEKOCFU)</div>
                                      </div>
                                    </div>
                                  </figcaption>
                                </figure>
                              </li>



                            </ul>
                          </div>
                        </div>
                      </div>




                      <div class="q2-section uneven-section grey gutter-both">
                        <div class="q2-wrap grid-container">
                          <div class="grid-x grid-margin-x grid-margin-y">
                            <div class="cell small-12 medium-5">

                              <div class="mobile-banking-img align-center media-image">

                                <img src="https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/2021-03/mobile-online-banking.png?VersionId=xY3AfF2KeraegTj0BIrjwdnl1FXio11U" width="361" height="250" alt="Gray smartphone with Jeko Credit Federal Union (JEKOCFU) website on it" loading="lazy" typeof="foaf:Image" class="img-fluid" style="filter: blur(4px);" />
                              </div>



                            </div>
                            <div class="cell small-12 medium-7">

                              <h2>Online &amp; Mobile Banking</h2>

                              <p>Jeko Credit Federal Union (JEKOCFU) makes it even easier to manage your personal accounts safely and conveniently with our&nbsp;Online and Mobile Banking. With simple-to-use navigation, online features and services, you can do your banking anytime, anywhere and save time and money.</p>

                              <ul>
                                <li>Mobile Deposits</li>
                                <li>Apple® Watch App</li>
                                <li>Bill Pay</li>
                                <li>eStatements</li>
                                <li>Funds Transfer</li>
                                <li>Budgeting</li>
                              </ul>

                              <p>&nbsp;</p>

                              <div class="button-container"><span class="lead-text">Available now.</span> <a aria-label="Download on the App Store" href="https://itunes.apple.com/us/app/bekofcu-bank-mobile/id1076548973?mt=8" rel="nofollow" target="_blank"><img alt="Download on the App Store" class="app-icon" src="https://q2-canvas-stg-files.s3.amazonaws.com/firstunitedbank/files/2021-04/appstore-icon.png" /></a> <a aria-label="Get it on Google Play" href="https://play.google.com/store/apps/details?id=com.bekofcubank4915.mobile" rel="nofollow" target="_blank"><img alt="Get it on Google Play" class="app-icon" src="https://q2-canvas-stg-files.s3.amazonaws.com/firstunitedbank/files/2021-04/googleplay-icon.png" /></a></div>


                              <div class="button-container">
                                <span class="lead-text"></span>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="q2-section general-section gutter-both ">
                        <div class="q2-wrap grid-container">

                          <div id="disclosure">
                            <p>1&nbsp; Message and data rates may apply. Such charges include those from your communications service provider.</p>

                            <p>2&nbsp; We'll waive 5 non-Jeko Credit Federal Union (JEKOCFU) ATM cash withdrawal fees per month.</p>

                            <p>3&nbsp; Additional replacement cards may be subject to a fee.</p>

                            <p>4&nbsp; Terms and conditions apply, click the Secure Checking Start Here button for more information.</p>

                            <p>5&nbsp; To waive the monthly maintenance fee for Basic Checking: Sign-up for eStatements, setup Direct Deposit, or Primary account holder maintains $10,000 or more in combined deposit accounts (Checking, savings, certificates of deposit) throughout the periodic statement cycle: on any given day of the periodic statement cycle; on the day the Monthly Maintenance fee may be charged. Automatically waived for accountholders 17 and under.</p>

                            <p>6&nbsp; To waive the monthly maintenance fee for Prestige Checking you must have $1,000 min. daily balance.</p>

                            <p>7&nbsp; Mortgage must be auto drafted from Jeko Credit Federal Union (JEKOCFU) checking account.&nbsp;Applies to secondary market&nbsp;mortgage loan only.</p>

                            <p>8&nbsp; $9.95 per card.</p>

                            <p>9&nbsp; Activation/registration required.</p>
                          </div>


                        </div>
                      </div>


                    </div>

                  </article>

                </div>
                <div class="reveal" id="q2_external_link_message" data-reveal>
                  <h2>Warning: You Are Leaving This Site.</h2>

                  <p>You are about to follow a link to <b><span class="q2-external-link-url">[Link]</span></b>. To proceed, click 'continue' below.&nbsp; To remain on this site, click 'cancel' below.</p>

                  <p><a aria-label="Close modal" class="button q2-external-link-cancel" data-close="" href="#" role="button" tabindex="0">Cancel</a>&nbsp;<a class="button q2-external-link-continue" href="#">Continue</a></p>
                </div>
              </div>

            </section>

          </div>
        </div>
      </main>
      <footer>
        <div class="footer-section">
          <div class="grid-container">
            <div class="grid-x align-middle">
              <div class="footer-menu cell small-12 large-auto large-grow">
                <nav class="menu-wrapper" id="footer-menu">
                  <ul>

                    <li>
                      <a class="" href="about-us.php">About Us</a>

                    </li>
                    <li>
                      <a class="" href="our-team.php">Our Team</a>

                    </li>
                    <li title="Careers">
                      <a class="" href="careers.php">Careers</a>

                    </li>
                    <li>
                      <a class="" href="contact-us.php">Contact Us</a>

                    </li>
                    <li>
                      <a class="" href="locations.php">Locations</a>

                    </li>
                    <li>
                      <a class="" href="spendlifewisely-overview.php">Spend Life Wisely</a>

                    </li>
                  </ul>

                </nav>
              </div>

            </div>
          </div>
        </div>
        <div class="footer-section">
          <div class="grid-container">
            <div class="grid-x">
              <div class="footer-icons cell small-12 medium-6 large-shrink">
                <div>
                  <div id="block-fdic">



                    <svg aria-labelledby="memberFDIClogo" viewbox="0 0 187.09 115" width="81" xmlns="http://www.w3.org/2000/svg">
                      <defs> </defs>
                      <title id="memberFDIClogo">Member FDIC logo</title>
                      <g data-name="Layer 2">
                        <g data-name="Layer 1">
                          <path class="cls-1" d="M44.51,41.88H70.08c23.06,0,37.77,14.18,37.77,36.31,0,24.51-16.3,36.44-42.27,36.44H44.51V41.88Zm24,16.69c-.93,0-2.12.13-3.71.13V97.92c13,0,23-5.16,23-20.14,0-12.85-8.21-19.21-19.34-19.21Z"></path>
                          <path class="cls-1" d="M187.09,63.06V43.85a39.78,39.78,0,0,0-16.3-3.32c-21.34,0-38.43,16.17-38.43,37.5s16.83,37,38,37c7.55,0,12.72-1.59,16.7-4.63V91.15c-6,3.71-10.07,5.3-15.64,5.3-10.73,0-19.08-7.82-19.08-19.34,0-11.27,8.48-19.48,19.08-19.48,5.83,0,10.07,2,15.64,5.43Z"></path>
                          <path class="cls-1" d="M0,27.3v3.44H14.18V27.3c-4.11-.14-4.77-.67-4.77-3.45V6.49l8.48,24.25h3.58L30.61,6.49v17c0,3.58,0,3.58-5,3.85v3.44H42V27.3c-4.78,0-4.91-.53-4.91-3.05v-17c0-2.78.4-3.71,4.91-3.71V0H28L20.8,19.48,14.18,0H0V3.58c4,0,4.64,0,4.64,3.44v16.3c0,3.18,0,4-4.64,4Z"></path>
                          <path class="cls-1" d="M68.75,27.3v3.44H81.87V27.3c-3.18-.14-3.18-.53-3.18-4.91V18.68c0-3.57,1.59-6.49,4.9-6.49,2.65,0,3.45,1.72,3.45,4.11v7.82c0,2.65-.13,3.18-3.31,3.18v3.44H95.52V27.3c-2.78,0-3-.27-3-2.92V19c0-3.71,1.72-6.89,5.17-6.89,2.65,0,3.18,1.59,3.18,4.77v8c0,2.25,0,2.52-3.18,2.52v3.44h13V27.3c-4,0-4.24.13-4.24-2.12V16.3c0-5-1.2-8-6.37-8-3,0-5,1.19-7.55,3.84a6.8,6.8,0,0,0-6.36-4c-3.31,0-5.56,1.72-7.42,4.24V8.88H68.75v3.18c4,0,4.38.13,4.38,3.31v7.29c0,4.64,0,4.64-4.38,4.64Z"></path>
                          <polygon class="cls-1" points="0.64 41.88 0.64 114.63 20.64 114.63 20.78 86.8 40.26 86.8 40.26 69.97 20.91 69.97 20.78 58.71 41.71 58.71 41.71 41.88 0.64 41.88 0.64 41.88"></polygon>
                          <path class="cls-1" d="M112.21,0h9.28V11.27c2.52-2.12,4.11-2.91,6.62-2.91,5.3,0,8.88,4.77,8.88,11.39,0,7.16-3.58,11.8-9.67,11.8a8.35,8.35,0,0,1-6.76-3.05L118.7,31h-2.78V7.16c0-3.57-.26-4-3.71-4V0Zm18.56,19.73c0-5-1.86-7.55-4.51-7.55-3.44,0-4.9,2.78-4.9,8,0,4.5,1.72,7.55,4.77,7.55,2.52,0,4.64-2.38,4.64-8Z"></path>
                          <path class="cls-1" d="M165.21,27.3v3.44h14.31V27.3c-4,0-4.37.13-4.37-3.05V19.48c0-4.37,1.46-8.35,5.43-8.35a3.51,3.51,0,0,1,1.33.27,3.38,3.38,0,0,0-2.25,3,2.89,2.89,0,0,0,3,2.92c2.12,0,3.58-1.59,3.58-4a4.87,4.87,0,0,0-5-5c-2.39,0-4.11,1.19-6.23,3.58v-3h-9.81v3.18c3.45,0,4.38,0,4.38,2.91v9c0,3.05,0,3.32-4.38,3.32Z"></path>
                          <path class="cls-1" d="M147.19,20.42c0,4.24,2,7.15,5.57,7.15,3.18,0,4.64-1.85,5.17-4.77h4c-.66,5.57-4.37,8.62-9.67,8.62-6.36,0-11.13-3.85-11.13-11.27,0-6.76,4.24-11.79,10.6-11.79s10.2,4.77,10.2,12.06Zm4.51-8.63c-2.65,0-4.24,1.85-4.24,5.16h8.35c0-3.44-1.33-5.16-4.11-5.16Z"></path>
                          <path class="cls-1" d="M50.73,20.42c0,4.24,2.12,7.15,5.7,7.15,3.18,0,4.64-1.85,5.17-4.77h3.84c-.66,5.57-4.24,8.62-9.54,8.62-6.36,0-11.26-3.85-11.26-11.27,0-6.76,4.37-11.79,10.73-11.79s10.07,4.77,10.07,12.06Zm4.64-8.63c-2.65,0-4.24,1.85-4.24,5.16h8.22c0-3.57-1.33-5.16-4-5.16Z"></path>
                          <polygon class="cls-1" points="109.97 114.63 129.98 114.63 129.98 41.88 109.97 41.88 109.97 114.63 109.97 114.63"></polygon>
                        </g>
                      </g>
                    </svg>

                  </div>
                  <div id="block-ehl">



                    <svg aria-labelledby="equalHousingLender" viewbox="0 0 166.1 170.01" width="48" xmlns="http://www.w3.org/2000/svg">
                      <defs> </defs>
                      <title id="equalHousingLender">Equal Housing Lender logo</title>
                      <g data-name="Layer 2">
                        <g data-name="Layer 1">
                          <path class="cls-1" d="M84,0,0,47.8V65.07H12.87v59.39H153V65.07h13.1V48.27Zm52.87,109.33H29.94V49.71L84,18l52.88,31.71Z"></path>
                          <polygon class="cls-1" points="55.24 72.41 55.24 57.74 111.16 57.74 111.16 72.41 55.24 72.41 55.24 72.41"></polygon>
                          <polygon class="cls-1" points="55.24 79.59 111.16 79.59 111.16 94.26 55.24 94.26 55.24 79.59 55.24 79.59"></polygon>
                          <path class="cls-1" d="M95.52,151.32H85.69V170h9.59c7.72,0,12.17-1.66,12.17-9C107.45,153.45,102.53,151.32,95.52,151.32ZM95,166H90.83V155.33h4.68c3.28,0,6.32,1.9,6.32,5.68C101.83,165.27,99,166,95,166Z"></path>
                          <path class="cls-1" d="M152.64,162.2c3.51-.47,5.15-1.89,5.15-5,0-4.26-2.11-5.91-7.25-5.91H137V170h5.14V162.2H147l5.38,7.81H158Zm-3.06-4h-7.49v-2.84h7.72c2.11,0,3,.24,3,1.42C152.85,158.2,152.15,158.2,149.58,158.2Z"></path>
                          <polygon class="cls-1" points="57.48 151.32 57.48 170.01 62.4 170.01 62.4 158.65 72.22 170.01 78.07 170.01 78.07 151.32 73.16 151.32 73.16 162.91 63.33 151.32 57.48 151.32 57.48 151.32"></polygon>
                          <polygon class="cls-1" points="9.25 151.32 9.25 170.01 27.73 170.01 27.73 165.99 14.4 165.75 14.4 151.32 9.25 151.32 9.25 151.32"></polygon>
                          <polygon class="cls-1" points="33.02 170.01 51.04 170.01 51.04 165.99 38.4 165.99 38.4 161.97 48.93 161.97 48.93 158.18 38.4 158.18 38.4 155.34 51.04 155.34 51.04 151.32 33.02 151.32 33.02 170.01 33.02 170.01"></polygon>
                          <polygon class="cls-1" points="113.2 151.32 113.2 170.01 130.99 169.77 130.99 165.99 118.35 165.99 118.35 161.97 129.11 161.97 129.11 158.18 118.35 158.18 118.35 155.34 130.99 155.34 130.99 151.32 113.2 151.32 113.2 151.32"></polygon>
                          <path class="cls-1" d="M54.57,129.92h-4l-4.67,16.8h3.41l1-3.79h4.21l1,3.79h3.64Zm-3.49,10.22,1.41-6.63,1.63,6.63Z"></path>
                          <path class="cls-1" d="M30.12,144.35a8.44,8.44,0,0,0,.94-4.49v-3.55c0-4-.94-6.86-5.61-6.86-4.22,0-5.62,2.36-5.62,6.62v4.5c0,5.68,3.28,5.91,12.87,5.91l.23-1.18Zm-2.58-3.79c0,3.08-.24,3.79-2.11,3.79-1.64,0-2.1-.95-2.1-4v-4c0-3.07.23-4,2.34-4,1.63,0,1.87.47,1.87,3.79Z"></path>
                          <path class="cls-1" d="M115.29,142.22c0,2.6,1.63,4.73,5.38,4.73,3,0,5.85-2.13,5.85-4.73,0-4-7.49-5.92-7.49-8.52,0-.95.94-1.42,1.87-1.42,1.41,0,2.11.95,2.81,2.37l2.34-1c-.24-2.37-1.87-4.26-5.38-4.26-2.81,0-5.15,1.42-5.15,4.26,0,4.73,7.49,5.92,7.49,9,0,1.19-.7,1.66-2.11,1.66s-2.34-.95-2.81-2.6l-2.8.47Z"></path>
                          <path class="cls-1" d="M95.54,129.44c-3.51,0-5.62,1.89-5.62,6.39v5.44c0,4,1.17,5.68,5.62,5.68s5.61-1.89,5.61-6.39v-5.2C101.15,131.1,100,129.44,95.54,129.44Zm2.09,11.12c0,2.84-.7,3.79-2.1,3.79-1.87,0-2.11-1.18-2.11-3.55v-5.21c0-2.13.24-3.55,2.11-3.55s2.1,1.66,2.1,3.55Z"></path>
                          <path class="cls-1" d="M146.56,140.56c0,5,1.41,6.39,6.09,6.39,3.62,0,4.67-1.72,4.67-3.55V138h-4.91v2.6h1.64v1.9c0,1.42-.47,2.13-1.64,2.13-2.34,0-2.57-1.66-2.57-4v-3.78c0-2.84.23-4.74,2.57-4.74,1.64,0,2.57,1.19,2.81,2.84l2.34-.94c-.24-2.84-2.11-4.5-5.38-4.5-4.68,0-5.62,2.6-5.62,6.15v5Z"></path>
                          <path class="cls-1" d="M102.61,129.91v9.7c0,5.68,1,7.5,5.88,7.5,3.74,0,5.12-2.05,5.12-7V129.91h-3.28v9.7c0,3.79-.23,4.74-2.1,4.74s-2.11-1.42-2.11-5v-9.47Z"></path>
                          <polygon class="cls-1" points="133.87 129.92 133.87 146.72 136.68 146.72 136.68 135.36 140.65 146.72 144.87 146.72 144.87 129.92 142.06 129.92 142.06 140.33 138.31 129.92 133.87 129.92 133.87 129.92"></polygon>
                          <path class="cls-1" d="M34.42,129.91v10.18c0,4.73.47,6.86,5.15,6.86,5.38,0,5.62-2.6,5.62-7.34v-9.7H41.91v9.94c0,3.31-.47,4.26-2.1,4.26-1.88,0-2.11-1-2.11-4.73v-9.47Z"></path>
                          <polygon class="cls-1" points="76.97 129.92 76.97 146.72 80.25 146.72 80.25 139.14 84.23 139.14 84.23 146.72 87.5 146.72 87.5 129.92 84.23 129.92 84.23 136.3 80.25 136.3 80.25 129.92 76.97 129.92 76.97 129.92"></polygon>
                          <polygon class="cls-1" points="9.01 129.92 9.01 146.72 17.43 146.72 17.43 144.11 12.29 144.11 12.29 139.38 16.97 139.38 16.97 137.01 12.29 137.01 12.29 132.52 17.43 132.52 17.43 129.92 9.01 129.92 9.01 129.92"></polygon>
                          <polygon class="cls-1" points="60.73 129.92 60.73 146.72 68.45 146.72 68.45 144.11 63.54 144.11 63.54 129.92 60.73 129.92 60.73 129.92"></polygon>
                          <polygon class="cls-1" points="128.23 129.92 128.23 146.72 131.28 146.72 131.28 129.92 128.23 129.92 128.23 129.92"></polygon>
                        </g>
                      </g>
                    </svg>

                  </div>

                </div>

              </div>
              <div class="footer-copyright cell small-12 large-auto medium-order-3 large-order-2">
                <div>
                  <div id="block-copyright">



                    <ul>
                      <li>NMLS # 400025</li>
                      <li><a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="f9019e23-44d3-4cdd-a6f6-f224d4c102b8" href="privacy-policy.php" title="Privacy Policy">Privacy Policy</a></li>
                      <li><a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="a5741f65-2394-4245-a46b-66dfbfd34c34" href="online-security.php" title="Security Statement">Security Statement</a></li>
                      <li><a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="5f43d6f0-341b-4aba-9136-eac429d337c3" href="terms-of-use.php" title="Terms of Use">Terms of Use</a></li>
                      <li><a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="9a48544f-4c08-434d-9849-bcc40f77b8f2" href="accessibility-statement.php" title="Accessibility Statement">Accessibility Statement</a></li>
                    </ul>
                    <p>© <script>
                        document.write(new Date().getFullYear())
                      </script> Jeko Credit Federal Union (JEKOCFU). All rights reserved.</p>


                  </div>

                </div>

              </div>
              <div class="footer-phone cell small-12 medium-6 large-shrink medium-order-2 large-order-3">
                <div>
                  <div id="block-footerphone">



                    <p style="padding-bottom:0.3rem;"><strong><a href="https://wa.me/+447774844796" aria-label="Jeko Credit Federal Union (JEKOCFU) telephone number (447)-774-844-796"> (447)-774-844-796</a></strong></p>
                    <a href="#" rel="nofollow" target="_blank">
                      <div class="ea-icon media-image">

                        <img src="https://trabian-canvas-prd-files.s3.amazonaws.com/firstunitedbank-com/files/image/eA_icon.png?VersionId=SsLITZS5uBlpllnDlprzko7T.ASz1bJT" width="134" height="50" alt="This icon serves as a link to download the eSSENTIAL Accessibility assistive technology app for individuals with physical disabilities. It is featured as part of our commitment to diversity and inclusion." loading="lazy" typeof="foaf:Image" class="img-fluid" />
                      </div>
                    </a>

                    <p> </p>


                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </footer>
    </div> <!-- Closes div.off-canvas-content in the header file, do not remove -->

  </div>


  <script type="application/json" data-drupal-selector="drupal-settings-json">
    {
      "path": {
        "baseUrl": "\/",
        "scriptPath": null,
        "pathPrefix": "",
        "currentPath": "node\/23",
        "currentPathIsAdmin": false,
        "isFront": false,
        "currentLanguage": "en"
      },
      "pluralDelimiter": "\u0003",
      "q2_product_guide_path": "modules\/custom\/q2_product_guide",
      "q2_smart_search_list": {
        "#type": "inline_template",
        "#template": "\u003Cul\u003E\n  \n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/business-checking-accounts\u0022\u003EBusiness Checking\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/business-savings-accounts\u0022\u003EBusiness Savings\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/spendlifewisely\/business-banking-services\u0022\u003EBusiness Banking\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022active\u0022 href=\u0022\/checking-accounts\u0022\u003EChecking Accounts\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/basic-checking\u0022\u003EBasic Checking\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/prestige-checking\u0022\u003EPrestige Checking\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/secure-checking\u0022\u003ESecure Checking\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/savings-accounts\u0022\u003ESavings Accounts\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/retirement-planning\u0022\u003ERetirement Planning\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/investment-management\u0022\u003EInvestment Management\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/estate-planning\u0022\u003EEstate Planning\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/trust-services\u0022\u003ETrust Services\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/locations\u0022\u003EATM\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/atm-precautions\u0022\u003EATM Precautions\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/certificate-deposit\u0022\u003ECD\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/cdoffer\u0022\u003ECD Rates\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/certificate-deposit\u0022\u003ECertificate of Deposit\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli title=\u0022Careers\u0022\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/careers\u0022\u003ECareers\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/insurance\u0022\u003EInsurance\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/personal-insurance\/personal-insurance-products\u0022\u003EPersonal Insurance\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/personal-insurance\/auto-insurance\u0022\u003EAuto Insurance\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/business-insurance\/commercial-insurance\u0022\u003ECommercial Insurance\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/personal-insurance\/homeowners-insurance\u0022\u003EHome Insurance\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/personal-insurance\/life-insurance\u0022\u003ELife Insurance\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/business-insurance\/employee-benefits\u0022\u003EEmployee Benefits\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/locations\u0022\u003ELocations\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/insurance\/locations\u0022\u003EInsurance Locations\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 target=\u0022_blank\u0022 rel=\u0022nofollow\u0022 href=\u0022https:\/\/firstunitedteam.mymortgage-online.com\/\u0022\u003EMortgage\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/additional-services#overdraft-advantage\u0022\u003EOverdraft\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/additional-services#overdraft-advantage\u0022\u003EOverdraft Advantage\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/ppp-loan-update-main\u0022\u003EPPP\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/ppp-loan-update-main\u0022\u003EPPP Loan Update\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/ppploan-forgiveness-information\u0022\u003EPPP Loan Forgiveness\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/direct-deposit#direct-deposit\u0022\u003ERouting Number\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/direct-deposit#direct-deposit\u0022\u003ETexas routing number\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/direct-deposit#direct-deposit\u0022\u003EOklahoma routing number\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/direct-deposit#direct-deposit\u0022\u003EAccount Number\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/direct-deposit\u0022\u003EDirect Deposit\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/simple-switch\u0022\u003ESimple Switch\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 href=\u0022\/spendlifewisely-overview\u0022\u003ESpend Life Wisely\u003C\/a\u003E\n    \n  \u003Cul\u003E\n      \n    \u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/spendlifewisely\u0022\u003ESpend Life Wisely blogs\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003Cli\u003E\n        \u003Ca class=\u0022\u0022 href=\u0022\/spendlifewisely\u0022\u003EBlogs\u003C\/a\u003E\n        \n      \u003C\/li\u003E\n\u003C\/ul\u003E\n\u003C\/li\u003E\n\u003Cli\u003E\n    \u003Ca class=\u0022\u0022 rel=\u0022nofollow\u0022 href=\u0022https:\/\/www.ordermychecks.com\/login_a.jsp\u0022\u003EOrder Checks\u003C\/a\u003E\n    \n  \u003C\/li\u003E\n\u003C\/ul\u003E\n"
      },
      "q2_add_logins": {
        "admin": false,
        "enable": true,
        "default_name": "Online Banking",
        "logins": [{
          "name": "Merchant Services - BancCard",
          "type": "link",
          "url": "https:\/\/www.mypaymentsinsider.com\/ui\/#\/us\/en_US\/login?nlc=true",
          "form_action": null,
          "user_name": null,
          "pass_name": null
        }, {
          "name": "Merchant Services - FiTech",
          "type": "link",
          "url": "https:\/\/www.firstview.net\/mvc\/account\/login?vendor=fitech",
          "form_action": null,
          "user_name": null,
          "pass_name": null
        }, {
          "name": "Mortgage - Loan Application",
          "type": "link",
          "url": "https:\/\/firstunitedteam.mymortgage-online.com\/MyAccount.html?borrowerportal=\u0026siteid=8311193244",
          "form_action": null,
          "user_name": null,
          "pass_name": null
        }, {
          "name": "Mortgage - Existing Loan",
          "type": "link",
          "url": "https:\/\/loansphereservicingdigital.bkiconnect.com\/fub\/#\/login",
          "form_action": null,
          "user_name": null,
          "pass_name": null
        }, {
          "name": "Secure Checking",
          "type": "link",
          "url": "https:\/\/www.idprotectme247.com\/sec\/",
          "form_action": null,
          "user_name": null,
          "pass_name": null
        }, {
          "name": "Trust Customer",
          "type": "link",
          "url": "https:\/\/firstunitedtrust.accessasc.com\/Account\/Login",
          "form_action": null,
          "user_name": null,
          "pass_name": null
        }]
      },
      "db_warning": {
        "display": false,
        "name": "an unknown Canvas admin user",
        "admin": false
      },
      "hide_mobile_menu": true,
      "q2_external_link_whitelist": ["s3.amazonaws.com", "online.firstunitedbank.com", "www.firstview.net", "firstunitedteam.mymortgage-online.com", "firstunitedbank.customercarenet.com", "www.gotomycard.com", "firstunitedtrust.accessasc.com", "www.idprotectme247.com"],
      "canvas_infra": "trabian",
      "canvas_env": "prd",
      "header_height": null,
      "user": {
        "uid": 0,
        "permissionsHash": "91dfaea3e8ab4a7d572a297298d89e93e3b90973200ae777b2f5f527b6446c05"
      }
    }
  </script>
  <script src="core/misc/drupalSettingsLoader%EF%B9%96v=9.4.9.js"></script>
  <script src="themes/custom/q2_base/dist/js/q2_base.min%EF%B9%96v=1.x.js"></script>
  <script src="modules/custom/q2_admin_overrides/src/dist/js/q2_admin_scripts.min%EF%B9%96ro3e14.js"></script>
  <script src="./core/assets/vendor/js-cookie/js.cookie.min.js?v=3.0.1"></script>
  <script src="./sites/default/themes/firstunitedbank-com/dist/js/scripts.min.js?v=1.x"></script>
  <script src="./modules/custom/q2_product_guide/src/dist/js/q2_product_guide_scripts.js?ro3e14"></script>
  <script src="./modules/custom/q2_smart_search/src/dist/js/q2_smart_search_scripts.min.js?ro3e14"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
  <script src="./modules/custom/q2_additional_logins/src/dist/js/q2_additional_logins_scripts.js?ro3e14"></script>
  <script src="./modules/custom/q2_blog/src/dist/js/q2_blog_scripts.min.js?v=1.x"></script>
  <script src="./modules/custom/q2_dynamic_content/dist/js/q2_dynamic_content.js?v=9.4.9"></script>
  <script src="./modules/custom/q2_external_link/src/dist/js/q2_external_link.min.js?v=9.4.9"></script>
  <script src="./modules/custom/q2_menu/dist/js/q2_menu.min.js?v=9.4.9"></script>

  <style type='text/css'>
    .embeddedServiceHelpButton .helpButton .uiButton {
      background-color: #005290;
      font-family: "Arial", sans-serif;
    }

    .embeddedServiceHelpButton .helpButton .uiButton:focus {
      outline: 1px solid #005290;
    }

    .input-hidden {
      display: none;
    }
  </style>

  <script type='text/javascript' src='https://service.force.com/embeddedservice/5.0/esw.min.js'></script>


</body>

</html>