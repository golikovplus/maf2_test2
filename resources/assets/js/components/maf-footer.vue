<template>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-alignment col-md-15 col-sm-15 col-xs-12">
          <a class="maf-logo" href="/" @click="goHome()"></a>
        </div>
        <div class="col-alignment col-md-15 col-sm-15 col-xs-12">
          <div class="center">
            <h3>Social</h3>
            <ul>
              <li><a href=""><i class="facebook-xs"></i> Facebook</a></li>
              <li><a href=""><i class="twitter-xs"></i> Twitter</a></li>
              <li><a href=""><i class="google-xs"></i> Google+</a></li>
            </ul>
          </div>
        </div>
        <div class="col-alignment col-md-15 col-sm-15 col-xs-12">
          <div class="center">
            <h3>Navigation</h3>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Testimonials</a></li>
              <li><a href="">Find an Agent</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-alignment col-md-15 col-sm-15 col-xs-12">
          <div class="center">
            <h3>Sign In / Join</h3>
            <ul>
              <li><a href="">Agent Sign In</a></li>
              <li><a href="">Agents Join Here</a></li>
              <li><a href="">Lender Sign In</a></li>
              <li><a href="">Lender Join Here</a></li>
            </ul>
          </div>
        </div>
        <div class="col-alignment col-md-15 col-sm-15 col-xs-12">
          <div class="center">
            <h3>Our Network</h3>
            <ul>
              <li><a href="">Charitable Agents</a></li>
              <li><a href="">My Agent Finder</a></li>
              <li><a href="">Sale Agent Finder</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="footer-inner">
          <div class="pull-left">
            <a>© MyAgentFinder 2016</a>
          </div>
          <div class="pull-right">
            <a>Terms of Service</a>
            <a class="male4">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
    export default {
        methods: {
            goHome: function() {
                localStorage.clear();
            }
        },
    }
</script>
