<template>
  <section id="our-customers" class="our-customers">
    <div class="container">
      <div class="row centered">
        <div class="center">
          <span class="line"></span>
          <h2>What our customers are saying about us</h2>
          <span class="line"></span>
        </div>
      </div>
      <div class="row centered">
        <div class="customers-gallery center">
          <img src="/images/demo/customer-1@3x.png" alt="Top Agent" class="hidden-xs"/>
          <img src="/images/demo/customer-2@3x.png" alt="Top Agent" />
          <img src="/images/demo/customer-3@3x.png" alt="Top Agent" />
          <img src="/images/demo/customer-4@3x.png" alt="Top Agent" />
          <img src="/images/demo/customer-5@3x.png" alt="Top Agent" />
            <!-- Uncomment next lines to get data from DB-->
            <!--<ul id="ul_top_hypers">-->
                <!--<li v-for="(testimonial,index) in vueRoot.testimonials" v-bind:index="index">-->
                    <!--<img v-bind:src="testimonial.image"  alt="Top Agent"/>-->
                    <!--<span v-if="index == 3">-->
                        <!--{{index}}<span-->
                            <!--v-bind:address="testimonial.image"-->
                            <!--v-bind:name="testimonial.name"></span>-->
                    <!--</span>-->

                <!--</li>-->
            <!--</ul>-->
        </div>
        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
          <div class="customer-valoration">
            <p>
              “My experience with Sagine Miller was superior! She was able to find me exactly what I was looking for in a home. I couldn’t be happier. I found my dream home! I am forever grateful.”
            </p>
            <h3><span>allie dawson</span> <br> san diego, ca</h3>
          </div>
        </div>
      </div>
      <i class="slider-ctrl-left big-arrow-left hidden-xs"></i>
      <i class="slider-ctrl-right big-arrow-right hidden-xs"></i>
    </div>
  </section>
</template>
<script>
    export default{
        data() {
            return {
                vueRoot: this.$parent.$parent
            }
        }
    }
</script>
