<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypo</title>
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="dark">
<header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/"><img src="assets/img/logo-light.svg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link" href="/">Exchange</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Markets
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/markets">Markets</a>
              <a class="dropdown-item" href="/market-capital">Market Capital</a>
              <a class="dropdown-item" href="/market-capital-bar">Market Bar</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Dashboard
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/profile">Profile</a>
              <a class="dropdown-item" href="/wallet">Wallet</a>
              <a class="dropdown-item" href="/settings">Settings</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/login">Login</a>
              <a class="dropdown-item" href="/signup">Sign Up</a>
              <a class="dropdown-item" href="/lock">Lock</a>
              <a class="dropdown-item" href="/otp-number">OTP Number</a>
              <a class="dropdown-item" href="/otp-verify">OTP Verify</a>
              <a class="dropdown-item" href="/reset">Reset</a>
              <a class="dropdown-item" href="/notfound">404</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="changeThemeLight">
              <i class="icon ion-md-sunny"></i>
            </a>
          </li>
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="clickFullscreen">
              <i class="icon ion-md-expand"></i>
            </a>
          </li>
          <li class="nav-item dropdown header-custom-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="icon ion-md-notifications"></i>
              <span class="circle-pulse"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                <a href="#!" class="text-muted">Clear all</a>
              </div>
              <div class="dropdown-body">
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-md-lock"></i>
                  </div>
                  <div class="content">
                    <p>Account password change</p>
                    <p class="sub-text text-muted">5 sec ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-md-alert"></i>
                  </div>
                  <div class="content">
                    <p>Solve the security issue</p>
                    <p class="sub-text text-muted">10 min ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-android"></i>
                  </div>
                  <div class="content">
                    <p>Download android app</p>
                    <p class="sub-text text-muted">1 hrs ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-bitcoin"></i>
                  </div>
                  <div class="content">
                    <p>Bitcoin price is high now</p>
                    <p class="sub-text text-muted">2 hrs ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-usd"></i>
                  </div>
                  <div class="content">
                    <p>Payment completed</p>
                    <p class="sub-text text-muted">4 hrs ago</p>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer d-flex align-items-center justify-content-center">
                <a href="#!">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown header-img-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img src="assets/img/avatar.svg" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="assets/img/avatar.svg" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">Tony Stark</p>
                  <p class="email text-muted mb-3">tonystark@gmail.com</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a href="/profile" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/wallet" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/settings" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="exchange-light.html" class="nav-link red">
                      <i class="icon ion-md-power"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="markets ptb70">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>BTC Index</h2>
              <p>7340.65</p>
              <span class="green"> + 0.45%</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartBtcLight"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>ETH Index</h2>
              <p>146.58</p>
              <span class="red"> - 5.09%</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartEthLight"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>LTC Index</h2>
              <p>44.49</p>
              <span class="green"> + 2.14%</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartLtcLight"></div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="markets-pair-list">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="false"><i
                    class="icon ion-md-star"></i> Favorites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#KCS" role="tab" aria-selected="true">KCS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="true">USDT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#ALTS" role="tab" aria-selected="true">ALTS</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show" id="STAR" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show active" id="BTC" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TOMO/BTC</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MKR/BTC</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ZEC/BTC</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> VSYS/BTC</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ATOM/BTC</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MTV/BTC</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XTZ/BTC</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show" id="KCS" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ETH/KCS</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> EOS/KCS</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> LTC/KCS</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> KCS/KCS</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> COTI/KCS</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TRX/KCS</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XMR/KCS</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ADA/KCS</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> BNB/KCS</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> NEO/KCS</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TOMO/KCS</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MKR/KCS</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ZEC/KCS</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> VSYS/KCS</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ATOM/KCS</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MTV/KCS</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XTZ/KCS</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show" id="USDT" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ETH/USDT</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> EOS/USDT</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> LTC/USDT</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> USDT/USDT</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> USDT</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> COTI/USDT</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TRX/USDT</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XMR/USDT</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ADA/USDT</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> BNB/USDT</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> NEO/USDT</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TOMO/USDT</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MKR/USDT</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ZEC/USDT</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> VSYS/USDT</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ATOM/USDT</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MTV/USDT</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XTZ/USDT</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show" id="ALTS" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ETH/ALTS</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> EOS/ALTS</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> LTC/ALTS</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ALTS/ALTS</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> ALTS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> COTI/ALTS</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TRX/ALTS</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XMR/ALTS</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ADA/ALTS</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> BNB/ALTS</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> NEO/ALTS</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> TOMO/ALTS</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MKR/ALTS</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ZEC/ALTS</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> VSYS/ALTS</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> ATOM/ALTS</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> MTV/ALTS</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="/">
                      <td><i class="icon ion-md-star"></i> XTZ/ALTS</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="text-center">
              <a href="#" class="load-more btn">Load More <i class="icon ion-md-arrow-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>